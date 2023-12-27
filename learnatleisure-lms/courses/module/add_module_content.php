<?php
require "server/config_main.php";
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    if(isset($_POST['add_module'])){
        try{
            $connection = new PDO($dsn, $username, $password, $options);
    
            $course_id = base64_url_decode($_GET['c']);
            $module_id = base64_url_decode($_GET['mid']);
            $module = array(
                "module_id" => $module_id,
                "course_id" => $course_id,
                "department_id" => $department_id,
                "module_content_name" => $_REQUEST['module'],
                "module_content_description" => $_REQUEST['description'],
                "module_content_status" => $_REQUEST['save_as'],
                "module_content_type" => $_REQUEST['module_content_type']
            );
            $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "tbl_module_content",
                    implode(", ", array_keys($module)),
                    ":" . implode(", :", array_keys($module))
            );	
            $statement_add_module_content = $connection->prepare($sql);
            $statement_add_module_content->execute($module);
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
?>