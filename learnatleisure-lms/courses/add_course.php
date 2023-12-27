<?php
require "server/config_main.php";
if(isset($_POST['add_course']) && isset($_FILES['cover_image_course'])){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    $errors= array();
    $file_name = $_FILES['cover_image_course']['name'];
    $file_size =$_FILES['cover_image_course']['size'];
    $file_tmp =$_FILES['cover_image_course']['tmp_name'];
    $file_type=$_FILES['cover_image_course']['type'];
    $tmp = explode('.', $file_name);
    $file_extension = end($tmp);
    
    $extensions= array("jpeg","jpg","png","pdf");
    
    if(in_array($file_extension,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
        try{
            $connection = new PDO($dsn, $username, $password, $options);
    
            $course = array(
                "course_name" => $_POST['course'],
                "course_description" => $_POST['description'],
                "instructor_id" => $employee_id,
                "department_id" => $department_id,
                "course_date" => $_POST['date'],
                "course_status" => $_POST['save_as'],
                "cover_image" => $file_name,
                "certificate_templ" => "certificate.jpg",
                "property" => $property
            );
            $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "tbl_course",
                    implode(", ", array_keys($course)),
                    ":" . implode(", :", array_keys($course))
            );
            
            $statement_add_course = $connection->prepare($sql);
            $statement_add_course->execute($course);
            move_uploaded_file($file_tmp,"uploads/course_cover_photo/".$file_name);
        } catch(PDOException $error) {
            //echo $sql . "<br>" . $error->getMessage();
        }
    }else{
       print_r($errors);
    }
}
?>