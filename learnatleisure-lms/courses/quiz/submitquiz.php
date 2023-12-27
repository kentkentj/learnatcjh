<?php
require "server/config_main.php";
if(isset($_POST['submit_quiz'])){
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try{
        $connection = new PDO($dsn, $username, $password, $options);
        $answer = $_POST['answer'];
        $enc = $_POST['enc'];
        
        for ($i=0;$i<count($answer); $i++) { 
            $user_answer = array(
                "module_content_id" => base64_url_decode($_GET['q']),
                "question_id" => base64_url_decode($enc[$i]),
                "course_id" => base64_url_decode($_GET['c']),
                "user_id" => $employee_id,
                "answer" => $answer[$i]
            );
            $sql = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "tbl_answer",
                    implode(", ", array_keys($user_answer)),
                    ":" . implode(", :", array_keys($user_answer))
            );
            
            $statement_user_answer = $connection->prepare($sql);
            $statement_user_answer->execute($user_answer);   
        }
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>