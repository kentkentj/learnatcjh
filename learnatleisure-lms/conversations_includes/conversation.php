<?php 
try{
	require "../server/config_main.php";
    require "../server/common.php";
    require '../server/encrypt_decrypt_get.php';

    session_start();
	$connection=new PDO($dsn, $username, $password, $options);


    if(isset($_SESSION['messages'])){
        $receiver_id = base64_url_decode($_SESSION['messages']); 

        $sql="SELECT * FROM tbl_messages JOIN tbl_employee ON tbl_messages.sender_id = tbl_employee.employee_id WHERE tbl_messages.convo_id = :receiver_id";

        $statement_convo_data = $connection->prepare($sql);
        $statement_convo_data->bindValue(':receiver_id', $receiver_id );
        $statement_convo_data->execute();
        $result_convo_data = $statement_convo_data->fetchAll();
    }else{
        echo "Select a chat or start a new conversation";
    }

} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
    header('Location: ../errors/404');
}
?>
<?php if(isset($_SESSION['messages'])):?>
<?php foreach($result_convo_data as $row): ?>
    <li class="<?= ($row['sender_id'] == $_SESSION['user_id']) ? 'chat-right':'chat-left'; ?>">
        <div class="chat-hour"><?php echo escape($row['message_time']);?> <span class="fa fa-check-circle"></span></div>
        <div class="chat-text">
            <?php echo escape($row['message_description']);?>
        </div>
        <div class="chat-avatar">
            <img src="assets/images/avatar_male.png" alt="Retail Admin">
            <div class="chat-name"><?php echo escape($row['employee_first_name']) ;?></div>
        </div>
    </li>
<?php endforeach?>
<?php endif?>