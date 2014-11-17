<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include '../partials/head.php' ?>
  <body>
    <?php include '../partials/header.php' ?>
    <div class="container">
      <div class="row m4">
        <div class="col col-3 col-offset-1">
          <img src="/images/bloc.jpg" alt="" class="rounded center mb2 fit" />
          <p class='m1 justified'>
          <span class="bold">Founded:</span> December 14, 2011<br>
          <span class="bold">Cost:</span> $4,999.99<br>
          </p>
        </div>
        <div class="col col-6">
          <h2 class="h2">Bloc.io</h2>
          <p>
            School info here
            <?php include("../partials/comment-form.php") ?>
          </p>
        </div>
      </div>
    </div>

    <?php include '../partials/footer.php' ?>
  </body>
 </html>
