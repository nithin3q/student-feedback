<?php
session_start();
include_once "connect.php";

if(mysqli_query($conn,"insert into login_user values('".$_SESSION['rollno']."')"))
{
    echo "inserted";
}
echo "<script>location.href='logout.php';</script>";
?>