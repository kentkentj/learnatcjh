<?php 
include 'server/signin_config.php';
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	   header('Location: signin');
	   exit;   
} 
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT employee_id, 
employee_username,
employee_mobile_number,
employee_email,
employee_password,
employee_first_name,
employee_last_name,
account_type,
department_id FROM tbl_employee WHERE employee_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($employee_id,$employee_username,$employee_mobile_number,$employee_email,$employee_password,$employee_first_name,$employee_last_name,$account_type,$department_id);
$stmt->fetch();
$stmt->close();  


$full_name = "";
$date_created = "";
$certificate_filename = "";
try{
	require "server/config_main.php";
	require "server/encrypt_decrypt_get.php";
	require "server/common.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_certificate 
    JOIN tbl_employee ON tbl_certificate.user_id = tbl_employee.employee_id 
    JOIN tbl_course ON tbl_certificate.course_id = tbl_course.course_id 
    WHERE tbl_certificate.user_id = :user_id AND tbl_certificate.certificate_id = :certificate_id";


	$statement_get_certificate = $connection->prepare($sql);
    $statement_get_certificate->bindValue(':user_id', $employee_id);
	$statement_get_certificate->bindValue(':certificate_id', base64_url_decode($_GET['crt']));
  	$statement_get_certificate->execute();
	$result_get_certificate = $statement_get_certificate->fetchAll();

	foreach($result_get_certificate as $row){
		$full_name = escape($row['employee_first_name'] . ' ' . $row['employee_last_name'] );
		$date_created = escape($row['certificate_date']);
		$course_name = escape($row['course_name']);
		$certificate_filename = escape($row['certificate_templ']);
	}
} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>