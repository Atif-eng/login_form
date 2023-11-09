<?php 
if( isset( $_POST['logout']) ){

    if( isset($_SESSION['user_name'])) {
        // destroy the session
        session_destroy();
    }

    header('location: login.php');
}
?>

<form action="#" method="post">
    <h1>Logout</h1>
    <div class="container">

        <button type="submit" name="logout"></a>logout</button>
    </div>
</form>
<?php
echo "WELCOME TO WPBRIGADE";


// Start a session or resume the current session
session_start();
$_SESSION['user_name'] = "atif";
// Check if the user_name session exists
if (isset($_SESSION['user_name'])) {
    echo "Session created successfully. Welcome, " . $_SESSION['user_name'];
    //header('Location: login.php');
    // You can also provide a logout link here to end the session
} else {
    echo "Session doesn't exist.";
}

?>