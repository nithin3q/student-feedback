<?php
session_start();
include_once "connect.php";
if(isset($_SESSION['dep'])) {
  header("location: login.php");
}
?>
<html>
<head>
<title>login</title>
<link rel="icon" href="Hlogo.png">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
 <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>




<style>
body {
  background: #f2f2f2;
}
.animate {
  transition: all 0.15s linear;
}
.text-center {
  text-align: center;
}
.pull-left {
  float: left;
}
.pull-right {
  float: right;
}
.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.clearfix {
  display: inline-block;
}
* html .clearfix {
  height: 1%;
}
.clearfix {
  display: block;
}
a {
  color: #00A885;
}
a:hover,
a:focus {
  color: #00755d;
  transition: all 0.15s linear;
}
.text-primary {
  color: #00A885;
}
input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0 1000px white inset !important;
}
.logo h1 {
  color: #00A885;
  margin-bottom: -12px;
}
input[type="checkbox"] {
  width: auto;
}
button {
  cursor: pointer;
  background: #00A885;
  width: 100%;
  border: 0;
  padding: 10px 15px;
  color: #fff;
  font-size: 20px;
  -webkit-transition: .3s linear;
  transition: .3s linear;
}
span.validate-tooltip {
  background: #D91717;
  width: 100%;
  display: block;
  padding: 5px;
  color: #fff;
  box-sizing: border-box;
  font-size: 14px;
  margin-top: -28px;
  transition: all 0.3s ease-in-out;
  -webkit-animation: tooltipanimation .3s 1;
  -moz-animation: tooltipanimation .3s 1;
  -o-animation: tooltipanimation .3s 1;
  animation: tooltipanimation .3s 1;
}
.input-group {
  position: relative;
  margin-bottom: 20px;
}
.input-group label {
  position: absolute;
  top: 9px;
  left: 10px;
  font-size: 16px;
  color: #cdcdcd;
  font-weight: normal;
  padding: 2px 5px;
  z-index: 5;
  transition: all 0.15s linear;
}
.input-group input {
  outline: none;
  display: block;
  width: 100%;
  height: 40px;
  position: relative;
  z-index: 3;
  border: 1px solid #d9d9d9;
  padding: 10px 10px;
  background: #ffffff;
  box-sizing: border-box;
  font-wieght: 400;
  -moz-transition: 0.3s ease;
  -webkit-transition: 0.3s ease;
  -o-transition: 0.3s ease;
  transition: 0.3s ease;
}
.input-group .lighting {
  background: #00A885;
  width: 0;
  height: 2px;
  display: inline-block;
  position: absolute;
  top: 40px;
  left: 0;
  transition: all 0.15s linear;
}
.input-group.focused .lighting {
  width: 100%;
}
.input-group.focused label {
  background: #fff;
  font-size: 12px;
  top: -8px;
  left: 5px;
  color: #00A885;
}
.input-group span.validate-tooltip {
  margin-top: 0;
}
.wrapper {
  width: 320px;
  background: #fff;
  margin: 20px auto;
  min-height: 200px;
  border: 1px solid #f3f3f3;
}
.wrapper .inner-warpper {
  padding: 50px 30px 60px;
  box-shadow: 1px 1.732px 10px 0px rgba(0,0,0,0.063);
}
.wrapper .title {
  margin-top: 0;
}
.wrapper .supporter {
  margin-top: 10px;
  font-size: 14px;
  color: #8E8E8E;
  cursor: pointer;
}
.wrapper .remember-me {
  cursor: pointer;
}
.wrapper input[type="checkbox"] {
  float: left;
  margin-right: 5px;
  margin-top: 2px;
  cursor: pointer;
}
.wrapper label[for="rememberMe"] {
  cursor: pointer;
}
.wrapper .signup-wrapper {
  padding: 10px;
  font-size: 14px;
  background: #EBEAEA;
}
.wrapper .signup-wrapper a {
  text-decoration: none;
  color: #7F7F7F;
}
.wrapper .signup-wrapper a:hover {
  text-decoration: underline;
}
@-webkit-keyframes tooltipanimation {
  from {
    margin-top: -28px;
  }
  to {
    margin-top: 0;
  }
}
@-moz-keyframes tooltipanimation {
  from {
    margin-top: -28px;
  }
  to {
    margin-top: 0;
  }
}
@-o-keyframes tooltipanimation {
  from {
    margin-top: -28px;
  }
  to {
    margin-top: 0;
  }
}
@keyframes tooltipanimation {
  from {
    margin-top: -28px;
  }
  to {
    margin-top: 0;
  }
}
.direction {
  width: 200px;
  position: fixed;
  top: 120px;
  left: 20px;
  font-size: 14px;
  line-height: 1.2;
  text-align: center;
  background: #9365B8;
  padding: 10px;
  color: #fff;
}
@media (max-width: 480px) {
  .direction {
    position: static;
  }
}
option{
  font-weight:bold;
}
</style>
</head>
<body >
  <script>

function validateForm() {
  var x = document.forms["frmUser"]["rollno"].value;
  var y = document.forms["frmUser"]["key"].value;
  if (x == "") {
    alert("Please Enter Roll No");
    return false;
  }
  if (y == ""){
  alert("Please Enter Key ");
    return false;
  }
 
  
} 

function myFunction() {
  var x = document.getElementById("key");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


</script>

<br><br><br><br><br><br><br><br><br><br>

<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login with your credintials</h2>
    <form name="frmUser" method="post" action="lab_log.php" onsubmit="return validateForm()" required>
      <div class="input-group">
        
        <input class="form-control" type="text" id="roll" name="rollno" placeholder="Roll number"  />
        <span class="lighting"></span>
      </div>
      
      <div class="input-group">
       
        <input class="form-control" type="text" id="key" name="key"  placeholder="KEY" />
        <span class="lighting"></span>
      </div>
      
      
      <div class="input-group">
        <select class="form-control" id="dep" name="dep" style="width: 260px; height: 35px;  vertical-align:middle;" >
    <option>Select Department</option>
   <?php
// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
           $dd_res=mysqli_query($conn,"Select  dept from department ");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }
      ?>
</select>
        <span class="lighting"></span>
      </div>
      
      
      <div class="input-group">
        <select class="t" name="term" style="width: 260px; height: 35px;  vertical-align:middle;">
         <option>Select Semester</option>
        <option value="I-I">I-I</option>
        <option value="I-II">I-II</option>
        <option value="II-I">II-I</option>
        <option value="II-II">II-II</option>
        <option value="III-I">III-I</option>
        <option value="III-II">III-II</option>
        <option value="IV-I">IV-I</option>
        <option value="IV-II">IV-II</option></select>
        <span class="lighting"></span>
      </div>
      
      

      <button type="submit" name="log" value="SUBMIT" align="left" id="sub">Login</button>
      
      
</form>

</div>
</body>
</html>
