<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_certificate 
    JOIN tbl_employee ON tbl_certificate.user_id = tbl_employee.employee_id 
    JOIN tbl_course ON tbl_certificate.course_id = tbl_course.course_id 
    WHERE tbl_certificate.user_id = :user_id";


	$statement_list_certificates = $connection->prepare($sql);
    $statement_list_certificates->bindValue(':user_id', $employee_id);
  	$statement_list_certificates->execute();
	$result_list_certificates = $statement_list_certificates->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>