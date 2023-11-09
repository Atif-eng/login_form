<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body style="background-color:powderblue;">
<?php 
if ( isset($_POST['user_name']) &&
    isset($_POST['user_pass']) ) {

        if( $_POST['user_name'] == 'atif' && $_POST['user_pass'] == 'atif' ) {

            // Start a session or resume the current session
            session_start();
            $_SESSION['user_name'] = "atif";
            // Check if the user_name session exists
            header('Location: logout.php');

        } else {
            echo 'username or password incorrect';
        }
}
?>
<!-- Login Form -->
<form action="#" method="post">
    <h1>Sign up</h1>
    <div class="container">
        <b>User Name:</b><input type="text" name="user_name"/><br>
        <b>User Pass:</b><input type="text" name="user_pass"/><br>
        <button type="submit"></a>Login</button>
    </div>
</form>

</body>
</html>