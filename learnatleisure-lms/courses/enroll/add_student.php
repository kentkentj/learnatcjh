<?php
require "server/config_main.php";
if(isset($_POST['add_member'])){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        for($i=0;$i<count($_POST["select_member"]);$i++){
            $course = array(
                "course_id" => base64_url_decode($_GET['c']),
                "user_id" => $_POST['select_member'][$i]
            );
            $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "tbl_course_member",
                    implode(", ", array_keys($course)),
                    ":" . implode(", :", array_keys($course))
            );
            
            $statement_enroll_student = $connection->prepare($sql);
            $statement_enroll_student->execute($course);
        }
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>