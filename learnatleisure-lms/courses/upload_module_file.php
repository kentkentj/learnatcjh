<?php
if(isset($_POST['add_module_file']) && isset($_FILES['module_file'])){
    $errors= array();
    $file_name = $_FILES['module_file']['name'];
    $file_size =$_FILES['module_file']['size'];
    $file_tmp =$_FILES['module_file']['tmp_name'];
    $file_type=$_FILES['module_file']['type'];
    //$file_ext=strtolower(end(explode('.',$_FILES['module_file']['name'])));
    $tmp = explode('.', $file_name);
    $file_extension = end($tmp);
    
    $extensions= array("jpeg","jpg","png","pdf","ppt","pptx","mp4");
    
    if(in_array($file_extension,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 500000000){//bytes to mb
       $errors[]='File size must be excately 500 MB'; 
    }
    
    if(empty($errors)==true){
       try{
            require "server/config_main.php";
            $connection = new PDO($dsn, $username, $password, $options);

            $course = array(
                "course_id" => base64_url_decode($_GET['c']),
                "module_file_name" => $file_name,
                "file_type" => $file_extension,
                "date_created" => date('m-d-Y'),
                "file_size" => $file_size
            );
            $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "tbl_module_file",
                    implode(", ", array_keys($course)),
                    ":" . implode(", :", array_keys($course))
            );
            
            $statement_add_module_file = $connection->prepare($sql);
            $statement_add_module_file->execute($course);
            move_uploaded_file($file_tmp,"uploads/pdf/".$file_name);
        } catch(PDOException $error) {
            //echo $sql . "<br>" . $error->getMessage();
        }
    }else{
       print_r($errors);
    }
}
?>