<?php
if (isset($_POST['update_noticeboard']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $post = ["noticeboard_id" => base64_url_decode($_GET['en']), 
        "noticeboard_headline" => $_POST['headline'], 
        "noticeboard_caption" => $_POST['caption'],
        "noticeboard_from_date" => $_POST['from_date'], 
        "noticeboard_to_date" => $_POST['to_date'],
        "noticeboard_from_time" => $_POST['start_time'],
        "noticeboard_to_time" => $_POST['end_time']];

        $sql = "UPDATE tbl_noticeboard 
        SET noticeboard_id  = :noticeboard_id,
        noticeboard_headline = :noticeboard_headline,
        noticeboard_caption	= :noticeboard_caption,
        noticeboard_from_date = :noticeboard_from_date,
        noticeboard_to_date = :noticeboard_to_date,
        noticeboard_from_time = :noticeboard_from_time,
        noticeboard_to_time = :noticeboard_to_time
        WHERE noticeboard_id  = :noticeboard_id";
        $statement_update_noticeboard = $connection->prepare($sql);
        $statement_update_noticeboard->execute($post);
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>