<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_employee JOIN tbl_department ON tbl_employee.department_id = tbl_department.department_id 
    WHERE tbl_employee.property = :property AND tbl_department.department_id = :department_id AND tbl_employee.employment_status = :employment_status";

	$statement_getemployee_rankfile = $connection->prepare($sql);
    $statement_getemployee_rankfile->bindValue(':property', $property);
    $statement_getemployee_rankfile->bindValue(':department_id', $department_id);
    $statement_getemployee_rankfile->bindValue(':employment_status', 'Rank/File');
  	$statement_getemployee_rankfile->execute();
	$result_getemployee_rankfile = $statement_getemployee_rankfile->fetchAll();
} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>