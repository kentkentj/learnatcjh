<?php
require "server/config_main.php";
if(isset($_POST['enroll'])){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $course = array(
            "course_id" => base64_url_decode($_GET['c']),
            "user_id" => $employee_id
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_course_member",
                implode(", ", array_keys($course)),
                ":" . implode(", :", array_keys($course))
        );
        
        $statement_enroll = $connection->prepare($sql);
        $statement_enroll->execute($course);

        if(isset($_POST['enroll']) && $statement_enroll){
            header('Location:course?c=' . $_GET['c'] . '&&link=home');
        }
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>