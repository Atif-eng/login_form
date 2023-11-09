<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body style="background-color:powderblue;">


<!-- Login Form -->
<!-- <form action="#" method="post">
    <h1>Sign up</h1>
    <div class="container">
        <b>User Name:</b><input type="text" name="user_name"/><br>
        <b>User Pass:</b><input type="text" name="user_pass"/><br>
        <button type="submit">Login</button>
    </div>
</form> -->

<!-- View Users Link -->
<!-- <h3><a href="index.php?view">View Users</a></h3> -->

<?php
require_once('login.php');
$con = mysqli_connect("localhost", "root", "", "mylogin");
// Check connection
if (mysqli_connect_errno()) {
    echo "MYSQLI Connection Failed: " . mysqli_connect_error();
}

/*if (isset($_GET['view'])) {
    echo "<table width='800' border='1' bgcolor='pink'>
        <tr align='center'>
        <th>User id:</th>
        <th>User Name:</th>
        <th>User Pass</th>
        </tr>
    </table>";
*/
    $con = mysqli_connect("localhost", "root", "", "mylogin");
    $sel_users = "SELECT * FROM new_data";
    $run_users = mysqli_query($con, $sel_users);

    if (mysqli_connect_errno()) {
        echo "MYSQLI Connection Failed: " . mysqli_connect_error();
    }

    /*while ($row = mysqli_fetch_array($run_users)) {
        $u_id = $row[0];
        $u_name = $row[1];
        $u_password = $row[2];

        echo "<table width='800' border='1' bgcolor='pink'>
            <tr align='center'>
            <td>$u_id</td>
            <td>$u_name</td>
            <td>$u_password</td>
            </tr>
        </table>";

        if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {
            $input_user_name = $_POST['user_name'];
            $input_user_pass = $_POST['user_pass'];

            if ($input_user_name == $u_name && $input_user_pass == $u_password) {
                echo "Login successful";
            } else {
                echo "Login failed. Please check your username and password.";
            }
        }
    }*/

?>
</body>
</html>


















