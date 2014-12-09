<?php session_start();
$post_id = 4; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include '../partials/head.php' ?>
<body>
  <?php include '../partials/header.php' ?>
  <div class="container">
    <div class="row m4">
      <div class="col col-3 col-offset-1">
        <img src="/images/treehouse.png" alt="" class="rounded center mb2 fit" />
        <p class='m1 justified'>
          <span class="bold">Founded:</span> November 1, 2011<br>
          <span class="bold">Cost:</span> $25 per month<br>
        </p>
      </div>
      <div class="col col-6">
        <h2 class="h2">Team Treehouse</h2>
        <em>From skilledup.com</em>
        <p>What if I told you there was a career track where a degree was not required, job growth is expected to be over 20% annually, you can work remotely, and quality candidates can expect a very competitive salary? These are the traits of a career in front-end development – the people that put together the interfaces of the websites, apps and web services you use everyday.</p>
        <p>As the market for apps, websites and web services has continued its upward climb, there continues to be great demand for quality front-end coders who can bring a specific skill set to bear. Front-end coders need to be able to master HTML, CSS and Javascript, but also creativity, user interface design know-how, and problem solving skills, in order to deliver next-generation web interfaces.</p>
        <p>Many front-end developers are self-taught, spending years building their own sites or side projects and improving their knowledge before they are able to contribute meaningfully to commercial projects. Teaching yourself by ‘hacking’ and reading web forums may seem to be the cheaper (or free) option, but in actuality learning this way can have major drawbacks. Many self-taught developers spend far more time than required to learn their craft, and end up with holes in their knowledge base that have them fall short of achieving mastery, resulting in a ceiling in their earnings potential. Spending 3 years to become average has a far higher opportunity cost than finding real training and becoming great in 12-18 months.</p>
        <p>Treehouse, a leading online education provider, seeks to help prospective coders become great coders by providing a rich library of over 600+ videos organized into specific learning tracks, along with interactive quizzes and code challenges. Treehouse provides deep and high quality training in HTML, CSS, Javascript, User Experience, as well as Back-End development in Ruby, PHP, iPhone and Android applications.</p>
        <p><?php include("../partials/comment-form.php") ?></p>
        <p><?php include("../partials/comments.php") ?></p>
      </div>
    </div>
  </div>

  <?php include '../partials/footer.php' ?>
</body>
</html>
