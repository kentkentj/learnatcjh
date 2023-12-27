<?php
try{
    require "server/config_main.php";
    $connection=new PDO($dsn, $username, $password, $options);

    $sql="SELECT * FROM tbl_module_content JOIN tbl_module ON tbl_module.module_id = tbl_module_content.module_id WHERE tbl_module_content.module_id = :module_id AND tbl_module_content.course_id = :course_id";

    $list_module_contents_manager = $connection->prepare($sql);
    $list_module_contents_manager->bindValue(':module_id', base64_url_decode($_GET['manage']));
    $list_module_contents_manager->bindValue(':course_id', base64_url_decode($_GET['c']));
    $list_module_contents_manager->execute();
    $result_list_module_contents_manager = $list_module_contents_manager->fetchAll();

} catch(PDOException $error){
    echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>