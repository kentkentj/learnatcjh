<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_answer WHERE module_content_id = :module_content_id AND course_id = :course_id AND user_id = :user_id";

	$statement_get_answers = $connection->prepare($sql);
    $statement_get_answers->bindValue(':module_content_id', base64_url_decode($_GET['q']));
    $statement_get_answers->bindValue(':course_id', base64_url_decode($_GET['c']));
    $statement_get_answers->bindValue(':user_id', $employee_id);
  	$statement_get_answers->execute();
    //rowCount()
} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>