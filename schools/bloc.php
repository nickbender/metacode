<?php session_start();
$post_id = 1; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include '../partials/head.php' ?>
  <body>
    <?php include '../partials/header.php' ?>
    <div class="container">
      <div class="row m4">
        <div class="col col-3 col-offset-1">
          <img src="/images/bloc.png" alt="" class="rounded center mb2 fit" />
          <p class='m1 justified'>
          <span class="bold">Founded:</span> December 14, 2011<br>
          <span class="bold">Cost:</span> $4,999.99<br>
          </p>
        </div>
        <div class="col col-6">
          <h2 class="h2">Bloc</h2>
          <em>From Bloc.io</em>
          <p>Simply put, Bloc is the world's largest online bootcamp. We offer more than curriculum, and more than mentorship — we offer a holistic program designed to get you results. We believe in projects, not textbooks. We believe in portfolios, not certificates. We believe in craftsmanship and quality.</p>
          <p>Mentors are the heart and soul of Bloc. Your mentor acts a coach, providing insight into the best way to tackle a problem. They act as an experienced guide, pair-programming when you get stuck, and as a career mentor, sharing years of industry insight and experience.</p>
          <p>Every Bloc course has a comprehensive, 100% original curriculum that exposes students to the daily challenges of a professional developer. Students don’t waste time doing exercises or watching videos — after learning the basics, they’re off building real, fully functional apps.</p>
          <p>Bloc’s curriculum pushes students to build real apps in a professional development environment — no online exercises or games here. The roadmap keeps students on track, while maintaining the flexibility of an online apprenticeship.</p>
          <p><?php include("../partials/comment-form.php") ?></p>
          <p><?php include("../partials/comments.php") ?></p>
        </div>
      </div>
    </div>

    <?php include '../partials/footer.php' ?>
  </body>
 </html>
