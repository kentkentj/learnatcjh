<?php
try{
    require "server/config_main.php";
    $connection=new PDO($dsn, $username, $password, $options);

    $sql="SELECT * FROM tbl_module_content WHERE module_content_id = :module_content_id";

    $get_module_content_statement = $connection->prepare($sql);
    $get_module_content_statement->bindValue(':module_content_id', base64_url_decode($_GET['content']));
    $get_module_content_statement->execute();
    $result_get_module_content_statement = $get_module_content_statement->fetchAll();

} catch(PDOException $error){
    echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>