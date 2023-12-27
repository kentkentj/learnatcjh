<?php
require "server/config_main.php";
if(isset($_POST['add_module'])){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $course_id = base64_url_decode($_GET['c']);
        $module = array(
            "module_name" => $_POST['module'],
            "course_id" => $course_id,
            "instructor_id" => $employee_id,
            "department_id" => $department_id,
            "module_status" => $_POST['save_as']
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_module",
                implode(", ", array_keys($module)),
                ":" . implode(", :", array_keys($module))
        );	
        $statement_add_module = $connection->prepare($sql);
        $statement_add_module->execute($module);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>