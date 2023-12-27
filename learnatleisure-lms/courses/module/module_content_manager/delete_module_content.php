<?php
if (isset($_GET['del']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
    
        $sql="DELETE FROM tbl_module_content WHERE module_content_id = :module_content_id";
        $statement_delete_module_content = $connection->prepare($sql);
        $statement_delete_module_content->bindValue(':module_content_id', base64_url_decode($_GET['del']));
        $statement_delete_module_content->execute();

        if($statement_delete_module_content){
            header('location: manage_module?c=' . $_GET['c'] . '&&manage=' . $_GET['manage']);
            exit;
        }
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>