<?php 
try{
	require "server/config_main.php";
	require "server/common.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_department";

	$statement_department = $connection->prepare($sql);
  	$statement_department->execute();
	$result_department = $statement_department->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>