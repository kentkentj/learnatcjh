<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

    $course_id = base64_url_decode($_GET['c']);
	$sql="SELECT * FROM tbl_course_member 
       JOIN tbl_employee ON tbl_course_member.user_id = tbl_employee.employee_id 
       JOIN tbl_course ON tbl_course_member.course_id = tbl_course.course_id 
    WHERE tbl_course_member.course_id = :course_id";

	$statement_list_member = $connection->prepare($sql);
    $statement_list_member->bindValue(':course_id', $course_id);
  	$statement_list_member->execute();
	$result_list_member = $statement_list_member->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>