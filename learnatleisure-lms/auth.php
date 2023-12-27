<?php
include 'server/signin_config.php';


if(isset($_POST['signin'])){
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT employee_id, employee_password FROM tbl_employee WHERE employee_username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $employee_password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $employee_password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['user'] = $_POST['username'];
            $_SESSION['user_id'] = $id;
            //$_SESSION['user_user_active'] = time();
            header('Location: /learnatleisure-lms');
        } else {
            // Incorrect password
            header('Location: signin?err=The password you entered is incorrect. Lost your password?');
        }
    } else {
        // Incorrect username
        header('Location: signin?err=The username you entered is incorrect. Lost your username?');
    }

    $stmt->close();
}
}
?>