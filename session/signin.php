<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Password.php";

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $dao = new Dao();
  $pass = new Password();

  session_start();

  $_SESSION["form_errors"] = false;
  $_SESSION["email_error"] = "";
  $_SESSION["password_error"] = "";
  $_SESSION["email"] = "";

  clean_input($_POST['first']);
  $email = clean_input($_POST['email']);
  $password = clean_input($_POST['password']);

  if(empty($_POST["email"])) {
    $_SESSION["sign_in_error"] = true;
  } else {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $_SESSION["form_errors"] = true;
      $_SESSION["email_error"] = "A valid email is required";
      $_SESSION["email"] = $email;
    }
  }

  if(empty($_POST["password"])) {
    $_SESSION["form_errors"] = true;
    $_SESSION["password_error"] = "A password is required";
    $_SESSION["email"] = $email;
  } else {
    $password = $pass->crypt_pass($_POST['password']);
  }

  if ($_SESSION["password_error"] === ""){
    $user = $dao->getUser($email);

    if (is_null($user["email"])) {
      $_SESSION["form_errors"] = true;
      $_SESSION["email_error"] = "Account not found";
      $_SESSION["email"] = $email;
    } else if($pass->is_password_correct($user, "$password")){
    	$_SESSION["name"] = $user["first"];
      $_SESSION["email"] = $email;
      $_SESSION["user_id"] = $user["id"];
    } else {
      $_SESSION["form_errors"] = true;
      $_SESSION["password_error"] = "Invalid password";
      $_SESSION["email"] = $email;
    }
  }

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=<?php echo $_SERVER['HTTP_REFERER']; ?>">
</head>
<body>

</body>
</html>
