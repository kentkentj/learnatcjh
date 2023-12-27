<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_quiz JOIN tbl_course ON tbl_quiz.course_id = tbl_course.course_id WHERE tbl_quiz.module_content_id = :module_content_id AND tbl_quiz.course_id = :course_id";

	$statement_list_questions = $connection->prepare($sql);
    $statement_list_questions->bindValue(':module_content_id', base64_url_decode($_GET['q']));
    $statement_list_questions->bindValue(':course_id', base64_url_decode($_GET['c']));
  	$statement_list_questions->execute();
	$result_list_questions = $statement_list_questions->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    header('Location: ../errors/404');
}
?>