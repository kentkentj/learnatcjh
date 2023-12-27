<?php
require "server/config_main.php";
if(isset($_POST['add_announcement'])){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();					
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $course_id = base64_url_decode($_GET['c']);
        $announcement = array(
            "announcement_name" => $_POST['subject'],
            "announcement_description" => $_POST['description_announcement'],
            "course_id" => $course_id,
            "announcement_date" => date('Y-m-d'),
            "announcement_time" => date('H:m'),
            "announcement_from" => $_POST['from_date'],
            "announcement_to" => $_POST['to_date']
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_announcement",
                implode(", ", array_keys($announcement)),
                ":" . implode(", :", array_keys($announcement))
        );
        
        $statement_add_announcement = $connection->prepare($sql);
        $statement_add_announcement->execute($announcement);
    } catch(PDOException $error) {
        //echo $sql . "<br>" . $error->getMessage();
    }
}
?>