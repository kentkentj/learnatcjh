<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_announcement ORDER BY announcement_id DESC LIMIT 5";

	$statement_list_course_announcement_dashboard = $connection->prepare($sql);
  	$statement_list_course_announcement_dashboard->execute();
	$result_list_course_announcement_dashboard = $statement_list_course_announcement_dashboard->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>