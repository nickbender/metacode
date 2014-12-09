<?php session_start();
$post_id = 2; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include '../partials/head.php' ?>
  <body>
    <?php include '../partials/header.php' ?>
    <div class="container">
      <div class="row m4">
        <div class="col col-3 col-offset-1">
          <img src="/images/codeschool.png" alt="" class="rounded center mb2 fit" />
          <p class='m1 justified'>
          <span class="bold">Founded:</span> February 26, 2011<br>
          <span class="bold">Cost:</span> $0<br>
          </p>
        </div>
        <div class="col col-6">
          <em>From codeschool.com</em>
          <h2 class="h2">Codeschool</h2>
          <p>Most people don’t learn to program and design for the web by reading a book. Real learning takes place when you start experimenting with code in the browser and using design concepts in a website.</p>
          <p>In our opinion, the best way to learn is by doing. Code School opens the door to a new way of learning by combining video, coding in the browser, and gamification to make learning a new technology fun!</p>
          <p>Code School is an online learning platform that teaches a variety of programming and web design skills. Courses range from beginner to advanced levels and you get to earn rewards and badges as you learn.</p>
          <p>Our courses use screencasts and interactive exercises to guide you to better code. Each course has at least five levels. Each level begins with a 10-15 minute screencast, followed by a series of code challenges you must solve to make it to the next level.</p>
          <p><?php include("../partials/comment-form.php") ?></p>
          <p><?php include("../partials/comments.php") ?></p>
        </div>
      </div>
    </div>
    <?php include '../partials/footer.php' ?>
  </body>
 </html>
