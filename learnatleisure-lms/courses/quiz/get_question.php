<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_quiz WHERE question_id = :question_id";

	$statement_get_question = $connection->prepare($sql);
    /*$statement_get_question->bindValue(':module_content_id', base64_url_decode($_GET['q']));
    $statement_get_question->bindValue(':course_id', base64_url_decode($_GET['c']));*/
    $statement_get_question->bindValue(':question_id', base64_url_decode($_GET['qid']));
  	$statement_get_question->execute();
	$result_get_questions = $statement_get_question->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: ../errors/404');
}
?>