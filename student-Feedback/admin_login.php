<?php
session_start();
include_once "connect.php";
if(isset($_SESSION['us'])) {
	header("location: adm_login.php");
}
?>
<html>
<head>
<title>login</title>
<style>
body
{
backckground-color:#f2f2f2;
}

#sub
{
	position: relative;
	top: 80px;
	left: 22px;
	height: 50px;
	width: 80px;
	border: 0px;
border-radius: 20px;
background-color: #1ad057;
color: #fff;
}
#cir
{
border-radius: 20px;
border: 1px solid #1ad057;
}
div.log
{
	background-color: rgba(0,0,0,0.7);
position: relative;
border: 0px;
border-radius: 15px;
height: 400px;
width: 500px;
top: 100px;
}
p
{
color: #fff;
}
input
{
	color: #1ad057;
}
#dep
{
	
	backckground-color: #1ad057;
	color: #000;
}
.t
{
	color: #000;
	height: 30px;
	width: 80px;
}
.ad1
{
	position: relative;
	top: 20px;
}

div.backBtn {
  width: 100px;
  left: 100px;
  top: 100px;
  background-color: #f4f4f4;
  transition: all 0.4s ease;
  position: fixed;
  cursor: pointer;
}

span.line {
  bottom: auto;
  right: auto;
  top: auto;
  left: auto;
  background-color: #333;
  border-radius: 10px;
  width: 100%;
  left: 0px;
  height: 2px;
  display: block;
  position: absolute;
  transition: width 0.2s ease 0.1s, left 0.2s ease, transform 0.2s ease 0.3s, background-color 0.2s ease;
}

span.tLine {
  top: 0px;
}

span.mLine {
  top: 13px;
  opacity: 0;
}

span.bLine {
  top: 26px;
}

.label {
  position: absolute;
  left: 0px;
  top: 5px;
  width: 100%;
  text-align: center;
  transition: all 0.4s ease;
  font-size: 1em;
}

div.backBtn:hover span.label {
  left: 25px
}

div.backBtn:hover span.line {
  left: -10px;
  height: 5px;
  background-color: #F76060;
}

div.backBtn:hover span.tLine {
  width: 25px;
  transform: rotate(-45deg);
  left: -15px;
  top: 6px;
}

div.backBtn:hover span.mLine {
  opacity: 1;
  width: 30px;
}

div.backBtn:hover span.bLine {
  width: 25px;
  transform: rotate(45deg);
  left: -15px;
  top: 20px;
}

#back
{
    position: relative;
    left: 140px;
}
</style>

</head>
<body bgcolor="#f2f2f2">
     <div class="backBtn" style="  position: relative;top: 30px;left: 160px;">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="ad_main.php">Back to Admin</a></span>
      <span class="line bLine"></span>
	</div>
	<p><a href="ad_logout.php"><img src="home_logo.png" alt="home" height="100" width="100" style="position: static;" /></a></p>
<center>
<form name="frmUser" method="post" action="ad_log.php">
<div id="log" align="middle" class="log" >
<img src="fd3.png" alt="not supported" style="height: 80px; width: 120px;" />

<p >Department<br />
<select id="dep" name="dep" style="width: 313px; height: 50px;" >
	 <?php
	 


if (!$conn) {
    die("Connection failed: " .mysql_error());
}
           $dd_res=mysqli_query($conn,"Select  dept from department ");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }
      ?>
</select></p>
<p class="ad1">SEMESTER:<select class="t" name="term">
<option value="I-I">I-I</option>
<option value="I-II">I-II</option>
<option value="II-I">II-I</option>
<option value="II-II">II-II</option>
<option value="III-I">III-I</option>
<option value="III-II">III-II</option>
<option value="IV-I">IV-I</option>
<option value="IV-II">IV-II</option>
</select></p>

<input type="submit" name="log" value="submit"  id="sub" /><br />

</div>
</form>
</center>
</body>
</html>