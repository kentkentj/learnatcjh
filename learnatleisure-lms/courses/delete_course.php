<?php
if (isset($_GET['ml']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
    
        $sql="DELETE FROM tbl_course WHERE course_id = :course_id";
        $statement_delete_course = $connection->prepare($sql);
        $statement_delete_course->bindValue(':course_id', base64_url_decode($_GET['ml']));
        $statement_delete_course->execute();
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>