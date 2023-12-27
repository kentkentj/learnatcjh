<?php
if (isset($_GET['qid']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
    
        $sql="DELETE FROM tbl_quiz WHERE question_id = :question_id";
        $statement_delete_question = $connection->prepare($sql);
        $statement_delete_question->bindValue(':question_id', base64_url_decode($_GET['qid']));
        $statement_delete_question->execute();
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>