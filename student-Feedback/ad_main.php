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
#ins
{
    position: relative;
    top: 200px;
    left: 300px;
}
#back
{
    position: relative;
    top: 200px;
    left: 700px;
}
#rep
{
    position: relative;
    top: 300px;
    left: 500px;
}
#tot_rep
{
    position: relative;
    top: 400px;
    right: 460px;
}
#trun
{
    position: relative;
    top: 400px;
    left: 510px;
}
.button-8{
  width:140px;
  height:50px;
  border:2px solid #34495e;
  float:left;
  text-align:center;
  cursor:pointer;
  position:relative;
  box-sizing:border-box;
  overflow:hidden;
  margin:0 0 10px 10px;
}
.button-8 a{
  font-family:arial;
  font-size:16px;
  color:#fff;
  text-decoration:none;
  line-height:50px;
  transition:all .5s ease;
  z-index:2;
  position:relative;
}
.eff-8{
  width:140px;
  height:50px;
  border:70px solid #34495e;
  position:absolute;
  transition:all .5s ease;
  z-index:1;
  box-sizing:border-box;
}
.button-8:hover .eff-8{
  border:0px solid #34495e;
}
.button-8:hover a{
  color:#34495e;
}
</style>
</head>
<body bgcolor="lightgrey">

    <p><a href="ad_logout.php"><img src="home_logo.png" alt="home" height="100" width="100" style="position: static;" /></a></p>
<br />&nbsp;<center><b><font size="+2.2"><b><font size="+3" color="magenta">Srinivasa Institute of Engineering & Technology </font>  <br />                                         
<font size="+2" color="maroon">Approved by AICTE, Permanently Affiliated to JNTUK, Accredited by NAAC with 'A' grade<br />
  
<center>



   <div class="button-8" id="ins">
    <div class="eff-8"></div>
    <a href="im.php"> Import </a>
  </div>
</div>
  <div class="button-8" id="rep">
    <div class="eff-8"></div>
    <a href="admin_login.php"> Report </a>
  </div>
</div>

<div class="button-8" id="ins">
    <div class="eff-8"></div>
    <a href="admin_login1.php"> SEMWISE </a>
  </div>
    


  <div class="button-8" id="back">
    <div class="eff-8"></div>
    <a href="for_login1.php"> Backup </a>
  </div>
</div>
  <div class="button-8" id="trun">
    <div class="eff-8"></div>
    <a href="for_login2.php"> Data Clear </a>
  </div>
</div>  <div class="button-8" id="tot_rep">
    <div class="eff-8"></div>
    <a href="summ.php"> Total Report </a>
  </div>
</div>
</center>
<a href="ad_logout.php" accesskey="a"></a>
</body>
</html>