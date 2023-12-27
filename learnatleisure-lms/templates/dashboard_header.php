<?php $server_link = "http://localhost:8888/learnatleisure-lms/"?>
<?php

    include 'server/signin_config.php';
    // We need to use sessions, so you should always start sessions using the below code.
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
   	    header('Location: signin');
   	    exit;   
    } 
?>
<?php
    // We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
    $stmt = $con->prepare('SELECT tbl_employee.employee_id, 
    tbl_employee.employee_username,
    tbl_employee.employee_mobile_number,
    tbl_employee.employee_email,
    tbl_employee.employee_password,
    tbl_employee.employee_first_name,
    tbl_employee.employee_last_name,
    tbl_employee.employee_middle_name,
    tbl_employee.employee_suffix, 
    tbl_employee.account_type,
    tbl_employee.department_id,
    tbl_employee.employee_job_title,
    tbl_employee.employee_baguio_address, 
    tbl_employee.employee_present_address,
    tbl_department.department_name,
    tbl_employee.property,
    tbl_employee.employee_date_started,
    tbl_employee.employment_status,
    tbl_employee.birth_date,
    tbl_employee.civil_status FROM tbl_employee JOIN tbl_department ON tbl_employee.department_id = tbl_department.department_id WHERE tbl_employee.employee_id = ?');
    // In this case we can use the account ID to get the account info.
    $stmt->bind_param('i', $_SESSION['user_id']);
    $stmt->execute();
    $stmt->bind_result($employee_id,$employee_username,$employee_mobile_number,$employee_email,$employee_password,$employee_first_name,$employee_last_name,$employee_middle_name,$employee_suffix,$account_type,$department_id,$employee_job_title,$employee_baguio_address,$employee_present_address,$department_name,$property,$employee_date_started,$employment_status,$birth_date,$civil_status);
    $stmt->fetch();
    $stmt->close();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Forest Lodge - eLearning Sytsem</title>
    <link href="<?php echo $server_link;?>css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $server_link;?>css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <?php if($property == 'manor' || $property == 'cap'):?>
        <style>
            .l-navbar{
                background-color: #440D13;
            }
            .btn-success{
                background-color: #440D13;
                border-color:#440D13;
            }
            .btn-outline-success{
                --bs-btn-color: #440D13 !important;
                --bs-btn-border-color: #440D13 !important;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #440D13;
                --bs-btn-hover-border-color: #440D13 !important;
                --bs-btn-focus-shadow-rgb: 25,135,84;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #440D13 !important;
                --bs-btn-active-border-color: #440D13 !important;
                --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                --bs-btn-disabled-color: #440D13 !important;
                --bs-btn-disabled-bg: transparent;
                --bs-btn-disabled-border-color: #440D13 !important;
                --bs-gradient: none;
            }
            .btn:hover{
                color:#CB8D2A;
                background-color:#440D13;
                border-color:#440D13;
            }
            .btn-success:hover{
                background-color: #CB8D2A;
                border-color:#440D13;
                color:#440D13 !important;
            }
            .fc-event{background-color: #440D13 !important;}
            .text-success{
                color:#440D13 !important;
            }
            .nav_link{
                color: #CB8D2A;
            }

            .active>.page-link, .page-link.active{
                background-color:#440D13;
                border-color:#440D13;
            }
            #header-toggle{
                color:#440D13 !important;
            }
            a{
                color: #440D13;
            }
        </style>
    <?php endif?>


    <?php if($property == 'tfl'):?>
        <style>
            .l-navbar{
                background-color: #333333;
            }
            .btn-success{
                background-color: #333333;
                border-color:#333333;
            }
            .btn-outline-success{
                --bs-btn-color: #333333 !important;
                --bs-btn-border-color: #333333 !important;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #333333;
                --bs-btn-hover-border-color: #333333 !important;
                --bs-btn-focus-shadow-rgb: 25,135,84;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #333333 !important;
                --bs-btn-active-border-color: #333333 !important;
                --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                --bs-btn-disabled-color: #333333 !important;
                --bs-btn-disabled-bg: transparent;
                --bs-btn-disabled-border-color: #333333 !important;
                --bs-gradient: none;
            }
            .btn:hover{
                color:#8C8C8C;
                background-color:#333333;
                border-color:#333333;
            }
            .btn-success:hover{
                background-color: #8C8C8C;
                border-color:#333333;
                color:#333333 !important;
            }
            .fc-event{background-color: #333333 !important;}
            .text-success{
                color:#333333 !important;
            }
            .nav_link{
                color: #8C8C8C;
            }

            .active>.page-link, .page-link.active{
                background-color:#333333;
                border-color:#333333;
            }
            #header-toggle{
                color:#333333 !important;
            }
            a{
                color: #8C8C8C !important;
            }
        </style>
    <?php endif?>
</head>
<body id="body-pd">