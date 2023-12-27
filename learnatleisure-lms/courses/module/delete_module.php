<?php
if (isset($_GET['delete_module']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
    
        $sql="DELETE FROM tbl_module WHERE module_id = :module_id;DELETE FROM tbl_module_content WHERE module_id = :module_id";
        $statement_delete_module = $connection->prepare($sql);
        $statement_delete_module->bindValue(':module_id', base64_url_decode($_GET['delete_module']));
        $statement_delete_module->execute();

        if($statement_delete_module){
            header('Location:course?c=' . $_GET['c'] . '&&link=module');
            exit;
        }
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>