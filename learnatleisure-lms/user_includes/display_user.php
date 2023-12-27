<?php 
try{
	require "server/config_main.php";
    include 'server/encrypt_decrypt_get.php';
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT 
        tbl_employee.employee_id AS 'employee_id',
        tbl_employee.employee_username AS 'employee_username',
        tbl_employee.employee_mobile_number AS 'employee_mobile_number',
        tbl_employee.employee_email AS 'employee_email',
        tbl_employee.employee_password AS 'employee_password',
        tbl_employee.employee_first_name AS 'employee_first_name',
        tbl_employee.employee_last_name AS 'employee_last_name',
        tbl_employee.employee_job_title AS 'employee_job_title',
        tbl_employee.property AS 'property',
        tbl_department.department_name AS 'department_name',
        tbl_employee.account_type AS 'account_type',
        tbl_employee.account_status AS 'account_status'
    FROM tbl_employee JOIN tbl_department ON tbl_employee.department_id = tbl_department.department_id";

	$statement_list_employee = $connection->prepare($sql);
  	$statement_list_employee->execute();
	$result_list_employee = $statement_list_employee->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>