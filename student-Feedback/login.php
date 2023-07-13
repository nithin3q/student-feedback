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
<script src="https://code.jquery.com/jquery-2.2.4.min.js">
+ function($) {
  $('.palceholder').click(function() {
    $(this).siblings('input').focus();
  });

  $('.form-control').focus(function() {
    $(this).parent().addClass("focused");
  });

  $('.form-control').blur(function() {
    var $this = $(this);
    if ($this.val().length == 0)
      $(this).parent().removeClass("focused");
  });
  $('.form-control').blur();

}(jQuery);

</script>



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




.button {
    border: 1px;
    display: inline-block;
    padding: 1rem 6rem;
    border-radius: 1rem;
    color: #213140;
    text-transform: uppercase;
    font-size: 1rem;
    letter-spacing: 0.15rem;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.button:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #daeff1;
    border-radius: 1rem;
    z-index: -2;
}
button:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background-color: #327a81;
    transition: all 0.3s;
    border-radius: 1rem;
    z-index: -1;
}
 .button:hover {
	 color: #fff;
}
 .button:hover:before {
	 width: 100%;
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
  border-radius: 6px;
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
  border-radius: 6px;
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
  width: 370px;
  background: #fff;
  margin: 20px auto;
  min-height: 200px;
  border: 1px solid #f3f3f3;
  border-radius: 26px;
}
.wrapper .inner-warpper {
  padding: 50px 30px 50px;
  box-shadow: 1px 1.732px 15px 10px rgba(0,0,0,20%);
  border-radius: 26px;
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








select {
  background-color: #327a81;
  color: white;
  padding: 6px;
  width:300px;
  border: none;
font-weight: bolder;
  -webkit-appearance: button;
  appearance: button;
  outline: none;
  border-radius: 6px;
}

select::after {

  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}

select:hover::after {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

select::option {
  padding: 50px;
}











input[type="radio"]:checked ~ .check {
	 border: 5px solid #0dff92;
}
 input[type="radio"]:checked ~ .check::before {
	 background: #0dff92;
}
 input[type="radio"]:checked ~ label {
	 
}
 

 input[type="radio"]:checked ~ .check {
	 border: 5px solid #0dff92;
}
.toggle {
	 margin: 0 0 1.5rem;
	 box-sizing: border-box;
	 font-size: 0;
	 display: flex;
	 flex-flow: row nowrap;
	 justify-content: flex-start;
	 align-items: stretch;

}
 .toggle input {
	 width: 0;
	 height: 0;
	 position: absolute;
	 left: -9999px;
}
 .toggle input + label {
	 margin: 0;
	 padding: 0.75rem ;
	 box-sizing: border-box;
	 position: relative;
	 display: inline-block;
	 border: solid 1px #ddd;
	 background-color: #fff;
	 font-size: 1rem;
   font-family: serif;
	 text-align: center;
	 line-height: 140%;
	 font-weight: 500;
	 text-align: center;
	 box-shadow: 0 0 0 rgba(255, 255, 255, 0);
	 transition: border-color 0.15s ease-out, color 0.25s ease-out, background-color 0.15s ease-out, box-shadow 0.15s ease-out;
   

   width: 100%;
	/* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
	/*flex: 0 0 50%;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	*/
	/* ----- */
}
 .toggle input + label:first-of-type {
	 border-radius: 6px 0 0 6px;
	 border-right: none;
}
 .toggle input + label:last-of-type {
	 border-radius: 0 6px 6px 0;
	 border-left: 5px;
}
 .toggle input:hover + label {
	 border-color: #213140;
}
 .toggle input:checked + label {
	 background-color: #327a81;
	 color: #fff;
	 box-shadow: 0 0 10px rgba(102, 179, 251, .5);
	 border-color: #327a81;
	 z-index: 1;
}
 .toggle input:focus + label {
	 outline: dotted 1px #ccc;
	 outline-offset: 0.45rem;
}
 @media (max-width: 800px) {
	 .toggle input + label {
		 padding: 0.75rem 0.25rem;
		 flex: 0 0 50%;
		 display: flex;
		 justify-content: center;
		 align-items: center;
	}
}
body{
  background-position: cover;
  background-attachment: fixed;
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


function changeColour(value)
{
    var color = document.body.style.backgroundImage
    switch(value)
    {
        case 'c':
            color = "url('ce.gif')";

        break;
        case 'm':
            color = "url('gear.gif')";
        break;
        case 'e':
             color = "url('e1.gif')";
        break;
         case 'ec':
           color = "url('ece.gif')";
        break;
        case 'cs':
            color = "url('cs55.gif')";
        break;
        case 'a':
          color = "url('ai.gif')";
        break;
    }
   document.body.style.backgroundImage = color;
}

 

</script>


<br><br><br><br>
<br><br><br>

<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login with your Credentials</h2>
    <form name="frmUser" method="post" action="log.php" onsubmit="return validateForm()" required>
      <div class="input-group">
       
        <input class="form-control" type="text" id="roll" name="rollno" placeholder="Roll Number"  />
        <span class="lighting"></span>
      </div>
      
      <div class="input-group">
      
        <input class="form-control" type="text" id="key" name="key" placeholder="Key"  />
        <span class="lighting"></span>
      </div>
      
      
      <div class="input-group">
      
        <span class="lighting"></span>
      </div>
      <div class="toggle">
        <input type="radio" id="a1" name="dep" value="CE" onclick="changeColour('c')" required />
            <label for="a1">CE</label>
         <input type="radio" id="a2" name="dep" value="EEE" onclick="changeColour('e')" required />
            <label for="a2">EEE</label>
         <input type="radio" id="a3" name="dep" value="ME" onclick="changeColour('m')" required />
            <label for="a3">ME</label></div>
            <div class="toggle">
         <input type="radio" id="a4" name="dep" value="ECE" onclick="changeColour('ec')" required />
            <label for="a4">ECE</label>
        <input type="radio" id="a5" name="dep" value="CSE" onclick="changeColour('cs')" required />
            <label for="a5">CSE</label>
        <input type="radio" id="a6" name="dep" value="AIML" onclick="changeColour('a')" required />
            <label for="a6">AIML</label>
            </div>
      
      <div class="input-group">
        <select class="t" name="term" style="width:308px; height: 40px;  vertical-align:middle;">
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
      
      
<br>
      <button class="button" type="submit" name="log" value="SUBMIT" align="left" id="sub">Login</button>
      
      
</form>
</div>
</body>
</html>
