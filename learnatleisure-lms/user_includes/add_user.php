<?php
require "server/config_main.php";
if(isset($_POST['add_user'])){
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try{
        $connection = new PDO($dsn, $username, $password, $options);

        $new_user = array(
            "employee_id" => $_POST['employee_id'],
            "employee_username" => $_POST['username'],
            "employee_mobile_number" => $_POST['phone_number'],
            "employee_email" => $_POST['email_id'],
            "employee_password" => password_hash($_POST['user_password'],PASSWORD_DEFAULT),
            "employee_first_name" => $_POST['first_name'],
            "employee_last_name" => $_POST['last_name'],
            "employee_suffix" => $_POST['suffix'],
            "employee_job_title" => $_POST['job_title'],
            "department_id" => $_POST['department'],
            "employee_baguio_address" => $_POST['baguio_address'],
            "employee_present_address" => $_POST['present_address'],
            "account_type" => $_POST['account_type'],
            "account_status" => 'active',
            "property" => $_POST['account_property'],
            "employee_date_started" => $_POST['date_started'],
            "employment_status" => $_POST['employment_status'],
            "birth_date" => $_POST['birth_date'],
            "civil_status" => $_POST['civil_status']
        );
        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "tbl_employee",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
        );
        
        $statement_add_user = $connection->prepare($sql);
        $statement_add_user->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>