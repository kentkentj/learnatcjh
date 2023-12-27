<?php
if(isset($_POST['btn_certicate_file']) && isset($_FILES['certificate_file'])){
    $errors_cert= array();
    $file_name_cert = $_FILES['certificate_file']['name'];
    $file_size_cert =$_FILES['certificate_file']['size'];
    $file_tmp_cert =$_FILES['certificate_file']['tmp_name'];
    $file_type_cert=$_FILES['certificate_file']['type'];
    //$file_ext=strtolower(end(explode('.',$_FILES['module_file']['name'])));
    $tmp_cert = explode('.', $file_name_cert);
    $file_extension_cert = end($tmp_cert);
    
    $extensions_cert= array("jpeg","jpg","png","pdf","ppt","pptx","mp4");
    
    if(in_array($file_extension_cert,$extensions_cert)=== false){
       $errors_cert[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size_cert > 500000000){//bytes to mb
       $errors_cert[]='File size must be excately 500 MB'; 
    }
    
    if(empty($errors_cert)==true){
       try{
            require "server/config_main.php";
            $connection = new PDO($dsn, $username, $password, $options);
            //base64_url_decode($_GET['c'])
            $cert = ["course_id" => base64_url_decode($_GET['c']), 
            "certificate_templ" => $file_name_cert];
    
            $sql = "UPDATE tbl_course 
            SET course_id  = :course_id,
            certificate_templ = :certificate_templ
            WHERE course_id = :course_id";
            $statement_cert = $connection->prepare($sql);
            $statement_cert->execute($cert);
            move_uploaded_file($file_tmp_cert,"assets/certificate_templates/".$file_name_cert);
        } catch(PDOException $error) {
            //echo $sql . "<br>" . $error->getMessage();
        }
    }else{
       print_r($errors);
    }
}
?>