<?php
//fetch course members
try{
	require "server/config_main.php";
    $sql="SELECT * FROM tbl_course_member WHERE course_id = :course_id AND user_id = :user_id";

    $course_id = base64_url_decode($_GET['c']);
	$statement_fetch_member = $connection->prepare($sql);
    $statement_fetch_member->bindValue(':course_id', $course_id);
    $statement_fetch_member->bindValue(':user_id', $employee_id);
  	$statement_fetch_member->execute();
	//$statement_fetch_member = $statement_fetch_member->fetchAll();
    if($statement_fetch_member->rowCount() > 0){
        //reload page
    }else{
        header('Location: enroll?c='. $_GET['c']);
    }
} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>