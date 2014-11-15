<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include '../partials/head.php' ?>
  <body>
    <?php include '../partials/header.php' ?>
    <?php
      if ( empty( $_POST ) ) {
    ?>
      <div class="container">
        <form class="sign-up-form" action="signup" method="post">
          <label>First Name</span><input type="text" name="first" /></label><br>

          <label>Last Name<input type="text" name="last"></label><br>

          <label>Email<input type="text" name="email"></label><br>

          <label>Password</span><input type="password" name="password"></label><br>

          <input class="submit" type="submit" value="Sign up">
        </form>
      </div>
    <?php
    } else {
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

      $first = clean_input($_POST['first']);
      $_SESSION["first"] = $first;
      $last = clean_input($_POST['last']);
      $_SESSION["last"] = $last;


      if(empty($_POST["email"])) {
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
        } else {
          $_SESSION["sign_up_form_errors"] = true;
          $_SESSION["sign_up_email_error"] = "This account already exists";
        }
      }
    }
    ?>
  </body>
</html>
