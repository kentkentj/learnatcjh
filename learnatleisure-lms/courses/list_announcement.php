<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

    $course_id = base64_url_decode($_GET['c']);
	$sql="SELECT * FROM tbl_announcement JOIN tbl_course ON tbl_course.course_id = tbl_announcement.course_id WHERE tbl_announcement.course_id = :course_id";

	$statement_list_announcement = $connection->prepare($sql);
    $statement_list_announcement->bindValue(':course_id', $course_id);
  	$statement_list_announcement->execute();
	$result_list_announcement = $statement_list_announcement->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    header('Location: ../errors/404');
}
?>