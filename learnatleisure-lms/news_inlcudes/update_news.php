<?php
if (isset($_POST['update_news']))
{
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        require "server/config_main.php";
        $connection = new PDO($dsn, $username, $password, $options);
        $story = ["news_id" => base64_url_decode($_GET['sid']), 
        "news_headline" => $_POST['headline'], 
        "news_description" => $_POST['new_content'], 
        "news_date" => $_POST['publish_date'], 
        "new_save_status" => $_POST['publish_status']];

        $sql = "UPDATE tbl_news 
        SET news_headline = :news_headline,
        news_description = :news_description,
        news_date = :news_date,
        new_save_status = :new_save_status 
        WHERE news_id = :news_id";
        $statement_update_news = $connection->prepare($sql);
        $statement_update_news->execute($story);
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
       // header('Location: account?u=' . base64_url_decode($_GET['u']) . '&&err="Update failed please try again!"');
    }
}
?>