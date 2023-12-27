<?php
//delete
require "server/config_main.php";

if (isset($_GET["sid"]) && isset($_GET['delete'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $news_id = base64_url_decode($_GET["sid"]);

    $sql = "DELETE FROM tbl_news WHERE news_id = :news_id";

    $statement_delete_news = $connection->prepare($sql);
    $statement_delete_news->bindValue(':news_id', $news_id);
    $statement_delete_news->execute();

    //$success = "User successfully deleted";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>