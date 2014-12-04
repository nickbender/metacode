<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include '../partials/head.php' ?>
<body>
  <?php include '../partials/header.php' ?>
  <div class="container">
    <div class="row m4">
      <div class="col col-3 col-offset-1">
        <img src="/images/devbootcamp.png" alt="" class="rounded center mb2 fit" />
        <p class='m1 justified'>
          <span class="bold">Founded:</span> November 1, 2011<br>
          <span class="bold">Cost:</span> $12,200<br>
        </p>
      </div>
      <div class="col col-6">
        <h2 class="h2">Dev Bootcamp</h2>
          <em>From devbootcamp.com:</em><br>
          <p>You will learn the fundamental technical and non-technical skills needed to build modern web applications. There are three areas of learning that we focus on at DBC, which we believe, best prepares students for dynamic careers as software developers.</p>
          <p>True technical knowledge: Students should know why they're writing each and every line of code they type. DBC is a no-memorization zone.</p>
          <p>Self-awareness: Students are aware of their own internal motivations, thoughts, feelings, and confusion.</p>
          <p>Empathy: Students are aware of their fellow students' motivations, thoughts, feelings, and confusion.</p>
          <p>We orient each student from day one towards seeking technical understanding, appreciation, and depth. So that their future as a developer is built on this solid foundation. And we have an integrated and intensive Engineering Empathy curriculum, based on decades of experience in these fields, to directly address empathy and self-awareness. You can read more about our approach here, and also hear about what one of our students had to say about it.</p>
          <p>
          <?php include("../partials/comment-form.php") ?>
        </p>
      </div>
    </div>
  </div>

  <?php include '../partials/footer.php' ?>
</body>
</html>
