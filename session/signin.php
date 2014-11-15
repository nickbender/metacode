<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include("../partials/head.php") ?>
  <body>
    <?php include '../partials/header.php' ?>
    <?php
      if ( empty( $_POST ) ) {
    ?>
      <div class="container">
      <form class="sign-in-form" action="signin.php"  method="post">
        <label><div>Email</div><input type="text" name="email" value= "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>" /></label><br/>
        <div class="error"><?php echo $_SESSION["email_error"]; ?></div>
        <label><div>Password</div><input type="password" name="password" /></label>
        <div class="error"><?php echo $_SESSION["password_error"]; ?></div>
        <input class="submit" type="submit" value="Log In" />
        <a href="signup.php">Need an account?</a>
      </form>
      </div>
    <?php
      } else {
          require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
          require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Password.php";

          $dao = new Dao();
          $pass = new Password();

          session_start();

          $_SESSION["form_errors"] = false;
          $_SESSION["email_error"] = "";
          $_SESSION["password_error"] = "";
          $_SESSION["email"] = "";


        	$email = "";
        	$password = "";

          if(empty($_POST["email"])) {
            $_SESSION["form_errors"] = true;
            $_SESSION["email_error"] = "An email is required";
          } else {
            $email = clean_input($_POST["email"]);
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
        			$_SESSION["name"] = user_name($user);
              $_SESSION["email"] = $email;
              $_SESSION["user_id"] = $user["id"];
        		} else {
              $_SESSION["form_errors"] = true;
              $_SESSION["password_error"] = "Invalid password";
              $_SESSION["email"] = $email;
            }
        	}

          function user_name($user) {
          	$user_name = "";
          	if (is_null($user["first_name"]) || $user["first_name"] === ""){
          		if (is_null($user["last_name"]) || $user["last_name"] === ""){
          			$user_name = $user["email"];
          		} else {
          			$user_name = ucwords($user["last_name"]);
          		}
          	} else {
          		$user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
          	}
          	return $user_name;
          }

          function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        }
      ?>

  </body>
</html>
