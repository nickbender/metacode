<?php
  session_start();
  require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
  $dao = new Dao();

  $user = $dao->getUser($_SESSION["email"]);
  $user_id = $user["id"];
  $content = clean_input($_POST["content"]);
  $post_id = $_POST["post_id"];

  $id = $dao->saveComment ($user_id, $post_id, $content);

  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=<?php echo $_SERVER['HTTP_REFERER']; ?>" />
</head>
<body>
  <h1>
  </h1>
</body>
</html>
