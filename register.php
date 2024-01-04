<?php 
session_start();
include("connect.php");

$newname = $_POST['newname'];
$newemail = $_POST['newemail'];
$newpassword = $_POST['newpassword'];

$sql = "INSERT INTO `users` (`username`, `email`, `password`)
VALUES ('$newname', '$newemail', '$newpassword')";

$result = mysqli_query($connect, $sql);

if ($result === TRUE) {
    header("Location: index.php");
}
?>