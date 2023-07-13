<!DOCTYPE html>
<html>
<head>
<title>home</title>
<style>
body
{
	background-image: url("img/b.jpg");
	  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}

.stud1
{
	color: #fff;
	border: 0px;
	position: relative;
	top: 225px;
	LEFT: 470px;
	height: 50px;
	width: 230px;
	background-color: #0000bb;
	color: #fff;
}

.stud2
{
	color: #fff;
	border: 0px;
	position: relative;
	top: 275px;
	right: 470px;
	height: 50px;
	width: 230px;
	background-color: #0000bb;
	color: #fff;
}
.ad
{
	position: relative;
	left: 470px;
	bottom: 80px;
	border: 0px;
	background-color :rgba(0,0,0,0);
	color: #fff;
	height: 80px;
	width: 60px;
}
.ad1
{
	position: relative;
	right: 470px;
	bottom: 170px;
	border: 0px;
	background-color :rgba(0,0,0,0);
	color: #fff;
	height: 80px;
	width: 60px;
}

#container {
  width: 500px;
  margin: auto;
}

/*Neon*/




h2:hover {
  -webkit-animation: neon2 1.5s ease-in-out infinite alternate;
  -moz-animation: neon2 1.5s ease-in-out infinite alternate;
  animation: neon2 1.5s ease-in-out infinite alternate;
}

h2:hover {
  color: #ffffff;
}
/*glow for webkit*/



@-webkit-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF;
  }
}

/*glow for mozilla*/



@-moz-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF;
  }
}

/*glow*/



@keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #228DFF, 0 0 35px #228DFF, 0 0 40px #228DFF, 0 0 50px #228DFF, 0 0 75px #228DFF;
  }
}

/*REEEEEEEEEEESPONSIVE*/

@media (max-width: 650px) {
  #container {
    width: 100%;
  }
  h2 {
    font-size: 3.5em;
  }
}
</style>
</head>
<body>
<div id="container">



<center><b><font size="+2.5"><h2 style="text-shadow: 0 0 3px #FF0000;color: #00264d;">NACHIMUTHU POLYTECHNIC COLLEGE<br /> POLLACHI</h2></font></b></center>


</div>

<div id="linkBack" style="position:absolute;right:0px;top:0px;background-color:#333;margin:0;width:60px;padding:5px"><a href="http://www.nptc.ac.in/" target="_blank" style="font-size:14px;text-decoration:none;color:#fff;padding:0 0 0 5px;font-family:sans-serif">My Site</a></div></body>

<div id="up"><center>
<center><a href="adm_login.php"><img src="img/logo1.png" alt="not supported" class="ad" /></a></center>
<center><a href="first_yr/adm_login.php"><img src="img/logo1.png" alt="not supported" class="ad1" /></a></center>


<center><a href="first_yr/login.php"><button class="stud2" ><font size="+1">I yr FEEDBACK</font></button></a></center>
<center><a href="login.php"><button class="stud1" ><font size="+1">II yr and III yr FEEDBACK</font></button></a></center>

</center></div>

</body>
</html>