<?php
require "server/config_main.php";
if(isset($_POST['new_noticeboard'])){
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();					
    try{
        $connection = new PDO($dsn, $username, $password, $options);
        $noticeboard = array(
            "user_id" => $employee_id,
            "noticeboard_headline" => $_POST['headline'],
            "noticeboard_caption" => $_POST['caption'],
            "noticeboard_from_date" => $_POST['from_date'],
            "noticeboard_to_date" => $_POST['to_date'],
            "noticeboard_from_time" => $_POST['start_time'],
            "noticeboard_to_time" => $_POST['end_time']
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_noticeboard",
                implode(", ", array_keys($noticeboard)),
                ":" . implode(", :", array_keys($noticeboard))
        );
        
        $statement_add_noticeboard = $connection->prepare($sql);
        $statement_add_noticeboard->execute($noticeboard);

        if($statement_add_noticeboard){
            header('Location: noticeboard');
            exit;
        }
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>