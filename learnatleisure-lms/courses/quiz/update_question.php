<?php
if (isset($_POST['update_question']))
{
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $question = ["question_id" => base64_url_decode($_GET['qid']), 
        "module_content_id" => base64_url_decode($_GET['q']), 
        "module_id" => 0,
        "course_id" => base64_url_decode($_GET['c']), 
        "question_description" => $_POST['question'],
        "question_option_1" => $_POST['option_1'],
        "question_option_2" => $_POST['option_2'],
        "question_option_3" => $_POST['option_3'],
        "question_option_4" => $_POST['option_4'],
        "question_correct_answer" => $_POST['correct_answer'],
        "question_points" => $_POST['point']];

        $sql = "UPDATE tbl_quiz 
        SET question_id = :question_id,
        module_content_id = :module_content_id,
        module_id = :module_id,
        course_id = :course_id,
        question_description = :question_description,
        question_option_1 = :question_option_1,
        question_option_2 = :question_option_2,
        question_option_3 = :question_option_3,
        question_option_4 = :question_option_4,
        question_correct_answer = :question_correct_answer,
        question_points = :question_points
        WHERE question_id = :question_id";
        $statement_update_question = $connection->prepare($sql);
        $statement_update_question->execute($question);
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
 