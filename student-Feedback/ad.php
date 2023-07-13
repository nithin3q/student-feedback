<?php 
include_once "connect.php";
$user=$_POST["us"];
$pwd=$_POST["pwd"];
$res=mysqli_num_rows(mysqli_query($conn,"select id from users where us='$user' and pwd='$pwd'"));
if($res==1)
{
	 $_SESSION['us']=$user;
$_SESSION['pwd']=$pwd;
header ("location: ad_main.php");
}
else
{
	header ("location: adm_login.php");
}
?>