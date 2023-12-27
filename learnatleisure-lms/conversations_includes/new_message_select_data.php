<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_department";

	$statement_list_department = $connection->prepare($sql);
  	$statement_list_department->execute();
	$result_list_department = $statement_list_department->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>