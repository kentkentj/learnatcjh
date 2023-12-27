<?php
if(isset($_POST['update_profile_pwd'])){
    if (password_verify($_POST['old_password'], $employee_password)){
        //password is true
        try
        {
            require "server/config_main.php";
            $connection = new PDO($dsn, $username, $password, $options);
            $profile = ["employee_id" => $employee_id, 
            "employee_password" => password_hash($_POST['password'],PASSWORD_DEFAULT)];

            $sql = "UPDATE tbl_employee 
            SET employee_id = :employee_id,
            employee_password = :employee_password
            WHERE employee_id = :employee_id";
            $statement_update_profile_password = $connection->prepare($sql);
            $statement_update_profile_password->execute($profile);
        }
        catch(PDOException $error)
        {
            echo $sql . "<br>" . $error->getMessage();
        // job_title
        }
    }else{
        header("Location: profile?err=Old Password is incorrect");
        exit;
    }
}
?>