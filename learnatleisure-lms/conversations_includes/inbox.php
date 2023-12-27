<?php 
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

	$sql="SELECT * FROM tbl_messages JOIN tbl_employee ON tbl_messages.receiver_id = tbl_employee.employee_id WHERE tbl_messages.receiver_id = :sender_id OR tbl_messages.sender_id = :sender_id GROUP BY tbl_messages.convo_id ORDER BY tbl_messages.message_id DESC";

	$statement_inbox = $connection->prepare($sql);
    $statement_inbox->bindValue(':sender_id', $employee_id);
  	$statement_inbox->execute();
	$result_inbox = $statement_inbox->fetchAll();

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: ../errors/404');
}
?>