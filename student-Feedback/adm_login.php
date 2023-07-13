<?php
session_start();
include_once "connect.php";
if(isset($_SESSION['us'])) {
	header("location: adm_login.php");
}
?>
<html>
<head>
<style>
body
{
	background-color:#f2f2f2;
}
div.log
{
	background-color: #4d4d4d;
position: relative;
border: 0px;
border-radius: 15px;
height: 300px;
width: 600px;
top: 100px;
}
h2.alig
{
	position: relative;
	left: 5px;
	top:  100px;
}
input[type="text"]
{
	border: 0px;
	background-color: #fff;
}
input[type="text"]:hover
{
	border-bottom: 1px solid #000;
	background-color: #fff;
}
input[type="submit"]
{
	border: 0px;
	background-color: #fff;
}
input[type="submit"]:hover
{
	border: 1px solid #000;
}
h3
{
	color: #fff;
}
h2
{
	color: #fff;
}
.dow
{
    position: relative;
    top: 100px;
}

</style>
</head>
<body>
    
<p><a href="index.php"><img src="home_logo.png" alt="home" height="100" width="100" style="position: static;" /></a></p>
<center><h2 class="alig"><font color="brown">ADMIN LOGIN FORM</font></h2>
<div id="log" class="log" align="middle">
<form action="ad.php" method="post">
<h3 class="dow">
Username:<input type="text" name="us" />
</h3>
<h3 class="dow">
Password:<input type="password" name="pwd" />
</h3>
<center><input type="submit" value="submit" class="dow" /></center>
</form>
</div></center>
</body>
</html>