<?php
function get_module_contents($module_id){
    try{
        require "server/config_main.php";
        $connection=new PDO($dsn, $username, $password, $options);
 
        $sql="SELECT * FROM tbl_module_content WHERE module_id = :module_id";
    
        $statement_list_modules_contents = $connection->prepare($sql);
        $statement_list_modules_contents->bindValue(':module_id', $module_id);
        $statement_list_modules_contents->execute();
        $result_list_modules_contents = $statement_list_modules_contents->fetchAll();
    
    } catch(PDOException $error){
        //echo $sql . "<br>" . $error->getMessage();
        header('Location: errors/404');
    }
    
    foreach ($result_list_modules_contents as $row){
        echo "<a href='module?c=". $_GET['c'] . "&&m=" . base64_url_encode(escape($row['module_content_id'])) . "' class='list-group-item'>" . escape($row['module_content_name']) . "</a>";
    }
}
?>