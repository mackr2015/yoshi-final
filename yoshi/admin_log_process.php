<?php
// Start the session
session_start();

if (isset($_POST['submit']) AND ! empty($_POST['username'])) {

    $host = "localhost";
    $username = "mackraic_maki_yo";
    $password = "testeri";
    $database = "mackraic_yoshi_db";
    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        echo "Connection Failed";
    } else {

        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $query = "SELECT * FROM admin_login 
                          WHERE password='$password'
                         AND username='$username'";

        $queryResult = mysqli_query($connection, $query);

        $rows = mysqli_num_rows($queryResult);

        if ($rows == 1) {
            $_SESSION['uname'] = $username;
            header("location: admin.php");
        } else {
            echo "<p>Username or Password is invalid</p>";
        }
    }

    // checking if username is entered into session
}
if (isset($_SESSION['uname'])) {
    header("location: admin.php");
}
?>