<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include("partials/head.php") ?>
  <body>
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
      </div>
      </div>
    </header>

    <div class="container">
      <div class="col-center col-5">
        <h2 class="h2 center mt3 mb0">Sign up to participate</h1>
        <form action="../session/signup" method="post">
          <label>First Name</label>
          <input type="text" name='first' class="block full-width field-light">
          <label>Last Name</label>
          <input type="text" name='last' class="block full-width field-light">
          <label>Email Address</label>
          <input type="text" name='email' class="block full-width field-light">
          <label>Password</label>
          <input type="password" name='password' class="block full-width field-light"><br>
          <button class="button" type="submit">Sign Up</button
        </form>
      </div>
    </div>
    <?php include 'partials/footer.php' ?>
  </body>
</html>
