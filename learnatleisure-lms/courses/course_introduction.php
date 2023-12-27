<?php 
try{
	require "server/config_main.php";
    //require "server/common.php";
	$connection=new PDO($dsn, $username, $password, $options);
 
    $course_id = base64_url_decode($_GET['c']);
	$sql="SELECT * FROM tbl_course WHERE course_id = :course_id";

	$statement_course_intro = $connection->prepare($sql);
	$statement_course_intro->bindValue(':course_id', $course_id);
  	$statement_course_intro->execute();
	$result_course_intro = $statement_course_intro->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>