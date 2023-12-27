<?php
if (isset($_POST['update_module']))
{
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $course = ["module_content_id" => base64_url_decode($_GET['content']), 
        "module_content_name" => $_POST['module'], 
        "module_content_description" => $_POST['description'], 
        "mondule_content_status" => $_POST['save_as'],
        "module_content_type" => $_POST['module_content_type']];

        $sql = "UPDATE tbl_module_content 
        SET module_content_id = :module_content_id,
        module_content_name = :module_content_name,
        module_content_description = :module_content_description,
        module_content_status = :mondule_content_status,
        module_content_type = :module_content_type
        WHERE module_content_id = :module_content_id";
        $statement_update_module_content = $connection->prepare($sql);
        $statement_update_module_content->execute($course);
//module_content_type
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>