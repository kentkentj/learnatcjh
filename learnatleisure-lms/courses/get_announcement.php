<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

    $course_id = base64_url_decode($_GET['c']);
    $annoucement_id = base64_url_decode($_GET['aid']);
	$sql="SELECT * FROM tbl_announcement WHERE course_id = :course_id AND announcement_id = :announcement_id";

	$statement_get_announcement = $connection->prepare($sql);
    $statement_get_announcement->bindValue(':course_id', $course_id);
    $statement_get_announcement->bindValue(':announcement_id', $annoucement_id);
  	$statement_get_announcement->execute();
	$result_get_announcement = $statement_get_announcement->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    header('Location: ../errors/404');
}
?>