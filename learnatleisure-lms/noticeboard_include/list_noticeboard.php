<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_noticeboard ORDER BY noticeboard_id DESC LIMIT 30";

	$statement_list_notice_board = $connection->prepare($sql);
    //$statement_list_notice_board->bindValue(':course_id', $course_id);
  	$statement_list_notice_board->execute();
	$result_list_notice_board = $statement_list_notice_board->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: errors/404');
}
?>