<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_module_file WHERE course_id = :course_id ORDER BY module_file_id DESC";

	$statement_list_module_file = $connection->prepare($sql);
    $statement_list_module_file->bindValue(':course_id', $course_id);
  	$statement_list_module_file->execute();
	$result_list_module_file = $statement_list_module_file->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>