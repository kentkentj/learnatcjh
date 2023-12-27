<?php
//user_id	department_id	course_id	student_progress_finish_date	current_progress	progress_status	
function insert_course_progress($user_id, $department_id, $course_id, $student_progress_finish_date, $current_progress, $progress_status){
    try{
        require 'server/config_main.php';
        $connection = new PDO($dsn, $username, $password, $options);

        $progress = array(
            "user_id" => $user_id,
            "department_id" => $department_id,
            "course_id" => $course_id,
            "student_progress_finish_date" => $student_progress_finish_date,
            "current_progress" => $current_progress,
            "progress_status" => $progress_status
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_student_progress",
                implode(", ", array_keys($progress)),
                ":" . implode(", :", array_keys($progress))
        );
        
        $statement_add_course_progress = $connection->prepare($sql);
        $statement_add_course_progress->execute($progress);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}

//progress_id	user_id	department_id	course_id	student_progress_finish_date	current_progress	progress_status	
function update_course_progress($user_id,$department_id, $course_id, $student_progress_finish_date, $current_progress, $progress_status){
    try{
        require 'server/config_main.php';
        $connection = new PDO($dsn, $username, $password, $options);
        $progress = [
        "user_id" => $user_id,
        "department_id" => $department_id,
        "course_id" =>  $course_id,
        "student_progress_finish_date" => $student_progress_finish_date,
        "current_progress" => $current_progress,
        "progress_status" => $progress_status];

        $sql = "UPDATE tbl_student_progress 
        SET user_id = :user_id,
        department_id = :department_id,
        course_id = :course_id, 
        student_progress_finish_date = :student_progress_finish_date, 
        current_progress = :current_progress,
        progress_status = :progress_status
        WHERE course_id = :course_id AND user_id = :user_id";
        $statement_update_course_progress = $connection->prepare($sql);
        $statement_update_course_progress->execute($progress);
    }
    catch(PDOException $error){
        echo $sql . "<br>" . $error->getMessage();
    }
}

//check if user is already joined
try
{
    $connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_student_progress WHERE user_id = :user_id AND course_id = :course_id";

	$statement_check_course_progress = $connection->prepare($sql);
    $statement_check_course_progress->bindValue(':user_id', $employee_id);
    $statement_check_course_progress->bindValue(':course_id', base64_url_decode($_GET['c']));
  	$statement_check_course_progress->execute();
	//$result_check_course_progress = $statement_check_course_progress->fetchAll();
}
catch(PDOException $error)
{
    echo $sql . "<br>" . $error->getMessage();
}
?>