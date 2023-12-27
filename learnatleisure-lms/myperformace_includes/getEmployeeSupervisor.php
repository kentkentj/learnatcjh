<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_employee JOIN tbl_department ON tbl_employee.department_id = tbl_department.department_id 
    WHERE tbl_employee.property = :property AND tbl_department.department_id = :department_id AND tbl_employee.employment_status = :employment_status";

	$statement_getemployee_supervisor = $connection->prepare($sql);
    $statement_getemployee_supervisor->bindValue(':property', $property);
    $statement_getemployee_supervisor->bindValue(':department_id', $department_id);
    $statement_getemployee_supervisor->bindValue(':employment_status', 'Supervisor');
  	$statement_getemployee_supervisor->execute();
	$result_getemployee_supervisor = $statement_getemployee_supervisor->fetchAll();
} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>