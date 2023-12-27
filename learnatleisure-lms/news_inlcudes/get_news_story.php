<?php
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_news JOIN tbl_employee ON tbl_news.author_id = tbl_employee.employee_id WHERE tbl_news.news_id = :news_id LIMIT 1";


	$statement_get_news = $connection->prepare($sql);
	$statement_get_news->bindValue(':news_id', base64_url_decode($_GET['sid']));
  	$statement_get_news->execute();
	$result_get_news = $statement_get_news->fetchAll();
} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: errors/404');
}
?>