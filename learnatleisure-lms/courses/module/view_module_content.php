<?php
try{
    require "server/config_main.php";
    require "server/common.php";
    $connection=new PDO($dsn, $username, $password, $options);

    $sql="SELECT * FROM tbl_module_content WHERE course_id = :course_id AND module_content_id = :module_content_id";

    $course_id = base64_url_decode($_GET['c']); 
    $module_content_id = base64_url_decode($_GET['m']); 

    $statement_view_modules_contents = $connection->prepare($sql);
    $statement_view_modules_contents->bindValue(':course_id', $course_id);
    $statement_view_modules_contents->bindValue(':module_content_id', $module_content_id);

    $statement_view_modules_contents->execute();
    $result_view_modules_contents = $statement_view_modules_contents->fetchAll();

} catch(PDOException $error){
    //echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>