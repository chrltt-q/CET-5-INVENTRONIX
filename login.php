<?php 
session_start();
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE
password='$password' AND
username='$username' ";

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $username = $row["username"];
    $password = $row["password"];
    $email = $row["email"];
    
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;

    header('Location: home.php');
}

else {
    header('Location: index.php');}

mysqli_close($connect);
?>