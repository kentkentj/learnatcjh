<?php
require "server/config_main.php";
if(isset($_POST['add_question'])){
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $question = array(
            "module_content_id" => base64_url_decode($_GET['q']),
            "course_id" => base64_url_decode($_GET['c']),
            "question_description" => $_POST['question'],
            "question_option_1" => $_POST['option_1'],
            "question_option_2" => $_POST['option_2'],
            "question_option_3" => $_POST['option_3'],
            "question_option_4" => $_POST['option_4'],
            "question_correct_answer" => $_POST['correct_answer'],
            "question_points" => $_POST['point'],
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_quiz",
                implode(", ", array_keys($question)),
                ":" . implode(", :", array_keys($question))
        );
        
        $statement_add_question = $connection->prepare($sql);
        $statement_add_question->execute($question);

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>