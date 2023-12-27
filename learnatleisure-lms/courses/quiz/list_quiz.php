<?php
try{
    require "server/config_main.php";
    $connection=new PDO($dsn, $username, $password, $options);

    $sql="SELECT * FROM tbl_module_content JOIN tbl_module ON tbl_module_content.module_id = tbl_module.module_id WHERE tbl_module_content.course_id = :course_id AND tbl_module_content.module_content_type = :module_content_type";

    $statement_list_quiz = $connection->prepare($sql);
    $statement_list_quiz->bindValue(':course_id', base64_url_decode($_GET['c']));
    $statement_list_quiz->bindValue(':module_content_type', 'quiz');
    $statement_list_quiz->execute();
    $statement_list_quiz = $statement_list_quiz->fetchAll();

} catch(PDOException $error){
    echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>