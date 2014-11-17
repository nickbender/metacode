<header>
  <div class="clearfix bg-mid-gray">
  <div class="container nav">
    <div class="left">
      <div class="medium nav-big nav-dark">
        <a href="/" class="h2 px1">
        { <span class="hero-font h3">M</span> }
        </a>
      </div>
    </div>
    <div class="right">
      <div class="medium nav-big nav-dark">
        <?php if (is_null($_SESSION["name"])) { ?>
        <form action="../session/signin.php" method="post">
          <?php if ($_SESSION["form_errors"] === true) {
            echo "Those credentials weren't correct. Please try again.";
          } ?>
          <input type="text" name='email' class="field-light" placeholder="Email">
          <input type="password" name='password' class="field-light" placeholder="Password">
          <button class="button-blue" type="submit">Sign In</button
        </form>
        <a href="../signup-form.php">Sign up</a>
        <?php
         } else {
          echo "Hello, " . $_SESSION["name"]; ?>
          <a href="/session/signout.php">&nbsp; Logout</a>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>
</header>
