<?php
if (isset($_POST['delete']))
{
  //delete user
    try
    {
        $connection = new PDO($dsn, $username, $password, $options);
        $user = ["employee_id" =>  base64_url_decode($_GET['u'])];

        $sql = "DELETE FROM tbl_employee WHERE employee_id  = :employee_id";
        $statement_delete_account = $connection->prepare($sql);
        $statement_delete_account->execute($user);
    }
    catch(PDOException $error)
    {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>