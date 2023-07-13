<!DOCTYPE html>
<html>
<head>
<title>home</title>
<link rel="icon" href="Hlogo.png">
<style>
	
h1{
  font-family: Cambria,"Times New Roman", serif;
  color: white;
  font-size: 30px;
  text-shadow: rgba(255,215,145,1) 0px 0px 22px;
}
h2{
  font-family: Cambria,"Times New Roman", serif;
  color: white;
  font-size: 15px;
  text-shadow: rgba(38,255,38,0.9) 0px 0px 28px;
}
h3{
	font-family: Cambria,"Times New Roman", serif;
  font-size: 50px;
  color: #ffffcc;
}
body {
  font-family: Cambria;
  background-image: url('home.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.400),rgba(0, 0, 0, 0.8)) , url(home.jpg);
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}
.active {
  background-color: #04AA6D;
}


.button {
  font-family: Cambria;
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 250px;
  text-align: center;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
  border-radius: 12px;
}

.button:hover {
  background-color: #0F6B0E;
  color: white;
}
</style>
</head>

<body>

<div>
<ul>
  <li style="font-size:20px"><a><b>FEEDBACK PORTAL</b></a></li>
  <li style="float:right"><a class="active" href="adm_login.php">Admin Login</a></li>
  <li style="float:right"><a href="http://www.sriniet.edu.in/" target="_blank" >Visit Our Site</a></li>
 
</ul>

</div>
<br>
<div id="container">
<center><img src="Hlogo.png" alt="Smiley face" width="135" height="120" style="vertical-align:middle"></center>
<center><h1> SRINIVASA INSTITUTE OF ENGINEERING & TECHNOLOGY, CHEYYERU</h1></center>


<br>
<center><h3>Welcome to Feedback Portal</h3></center>
</div>
<div>
<center><a href="login.PHP"><button class="button" >Click Here to Give Feedback</button></a></center>
</div>

</body>
</html>