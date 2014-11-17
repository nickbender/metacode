<?php
  require_once "../resources/Dao.php";
  require_once "../resources/Password.php";

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $dao = new Dao();
  $pass = new Password();

  session_start();

  $_SESSION["sign_up_form_errors"] = false;
  $_SESSION["sign_up_email_error"] = "";
  $_SESSION["sign_up_password_error"] = "";

  $first = clean_input($_POST['first']);
  $last = clean_input($_POST['last']);

  if(empty($_POST['email'])) {
    $_SESSION["sign_up_form_errors"] = true;
    $_SESSION["sign_up_email_error"] = "An email is required";
  } else {
    $email = clean_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $_SESSION["sign_up_form_errors"] = true;
      $_SESSION["sign_up_email_error"] = "A valid email is required";
      $_SESSION["email"] = $email;
    }
  }

  if(empty($_POST["password"])) {
    $_SESSION["sign_up_form_errors"] = true;
    $_SESSION["sign_up_password_error"] = "A password is required";
    $_SESSION["email"] = $email;
  } else {
    $password = $pass->crypt_pass($_POST['password']);
  }

  if (!$_SESSION["sign_up_form_errors"]){
    $user = $dao->getUser($email);

    if (is_null($user["email"])) {
      $dao->saveUser($first, $last, $email, $password);
      $user = $dao->getUser($email);
      $_SESSION["name"] = $first;
      $_SESSION["email"] = $email;
      $_SESSION["user_id"] = $user["id"];
    } else {
      $_SESSION["sign_up_form_errors"] = true;
      $_SESSION["sign_up_email_error"] = "This account already exists";
    }
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url='/'">
</head>
<body>
</body>
</html>
