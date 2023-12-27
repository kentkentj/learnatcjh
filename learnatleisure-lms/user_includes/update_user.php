<?php 
include 'server/encrypt_decrypt_get.php';
try{
	require "server/config_main.php";
	$connection=new PDO($dsn, $username, $password, $options);

    $id = base64_url_decode($_GET['u']);
	$sql="SELECT 
        tbl_employee.employee_id AS 'employee_id',
        tbl_employee.employee_username AS 'employee_username',
        tbl_employee.employee_mobile_number AS 'employee_mobile_number',
        tbl_employee.employee_email AS 'employee_email',
        tbl_employee.employee_password AS 'employee_password',
        tbl_employee.employee_first_name AS 'employee_first_name',
        tbl_employee.employee_last_name AS 'employee_last_name',
        tbl_employee.employee_middle_name AS 'employee_middle_name',
        tbl_employee.employee_suffix AS 'employee_suffix',
        tbl_employee.employee_job_title AS 'employee_job_title',
        tbl_department.department_name AS 'department_name_account',
        tbl_employee.employee_baguio_address AS 'employee_baguio_address',
        tbl_employee.employee_present_address AS 'employee_present_address',
        tbl_employee.account_type AS 'account_type',
        tbl_employee.account_status AS 'account_status',
        tbl_employee.property AS 'property',
        tbl_employee.employee_date_started AS 'employee_date_started',
        tbl_employee.employment_status AS 'employment_status',
        tbl_employee.birth_date AS 'birth_date',
        tbl_employee.civil_status AS 'civil_status'
    FROM tbl_employee JOIN tbl_department ON tbl_employee.department_id = tbl_department.department_id WHERE tbl_employee.employee_id = $id";

	$statement_list_update_employee = $connection->prepare($sql);
  	$statement_list_update_employee->execute();
	$result_update_employee = $statement_list_update_employee->fetchAll();
    
} catch(PDOException $error){
	//echo $sql . "<br>" . $error->getMessage();
   header('Location: errors/404');
}


if (isset($_POST['save_profile']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $user = ["employee_id" => base64_url_decode($_GET['u']), 
        "employee_username" => $_POST['username'], 
        "employee_mobile_number" => $_POST['mobile_num'], 
        "employee_email" => $_POST['email'], 
        "employee_first_name" => $_POST['first_name'], 
        "employee_last_name" => $_POST['last_name'], 
        "employee_middle_name" => $_POST['middle_name'],
        "employee_suffix" => $_POST['suffix'],
        "employee_job_title" => $_POST['job_title'], 
        "department_id" => $_POST['department'],
        "employee_baguio_address" => $_POST['baguio_address'],
        "employee_present_address" => $_POST['present_address'], 
        "account_type" => $_POST['account_type'], 
        "account_status" => $_POST['account_status'],
        "property" => $_POST['property'],
        "employee_date_started" => $_POST['date_started'],
        "employment_status" => $_POST['employment_status'],
        "birth_date" => $_POST['birth_date'],
        "civil_status" => $_POST['civil_status']];
        
        $sql = "UPDATE tbl_employee 
        SET employee_id = :employee_id,
        employee_username = :employee_username,
        employee_mobile_number = :employee_mobile_number,
        employee_email = :employee_email,
        employee_first_name = :employee_first_name,
        employee_last_name = :employee_last_name,
        employee_middle_name = :employee_middle_name,
        employee_suffix = :employee_suffix,
        employee_job_title = :employee_job_title,
        department_id = :department_id,
        employee_baguio_address = :employee_baguio_address,
        employee_present_address = :employee_present_address,
        account_type = :account_type,
        account_status = :account_status,
        property = :property,
        employee_date_started = :employee_date_started,
        employment_status = :employment_status,
        birth_date = :birth_date,
        civil_status = :civil_status
        WHERE employee_id = :employee_id";
        $statement_update_profile = $connection->prepare($sql);
        $statement_update_profile->execute($user);
    }
    catch(PDOException $error)
    {
        //echo $sql . "<br>" . $error->getMessage();
        header('Location: account?u=' . base64_url_decode($_GET['u']) . '&&err="Update failed please try again!"');
    }
}


//password update
if (isset($_POST['reset_pass']))
{
  //if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $user = ["employee_id" => base64_url_decode($_GET['u']), 
        "employee_password" => password_hash($_POST['password'],PASSWORD_DEFAULT)];

        $sql = "UPDATE tbl_employee 
        SET employee_id = :employee_id,
        employee_password = :employee_password WHERE employee_id = :employee_id";
        $statement_update_password = $connection->prepare($sql);
        $statement_update_password->execute($user);
    }
    catch(PDOException $error)
    {
        //echo $sql . "<br>" . $error->getMessage();
        header('Location: account?u=' . base64_url_decode($_GET['u']) . '&&err="Update failed please try again!"');
    }
}
?>