<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

    $course_id = base64_url_decode($_GET['c']);
	$sql="SELECT * FROM tbl_module WHERE course_id = :course_id";

	$statement_list_modules = $connection->prepare($sql);
	$statement_list_modules->bindValue(':course_id', $course_id);
  	$statement_list_modules->execute();
	$result_list_modules = $statement_list_modules->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>