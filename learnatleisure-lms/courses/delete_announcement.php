<?php
if (isset($_GET['aid']))
{
  //delete user
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $announcement = ["announcement_id" =>  base64_url_decode($_GET['aid'])];

        $sql = "DELETE FROM tbl_announcement WHERE announcement_id  = :announcement_id";
        $statement_delete_announcement = $connection->prepare($sql);
        $statement_delete_announcement->execute($announcement);

        if($statement_delete_announcement){
            header('location: course?c='. $_GET['c'] . '&&link=announcement');
            exit;
        }
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>