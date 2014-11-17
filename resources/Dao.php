<?php

class Dao {

  private $host = "127.0.0.1";
  private $db = "metacode";
  private $user = "root";
  private $pass = "totes-secure";

  public function getConnection () {
    try {
      $dbh = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
      }
    return $dbh;
  }

  public function getUsers () {
    $conn = $this->getConnection();
    return $conn->query("SELECT * FROM user");
  }

  public function getUser ($email) {
    $conn = $this->getConnection();
    $getQuery = "SELECT * FROM user WHERE email = :email";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":email", $email);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function getUserById ($id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT * FROM user WHERE id = :id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function saveUser ($first, $last, $email, $pass) {
    $conn = $this->getConnection();
    $saveQuery = "INSERT INTO user (first, last, email, password) VALUES (:first, :last, :email, :pass)";

      $q = $conn->prepare($saveQuery);
      $q->bindParam(":first", $first);
      $q->bindParam(":last", $last);
      $q->bindParam(":email", $email);
      $q->bindParam(":pass", $pass);
      $q->execute();
  }

  public function saveComment ($comment_date, $user_id, $post_id, $content) {
    $conn = $this->getConnection();
    $saveQuery =
    "INSERT INTO comment (user_id, post_id, content) VALUES (:user_id, :post_id, :content)";

    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user_id", $user_id);
    $q->bindParam(":post_id", $post_id);
    $q->bindParam(":content", $content);
    $q->execute();
    return $conn->lastInsertId();
  }

  public function deleteComment ($comment_id) {
    $conn = $this->getConnection();
    $deleteQuery = "DELETE FROM comment WHERE id = :id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam("id", $comment_id);
    $q->execute();
  }

  public function getComments ($post_id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT id, user_id, content FROM comment WHERE post_id = :post_id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":post_id", $post_id);
    $q->execute();
    return $q->fetchAll();
  }
}
?>
