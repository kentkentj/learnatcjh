<?php
require "../server/config_main.php";
if(!empty($_POST)){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
	
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $course = array( 
            "convo_id" => $_POST['convo_id'],
            "sender_id" => $_POST['sender_id'],
            "receiver_id" => $_POST['receiver_id'],
            "message_description" => $_POST['message_description'],
            "message_date" => $_POST['message_date'],
            "message_time" => $_POST['message_time']
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_messages",
                implode(", ", array_keys($course)),
                ":" . implode(", :", array_keys($course))
        );
        
        $statement_add_message = $connection->prepare($sql);
        $statement_add_message->execute($course);
    } catch(PDOException $error) {
        //echo $sql . "<br>" . $error->getMessage();
    }
}
?>