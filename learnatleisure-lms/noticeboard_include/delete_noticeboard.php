<?php
if (isset($_GET['en']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);

        
        $sql="DELETE FROM tbl_noticeboard WHERE noticeboard_id = :noticeboard_id";
        $statement_delete_noticeboard = $connection->prepare($sql);
        $statement_delete_noticeboard->bindValue(':noticeboard_id', base64_url_decode($_GET['en']));
        $statement_delete_noticeboard->execute();

        if($statement_delete_noticeboard){
            header('location: noticeboard');
            exit;
        }
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>