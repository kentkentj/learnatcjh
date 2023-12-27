<?php
try{
    require "server/config_main.php";
    $connection=new PDO($dsn, $username, $password, $options);

    $sql="SELECT * FROM tbl_module_content WHERE course_id = :course_id AND module_content_id < :module_content_id ORDER BY module_content_id DESC";

    $course_id = base64_url_decode($_GET['c']); 
    $module_content_id = base64_url_decode($_GET['m']); 

    $statement_view_modules_contents_prev = $connection->prepare($sql);
    $statement_view_modules_contents_prev->bindValue(':course_id', $course_id);
    $statement_view_modules_contents_prev->bindValue(':module_content_id', $module_content_id);

    $statement_view_modules_contents_prev->execute();
    $result_view_modules_contents_prev = $statement_view_modules_contents_prev->fetch(PDO::FETCH_ASSOC);

} catch(PDOException $error){
    //echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>