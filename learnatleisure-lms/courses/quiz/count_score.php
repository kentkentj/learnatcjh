<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT tbl_module_content.module_content_name AS 'quiz_Name', COUNT(tbl_answer.answer) AS 'Correct Answer', SUM(tbl_quiz.question_points) AS 'points' FROM tbl_answer JOIN tbl_quiz ON tbl_answer.module_content_id = tbl_quiz.module_content_id JOIN tbl_module_content ON tbl_answer.module_content_id = tbl_module_content.module_content_id WHERE tbl_answer.answer = tbl_quiz.question_correct_answer AND tbl_answer.module_content_id = tbl_quiz.module_content_id AND tbl_answer.user_id = :user_id AND tbl_answer.course_id = :course_id GROUP BY tbl_quiz.module_content_id";

	$statement_count_scores = $connection->prepare($sql);
    $statement_count_scores->bindValue(':user_id', $employee_id);
    $statement_count_scores->bindValue(':course_id', base64_url_decode($_GET['c']));
  	$statement_count_scores->execute();
	$result_count_scores = $statement_count_scores->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: ../errors/404');
}
?>