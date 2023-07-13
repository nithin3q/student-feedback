<?php 
include_once "connect.php";
$user=$_POST['user'];
$pass=$_POST['pass'];


$cou=mysqli_num_rows(mysqli_query($conn,"select id from main_ad where username='".$user."' and password='".$pass."'"));
echo $cou;
if($cou==1){
 echo "<script>location.href='ex.php';</script>";
 }
?>