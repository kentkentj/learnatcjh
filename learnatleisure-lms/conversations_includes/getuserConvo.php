<?php
if(isset($_GET['messages'])){
    try{
        require "server/config_main.php";
        $connection=new PDO($dsn, $username, $password, $options);
    
        $receiver_id = base64_url_decode($_GET['r']);
        $sql="SELECT * FROM tbl_messages JOIN tbl_employee ON tbl_employee.employee_id = tbl_messages.receiver_id  WHERE tbl_messages.receiver_id = :receiver_id LIMIT 1";
    
        $statement_convo = $connection->prepare($sql);
        $statement_convo->bindValue(':receiver_id', $receiver_id);
        $statement_convo->execute();
        $result_convo = $statement_convo->fetchAll();
    
    } catch(PDOException $error){
        echo $sql . "<br>" . $error->getMessage();
        //header('Location: /errors/404');
    }
}
?>