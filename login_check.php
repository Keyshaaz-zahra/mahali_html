<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$q = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($q) > 0) {
    $_SESSION['login'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
?>
