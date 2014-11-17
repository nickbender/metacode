<?php if (is_null($_SESSION["name"])) { ?>
  <p class='h4'>
    You must sign in to leave a comment
  </p>
<?php } else { ?>
<div class="comment-form">
  <form class="commment-form" id="comment-form" action="/partials/new-comment.php" method="post">
    <textarea class="text-area mb2" id="comment-text-area" rows="4" cols="50" name="content"></textarea></br>
    <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
    <input type="hidden" name="user_name" value="<?php echo $_SESSION['first'] ?>">
    <button type="submit" class="button-blue">SUBMIT COMMENT</button>
  </form>
</div>
<?php } ?>
