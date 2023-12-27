<?php
if (isset($_POST['edit_course_overview']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $course = ["course_id" => base64_url_decode($_GET['c']), 
        "course_name" => $_POST['course'], 
        "course_description" => $_POST['description'], 
        "department_id" => $_POST['department'], 
        "course_date" => $_POST['date'], 
        "course_status" => $_POST['save_as']];

        $sql = "UPDATE tbl_course 
        SET course_id = :course_id,
        course_name = :course_name,
        course_description = :course_description,
        department_id = :department_id,
        course_date = :course_date,
        course_status = :course_status
        WHERE course_id = :course_id";
        $statement_update_course_overview = $connection->prepare($sql);
        $statement_update_course_overview->execute($course);

        if($statement_update_course_overview){
            header('location: course?c='. $_GET['c'] . '&&link=home');
            exit;
        }
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>