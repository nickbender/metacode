<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php include("partials/head.php") ?>
  <body>
    <?php include 'partials/header.php' ?>
    <div class="row hero-bg">
      <div class="container">
        <div class="col-center col-6">
          <h1 class="h1 center hero-font mt3 mb0">Metacode</h1>
          <p class="center h4">
            Teaching the web is a business. <br>
            Reviewing code educators without bias is ours.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="h2 center m4">
          Get the lastest news and reviews about those who promise the most.
        </div>
        <hr>
        <div class="row">
        <!-- TODO: DRY up this section -->
          <div class="col col-3 center">
            <a href="schools/bloc.php">
              <img src="/images/bloc.jpg" alt="" class="fit p1" />
            </a>
          </div>
          <div class="col col-3 center">
            <a href="schools/codeschool.php">
              <img src="/images/codeschool.png" alt="" class="fit p1" />
            </a>
          </div>
          <div class="col col-3 center">
            <a href="educator.php">
              <img src="/images/treehouse.png" alt="" class="fit p1" />
            </a>
          </div>
          <div class="col col-3 center">
            <a href="educator.php">
              <img src="/images/devbootcamp.png" alt="" class="fit p1" />
            </a>
          </div>
          <div class="col col-3 center">
            <a href="educator.php">
              <img src="/images/thinkful.png" alt="" class="fit p1" />
            </a>
          </div>
          <div class="col col-3 center">
            <a href="educator.php">
              <img src="/images/codingdojo.png" alt="" class="fit p1" />
            </a>
          </div>
          <div class="col col-3 center">
            <a href="educator.php">
              <img src="/images/hackerschool.png" alt="" class="fit p1" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include 'partials/footer.php' ?>
  </body>
</html>
