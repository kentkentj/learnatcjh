 <?php
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_noticeboard WHERE noticeboard_id = :noticeboard_id LIMIT 1";

	$statement_get_noticeboard = $connection->prepare($sql);
    $statement_get_noticeboard->bindValue(':noticeboard_id', base64_url_decode($_GET['en']));
  	$statement_get_noticeboard->execute();
	$result_get_noticeboard = $statement_get_noticeboard->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
    //header('Location: ../errors/404');
}
 ?>