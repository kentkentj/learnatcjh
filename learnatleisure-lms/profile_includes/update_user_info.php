<?php
if (isset($_POST['update_profile']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        require "server/config_main.php";
        $connection = new PDO($dsn, $username, $password, $options);
        $profile = ["employee_id" => $employee_id, 
        "employee_username" => $_POST['username'], 
        "employee_mobile_number" => $_POST['mobile_num'], 
        "employee_job_title" => $_POST['job_title'], 
        "employee_email" => $_POST['email']];

        $sql = "UPDATE tbl_employee 
        SET employee_username = :employee_username,
        employee_mobile_number = :employee_mobile_number,
        employee_job_title = :employee_job_title,
        employee_email = :employee_email 
        WHERE employee_id = :employee_id";
        $statement_update_profile_info = $connection->prepare($sql);
        $statement_update_profile_info->execute($profile);
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
       // job_title
    }
}
?>