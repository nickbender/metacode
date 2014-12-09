<div class="comments">
  <h2>Comments</h2>

  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/Dao.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/User.php";

    $dao = new Dao();
    $usr = new User();
    $comments = $dao->getComments($post_id);

    foreach ($comments as $comment) {
      $user = $dao->getUserById($comment["user_id"]);

      echo "<div class='regular p2 bg-light-gray m2 rounded'>";
      echo htmlspecialchars($comment["content"]);;
      echo "</div>";
      echo "<div class='bold'>";
      echo htmlspecialchars($usr->user_name($user));
      echo "</div>";
    }
  ?>
</div>
