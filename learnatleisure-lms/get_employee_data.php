<?php
  require 'server/config_main.php';
  if(isset($_POST['aid'])){

    $aid = $_POST['aid'];

    $sql="SELECT employee_id,employee_first_name,employee_last_name FROM tbl_employee WHERE department_id = $aid";
	$statement_list_employee = $connection->prepare($sql);
  	$statement_list_employee->execute();
	$result_list_employee = $statement_list_employee->fetchAll();
    echo json_encode($result_list_employee);
  }
?>