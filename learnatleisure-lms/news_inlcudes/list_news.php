<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_news JOIN tbl_employee ON tbl_news.author_id = tbl_employee.employee_id ORDER BY tbl_news.news_id DESC";

	$statement_list_news = $connection->prepare($sql);
    //$statement_list_module_file->bindValue(':course_id', $course_id);
  	$statement_list_news->execute();
	$result_list_news = $statement_list_news->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>