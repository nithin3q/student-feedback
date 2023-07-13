<?php
session_start();
include_once "connect.php";
$sq="insert into login_users  values ('".$_SESSION['rollno']."')";
mysqli_query($conn,$sq);
echo "<script>location.href='LOGOUT2.php';</script>";
?>