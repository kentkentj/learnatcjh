<?php 
try{
	require "server/config_main.php";
    include 'server/common.php';
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_course JOIN tbl_employee ON tbl_course.instructor_id = tbl_employee.employee_id";

	$statement_list_course_dashboard = $connection->prepare($sql);
  	$statement_list_course_dashboard->execute();
	$result_list_course_dashboard = $statement_list_course_dashboard->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>