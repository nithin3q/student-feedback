<?php
include_once "connect.php";

function kk()
{
 
$sq="insert into login_users('LOGINED') values ('".$_SESSION['rollno']."')";
mysqli_query($conn,$sq);
}
?>
<?php
session_start();
if(!isset($_SESSION['dep'])) {
	header("location: login.php");
}


?>
<html>
<head>
<title>feedback form</title>
<link rel="shortcut icon" href="C:\xampp\htdocs\pro\img\sam1.png" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style11.css">
<link rel="icon" href="Hlogo.png">


<script type="javascript">   $("input[type=submit]").click(function() {
             
            var atLeastOneChecked = false;
            $("input[type=radio]").each(function() {
             
                // If radio button not checked
                // display alert message
                if ($(this).attr("checked") != "checked") {
                 
                    // Alert message by displaying
                    // error message
                    $("#msg").html(
        "<span class='alert alert-danger' id='error'>"
        + "Please Choose atleast one</span>");
                }
            });
        });</script>
<style>
	:required{
		background:red;
	}
	input:required{
		color:#f1f1f1;
	}
#staff_name
{
	display: none;
}
#dis_st
{
	font-weight: bold;
	position: absolute;
	top: 102px;
	left:200px;
	font-family: Arial, Helvetica, sans-serif;
    color: #327a81;
}

input[type="reset"] {
	 border: 1px #242424;
	  display: inline-block;
	 padding: 0.75rem 1.25rem;
	 border-radius: 10rem;
	 color: #213140;
	 text-transform: uppercase;
	 font-size: 1rem;
	 letter-spacing: 0.15rem;
	 transition: all 0.3s;
	 position: relative;
	 overflow: hidden;
	 z-index: 1;
}

input[type="reset"]:hover{

	 color: red;
	}


.button {
	border: 1px;
	 display: inline-block;
	 padding: 0.75rem 1.25rem;
	 border-radius: 10rem;
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
	 border-radius: 10rem;
	 z-index: -2;
}
 .button:before {
	 content: '';
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 width: 0%;
	 height: 100%;
	 background-color: #327a81;
	 transition: all 0.3s;
	 border-radius: 10rem;
	 z-index: -1;
}
 .button:hover {
	 color: #fff;
}
 .button:hover:before {
	 width: 100%;
}

label{
	width: 19.5%;
}
body {
	font-family: Cambria;
	 background-color: #91ced4;
}
 body * {
	 box-sizing: border-box;
}
 .header {
	 background-color: #327a81;
	 color: white;
	 font-size: 1.5em;
	 padding: 1rem;
	 text-align: center;
	 text-transform: uppercase;
}
 img {
	 border-radius: 50%;
	 height: 60px;
	 width: 60px;
}
 .table-users {
	 border: 1px solid #327a81;
	 border-radius: 10px;
	 box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
	 max-width: calc(100% - 2em);
	 margin: 1em auto;
	 overflow: hidden;
	 width: 1100px;
}
 table {
	 width: 100%;
	 
}
 table td, table th {
	 color: #2b686e;
	 padding: 10px;
}
 table td {
	 text-align: center;
	 vertical-align: middle;
}
 table td:last-child {
	 font-size: 0.95em;
	 line-height: 1.4;
	 text-align: left;
}
 table th {
	 background-color: #daeff1;
	 
}
 table tr:nth-child(2n) {
	 background-color: white;
}
 table tr:nth-child(2n + 1) {
	 background-color: #edf7f8;
}
 @media screen and (max-width: 700px) {
	 table, tr, td {
		 display: block;
	}
	 td:first-child {
		 position: absolute;
		 top: 50%;
		 transform: translateY(-50%);
		 width: 100px;
	}
	 td:not(:first-child) {
		 clear: both;
		 margin-left: 100px;
		 padding: 4px 20px 4px 90px;
		 position: relative;
		 text-align: left;
	}
	 td:not(:first-child):before {
		 color: #91ced4;
		 content: "";
		 display: block;
		 left: 0;
		 position: absolute;
	}
	 td:nth-child(2):before {
		 content: "Name:";
	}
	 td:nth-child(3):before {
		 content: "Email:";
	}
	 td:nth-child(4):before {
		 content: "Phone:";
	}
	 td:nth-child(5):before {
		 content: "Comments:";
	}
	 tr {
		 padding: 10px 0;
		 position: relative;
	}
	 tr:first-child {
		 display: none;
	}
}
 @media screen and (max-width: 500px) {
	 .header {
		 background-color: transparent;
		 color: #fff;
		 font-size: 2em;
		 font-weight: 700;
		 padding: 0;
		 text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
	}
	 img {
		 border: 3px solid;
		 border-color: #daeff1;
		 height: 100px;
		 margin: 0.5rem 0;
		 width: 100px;
	}
	 td:first-child {
		 background-color: #c8e7ea;
		 border-bottom: 1px solid #91ced4;
		 border-radius: 10px 10px 0 0;
		 position: relative;
		 top: 0;
		 transform: translateY(0);
		 width: 100%;
	}
	 td:not(:first-child) {
		 margin: 0;
		 padding: 5px 1em;
		 width: 100%;
	}
	 td:not(:first-child):before {
		 font-size: 0.8em;
		 padding-top: 0.3em;
		 position: relative;
	}
	 td:last-child {
		 padding-bottom: 1rem !important;
	}
	 tr {
		 background-color: white !important;
		 border: 1px solid #6cbec6;
		 border-radius: 10px;
		 box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
		 margin: 0.5rem 0;
		 padding: 0;
	}
	 .table-users {
		 border: none;
		 box-shadow: none;
		 overflow: visible;
	}
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

 


h1{
  font-family: Cambria,"Times New Roman", serif;
  color: white;
  font-size: 30px;
text-shadow: rgba(255,173,51,1) 4px 10px 77px; 
}



 body:not(:-moz-handler-blocked) fieldset {
	 display: table-cell;
}
/* TOGGLE STYLING */
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
	 padding: 0.75rem 1rem;
	 box-sizing: border-box;
	 position: relative;
	 display: inline-block;
	 border: solid 1px #ddd;
	 background-color: #fff;
	 font-size: 1rem;
	 text-align: center;
	 line-height: 140%;
	 font-weight: 500;
	 text-align: center;
	 box-shadow: 0 0 0 rgba(255, 255, 255, 0);
	 transition: border-color 0.15s ease-out, color 0.25s ease-out, background-color 0.15s ease-out, box-shadow 0.15s ease-out;
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
	 border-left: none;
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
/* STYLING FOR THE STATUS HELPER TEXT FOR THE DEMO */
 .status {
	 margin: 0;
	 font-size: 1rem;
	 font-weight: 400;
}
 .status span {
	 font-weight: 600;
	 color: #b6985a;
}
 .status span:first-of-type {
	 display: inline;
}
 .status span:last-of-type {
	 display: none;
}
 @media (max-width: 800px) {
	 .status span:first-of-type {
		 display: none;
	}
	 .status span:last-of-type {
		 display: inline;
	}
}







select {
  background-color: #3fa3ac;
  color: white;
  padding: 6px;
  width:150px;
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





</style>
	<script src="jquery.min.js"></script>
	<script>

	var roll="<?php echo $_SESSION['rollno'] ?>";
	var dep="<?php echo $_SESSION['dep'] ?>";
	var ter="<?php echo $_SESSION['term'] ?>";
	var ac="<?php echo $_SESSION['ac_yr'] ?>";
	function chan()
	{
		var ch=document.getElementById("course").selectedIndex;
		document.getElementById("staff_name").options[ch].selected=true;
		document.getElementById("dis_st").innerHTML=document.getElementById("staff_name").value;
	}
	function loa()
	{
		document.getElementById("dis_st").innerHTML=document.getElementById("staff_name").value;
	}
	
	function log()
	{
	    alert("work");
	}
	</script>
</head>
<br><br>
<body  onload="
	document.getElementById('dis_st').innerHTML=document.getElementById('staff_name').value
var cc=document.getElementById('course').length;
if(cc==0)
{
location.href='ins11.php';
}

">
<form id="fupForm" action="lab_save.php" name="form1" method="post">
<input type="text" style="display:none;" name="r" value="<?php echo $_SESSION['rollno']; ?>" />
<input type="text" style="display:none;" name="d" value="<?php echo $_SESSION['dep']; ?>" />
<input type="text" style="display:none;" name="term" value="<?php echo $_SESSION['term']; ?>" />
<input type="text" style="display:none;" name="ac_yr" value="0" />
<table border="0" cellspacing="0" cellpadding="10" width="100%" >
<tr>

</tr>
<tr bgcolor="silver">
<th colspan="8" align="left" style="font-weight: normal;">NAME  OF THE FACULTY :</th>
<!--<th colspan="8"><font size="+1" color="Green"><style align="left">STUDENT FEEDBACK </style></font></th>-->
</tr >
<tr bgcolor="silver">
<th  colspan="8" align="left" style="font-weight: normal;">&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp COURSE NAME &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp: &nbsp<select style="font-weight: bold;" name="s" id="course" onchange="
var ch=document.getElementById('course').selectedIndex;
		document.getElementById('staff_name').options[ch].selected=true;
		document.getElementById('dis_st').innerHTML=document.getElementById('staff_name').value;
">
<?php


// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
			
           $dd_res=mysqli_query($conn,"Select  course from labstaff where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."'");
          while($r=mysqli_fetch_row($dd_res))
          { 
				$sel=mysqli_num_rows(mysqli_query($conn,"select sno from lab_feedback where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."' and course='".$r[0]."' and rollno='".$_SESSION['rollno']."'"));
                if($sel>=1)
				{
					echo "null";
				}
				else{
				echo "<option value='$r[0]'> $r[0] </option>";
				}
		  }
		  $che=mysqli_query($conn,"select * from ac where rollno='".$_SESSION['rollno']."' and term='".$_SESSION['term']."'");
		  $che1=mysqli_query($conn,"select rollno from ac where rollno='".$_SESSION['rollno']."' and term='".$_SESSION['term']."'");
		  $cou_che=mysqli_num_rows($che1);
		  if($cou_che==1){
		  while($che_cou=mysqli_fetch_array($che)){
		  		$sel=mysqli_num_rows(mysqli_query($conn,"select sno from lab_feedback where rollno='".$_SESSION['rollno']."' and course='".$che_cou['course']."' and term='".$_SESSION['term']."'"));
		  		if($sel>=1)
		  		{
		  		    echo "null";
		  		}else
		  		{
		     echo "<option>".$che_cou['course']."</option>";
		  		}
		  }
		  		}
      ?>
</select></th>
</tr>
<tr>
<!--<th colspan="8" align="left">NAME  OF THE FACULTY :</th>-->

<p id="dis_st" ></p>
<select name="staff_name" id="staff_name" >
<?php

	
// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
         $dd_res=mysqli_query($conn,"Select  course,staff_name from labstaff where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."'");
          while($r=mysqli_fetch_array($dd_res))
          { 
				$sel=mysqli_num_rows(mysqli_query($conn,"select sno from lab_feedback where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."' and course='".$r["course"]."' and rollno='".$_SESSION['rollno']."'"));
                if($sel==1)
				{
					echo "null";
				}
				else{
				echo "<option value='".$r['staff_name']."'>". $r['staff_name']." </option>";
				}
		  }
          
          
            $che=mysqli_query($conn,"select * from ac where rollno='".$_SESSION['rollno']."' and term='".$_SESSION['term']."'");
		  $che1=mysqli_query($conn,"select rollno from ac where rollno='".$_SESSION['rollno']."' and term='".$_SESSION['term']."'");
		  $cou_che=mysqli_num_rows($che1);
		  if($cou_che==1){
		  while($che_cou=mysqli_fetch_array($che)){
		  		$sel=mysqli_num_rows(mysqli_query($conn,"select sno from lab_feedback where rollno='".$_SESSION['rollno']."' and course='".$che_cou['course']."' and term='".$_SESSION['term']."'"));
		  		if($sel>=1)
		  		{
		  		    echo "null";
		  		}else
		  		{
		     echo "<option>".$che_cou['staff']."</option>";
		  		}
		  }
		  		}
      ?>
</select>
</th>
</tr>
   <div class="header"><b>LAB FEEDBACK FORM</b></div>
   
   <table cellspacing="0">
     
   <tr>
      	<td>1</td>
         <td width="400"><b>Teacher’s punctuality to the laboratory</b></td>
         <td colspan="5" style="vertical-align:top;"><div class="toggle">
            <input type="radio" id="a1" name="q1" value="10" required />
            <label for="a1">Excellent</label>
            <input type="radio" id="a2" name="q1" value="8" required />
            <label for="a2" for="a2">Very Good</label>
         		<input type="radio" id="a3" name="q1" value="6" required />
            <label for="a3">Good</label>
            <input type="radio" id="a4" name="q1" value="4" required />
            <label for="a4">Satisfactory</label>
            <input type="radio" id="a5" name="q1" value="82" required />
            <label for="a5">BelowSatisfactory</label></td>
      </tr>
      <tr>
      	<td>2</td>
         <td><b>Delivery of laboratory instructions</b></td>
         <td colspan="5" style="text-align: center;"><div class="toggle">
         <input type="radio" id="a6" name="q2" value="10" required />
            <label for="a6">Excellent</label>
         <input type="radio" id="a7" name="q2" value="8" required />
            <label for="a7">Very Good</label>
         <input type="radio" id="a8" name="q2" value="6" required />
            <label for="a8">Good</label>
         <input type="radio" id="a9" name="q2" value="4" required />
            <label for="a9">Satisfactory</label>
         <input type="radio" id="a10" name="q2" value="2" required />
            <label for="a10">BelowSatisfactory</label>
         </td></div>
      </tr>
   
   <tr><td>3</td>
         <td><b>Lab Syllabus coverage </b></td>
         <td colspan="5" style="text-align: center;"><div class="toggle">
            <input type="radio" id="a11" name="q3" value="10" required />
            <label for="a11">Excellent</label>
         <input type="radio" id="a12" name="q3" value="8" required />
            <label for="a12">Very Good</label>
         <input type="radio" id="a13" name="q3" value="6" required />
            <label for="a13">Good</label>
         <input type="radio" id="a14" name="q3" value="4" required />
            <label for="a14">Satisfactory</label>
         <input type="radio" id="a15" name="q3" value="2" required />
            <label for="a15">BelowSatisfactory</td></div>
      </tr>

<tr><td>4</td>
         <td><b>Maintaining discipline during lab</b></td>
         <td colspan="5" style="text-align: center;"><div class="toggle">
            <input type="radio" id="a16" name="q4" value="10" required />
            <label for="a16">Excellent</label>
         <input type="radio" id="a17" name="q4" value="8" required />
            <label for="a17">Very Good</label>
         <input type="radio" id="a18" name="q4" value="6" required />
            <label for="a18">Good</label>
         <input type="radio" id="a19" name="q4" value="4" required />
            <label for="a19">Satisfactory</label>
         <input type="radio" id="a20" name="q4" value="2" required />
            <label for="a20">BelowSatisfactory</td></div>
      </tr>
<tr><td>5</td>
         <td><b>Clarifying student's doubts</b></td>
         <td colspan="5" style="text-align: center;"><div class="toggle">
            <input type="radio" id="a21" name="q5" value="10" required />
            <label for="a21">Excellent</label>
         <input type="radio" id="a22" name="q5" value="8" required />
            <label for="a22">Very Good</label>
         <input type="radio" id="a23" name="q5" value="6" required />
            <label for="a23">Good</label>
         <input type="radio" id="a24" name="q5" value="4" required />
            <label for="a24">Satisfactory</label>
         <input type="radio" id="a25" name="q5" value="2" required />
            <label for="a25">BelowSatisfactory</label></td></div>
      </tr>

      
   </table>
</div>
<br>
<center><input type="reset"   value="Reset" />
<button class="button" type="submit" name="save" value="SUBMIT" id="butsave">SUBMIT</button>
</center>
<br><br>
</form>
<a href="logout.php" accesskey="a"></a>
<a href="log_ins.php"; accesskey="s"></a>

</body>
</html>