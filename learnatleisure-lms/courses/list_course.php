<?php 
try{
	require "server/config_main.php";
    include 'server/encrypt_decrypt_get.php';
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT 
    tbl_course.course_id AS 'course_id',
    tbl_course.course_name AS 'course_name',
    tbl_course.course_description AS 'course_description',
    tbl_course.instructor_id AS 'instructor_id',
    tbl_employee.employee_first_name AS 'employee_first_name',
    tbl_employee.employee_last_name AS 'employee_last_name',
    tbl_course.course_date AS 'course_date',
    tbl_course.course_status AS 'course_status',
    tbl_course.cover_image AS 'cover_image'
    FROM tbl_course 
    JOIN tbl_employee ON tbl_course.instructor_id = tbl_employee.employee_id";

	$statement_list_course = $connection->prepare($sql);
  	$statement_list_course->execute();
	$result_list_course = $statement_list_course->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>