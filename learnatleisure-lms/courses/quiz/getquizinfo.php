<?php
try{
    require "server/config_main.php";
    $connection=new PDO($dsn, $username, $password, $options);

    $sql="SELECT module_content_name,module_content_description FROM tbl_module_content WHERE module_content_id = :module_content_id AND course_id = :course_id AND module_content_type = :module_content_type";

    $statement_get_quiz = $connection->prepare($sql);
    $statement_get_quiz->bindValue(':course_id', base64_url_decode($_GET['c']));
    $statement_get_quiz->bindValue(':module_content_id', base64_url_decode($_GET['q']));
    $statement_get_quiz->bindValue(':module_content_type', 'quiz');
    $statement_get_quiz->execute();
    $statement_get_quiz = $statement_get_quiz->fetchAll();

} catch(PDOException $error){
    echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404'); junk
}
?>