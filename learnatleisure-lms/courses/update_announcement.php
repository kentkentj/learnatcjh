<?php
if (isset($_POST['edit_announcement']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $course = ["announcement_id" => base64_url_decode($_GET['aid']), 
        "announcement_name" => $_POST['subject'], 
        "announcement_description" => $_POST['description_announcement'], 
        "course_id" => base64_url_decode($_GET['c']), 
        "announcement_from" => $_POST['from_date'],
        "announcement_to" => $_POST['to_date']];

        $sql = "UPDATE tbl_announcement 
        SET announcement_id = :announcement_id,
        announcement_name = :announcement_name,
        announcement_description = :announcement_description,
        course_id = :course_id,
        announcement_from = :announcement_from,
        announcement_to = :announcement_to
        WHERE announcement_id = :announcement_id";
        $statement_update_announcement = $connection->prepare($sql);
        $statement_update_announcement->execute($course);

        if($statement_update_announcement){
            header('location: course?c='. $_GET['c'] . '&&link=announcement');
            exit;
        }
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>