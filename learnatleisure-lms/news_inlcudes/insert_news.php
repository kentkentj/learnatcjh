<?php
require "server/config_main.php";
if(isset($_POST['add_news'])){
    //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();					
    try{
        $connection = new PDO($dsn, $username, $password, $options);
        //author_id	department_id	news_headline	news_description	news_date	new_save_status	
        $news = array(
            "author_id" => $employee_id,
            "department_id" => $department_id,
            "news_headline" => $_POST['headline'],
            "news_description" => $_POST['new_content'],
            "news_date" => $_POST['publish_date'],
            "new_save_status" => $_POST['publish_status']
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_news",
                implode(", ", array_keys($news)),
                ":" . implode(", :", array_keys($news))
        );
        
        $statement_add_news = $connection->prepare($sql);
        $statement_add_news->execute($news);
    } catch(PDOException $error) {
        //echo $sql . "<br>" . $error->getMessage();
    }
}
?>