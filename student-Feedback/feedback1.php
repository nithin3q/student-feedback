<?php
include_once "connect.php";

function kk()
{
 
$sq="insert into login_user values ('".$_SESSION['rollno']."')";
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
<link rel="stylesheet" type="text/css" href="style.css">
<script src="j.js"></script>
<style>
#staff_name
{
	display: none;
}
#dis_st
{
	position: absolute;
	top: 270px;
	left:600px;
	color: #9400D3
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
<body  onload="
	document.getElementById('dis_st').innerHTML=document.getElementById('staff_name').value
var cc=document.getElementById('course').length;
if(cc==0)
{
location.href='ins1.php';
}

">
<form id="fupForm" action="save.php" name="form1" method="post">
    <input type="text" style="display:none;" name="r" value="<?php echo $_SESSION['rollno']; ?>" />
<input type="text" style="display:none;" name="d" value="<?php echo $_SESSION['dep']; ?>" />
<input type="text" style="display:none;" name="term" value="<?php echo $_SESSION['term']; ?>" />
<input type="text" style="display:none;" name="ac_yr" value="0" />
<table border="1" cellspacing="0" cellpadding="10" width="100%" height="50%">
<tr>
<td colspan="8">
  <img src="logo.png" height="90" width="90" alt="not supported" class="img1"/>
<img src="logo1.png" height="90" width="90" alt="not supported" class="img2"/>
 <br />&nbsp;<center><b><font size="+2.2"><b><font size="+3" color="magenta">Srinivasa Institute of Engineering & Technology </font>  <br />                                         
<font size="+2" color="maroon">Approved by AICTE, Permanently Affiliated to JNTUK, Accredited by NAAC with 'A' grade<br />

<br />
 </center></td>
</tr>
<tr bgcolor="silver">
<th colspan="8"><font size="+2" color="Green">STUDENT FEEDBACK </font></th>
</tr >
<tr bgcolor="silver">
<th  colspan="8" align="left">COURSE NAME : <select name="s" id="course" onchange="
var ch=document.getElementById('course').selectedIndex;
		document.getElementById('staff_name').options[ch].selected=true;
		document.getElementById('dis_st').innerHTML=document.getElementById('staff_name').value;
">
<?php


// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
			
           $dd_res=mysqli_query($conn,"Select  course from staff where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."'");
          while($r=mysqli_fetch_row($dd_res))
          { 
				$sel=mysqli_num_rows(mysqli_query($conn,"select sno from feedback where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."' and course='".$r[0]."' and rollno='".$_SESSION['rollno']."'"));
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
		  		$sel=mysqli_num_rows(mysqli_query($conn,"select sno from feedback where rollno='".$_SESSION['rollno']."' and course='".$che_cou['course']."' and term='".$_SESSION['term']."'"));
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
<th colspan="8" align="left">NAME  OF THE FACULTY : 
<p id="dis_st"></p>
<select name="staff_name" id="staff_name" >
<?php

	
// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
         $dd_res=mysqli_query($conn,"Select  course,staff_name from staff where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."'");
          while($r=mysqli_fetch_array($dd_res))
          { 
				$sel=mysqli_num_rows(mysqli_query($conn,"select sno from feedback where dept like '".$_SESSION['dep']."' and term ='".$_SESSION['term']."' and course='".$r["course"]."' and rollno='".$_SESSION['rollno']."'"));
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
		  		$sel=mysqli_num_rows(mysqli_query($conn,"select sno from feedback where rollno='".$_SESSION['rollno']."' and course='".$che_cou['course']."' and term='".$_SESSION['term']."'"));
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
<table border="1" cellspacing="0" cellpadding="10" width="100%" id="f" bgcolor="white">
<tr>
<tr>
<td colspan="4"><b><font color="Brown">Comment →</b>
<button type="button" style="font-size:12pt;color:maroon;background-color:lightgreen;border:2px solid #336600;padding:3px"><b>Excellent(10)</button>
<button type="button" style="font-size:12pt;color:red;background-color:yellow;border:2px solid #336600;padding:3px"><b>Very Good(8)</button>
<button type="button" style="font-size:12pt;color:magenta;background-color:white;border:2px solid #336600;padding:3px"><b>Good(6)</button>
<button type="button" style="font-size:12pt;color:maroon;background-color:lightgrey;border:2px solid #336600;padding:3px"> <b>Satisfactory(5)</button>
<td><p><b><font color="Green">Excellent(10)</b></p></td>
<td><p><b><font color="Purple">Very Good(8)</b></p></td>
<td><p><b><font color="blue">Good(6)</b></p></td>
<td><p><b><font color="Red">Satisfactory(5)</b></p></td></font>
</tr>

<tr>
<th>1</th>
<td colspan="3"><font color="purple"><b>Punctual to the Class</td>
<td><p><input type="radio" id="a1" name="q1" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="a1" name="q1" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="a1" name="q1" value="6" required />Good</p></td>
<td><p><input type="radio" id="a1" name="q1" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>2</th>
<td colspan="3"><font color="purple"><b><font color="purple"><b>Completes the syllabus in time</td>
<td><p><input type="radio" id="a2" name="q2" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="a2" name="q2" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="a2" name="q2" value="6" required />Good</p></td>
<td><p><input type="radio" id="a2" name="q2" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>3</th>
<td colspan="3"><font color="purple"><b>Conduction of assignments and class tests as per the schedule</td>
<td><p><input type="radio" id="a3" name="q3" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="a3" name="q3" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="a3" name="q3" value="6" required />Good</p></td>
<td><p><input type="radio" id="a3" name="q3" value="5" required />Satisfactory</p></td>
</tr>
<!--<tr>
<th>B.</th>
<th colspan="7">TEACHING METHODLOGY</th>
</tr>-->
<tr>
<th>4</th>
<td colspan="3"><font color="purple"><b>Explains the subject content with clarity</td>
<td><p><input type="radio" id="b1" name="q4" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b1" name="q4" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b1" name="q4" value="6" required />Good</p></td>
<td><p><input type="radio" id="b1" name="q4" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>5</th>
<td colspan="3"><font color="purple"><b>Explanation with suitable applications of the topic</td>
<td><p><input type="radio" id="b2" name="q5" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b2" name="q5" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b2" name="q5" value="6" required />Good</p></td>
<td><p><input type="radio" id="b2" name="q5" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>6</th>
<td colspan="3"><font color="purple"><b>Use of teaching aids(Blackboard/PPt's etc..) relevant to the content</td>
<td><p><input type="radio" id="b3" name="q6" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b3" name="q6" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b3" name="q6" value="6" required />Good</p></td>
<td><p><input type="radio" id="b3" name="q6" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>7</th>
<td colspan="3"><font color="purple"><b>Gives references of additional source materials(Library) </td>
<td><p><input type="radio" id="b4" name="q7" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b4" name="q7" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b4" name="q7" value="6" required />Good</p></td>
<td><p><input type="radio" id="b4" name="q7" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>8</th>
<td colspan="3"><font color="purple"><b>About Counselling of students </td>
<td><p><input type="radio" id="b5" name="q8" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b5" name="q8" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b5" name="q8" value="6" required />Good</p></td>
<td><p><input type="radio" id="b5" name="q8" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>9</th>
<td colspan="3"><font color="purple"><b>Explaining the subjects by utilizing the lab machines/equipments</td>
<td><p><input type="radio" id="b6" name="q9" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b6" name="q9" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b6" name="q9" value="6" required />Good</p></td>
<td><p><input type="radio" id="b6" name="q9" value="5" required />Satisfactory</p></td>
</tr>
<tr>
<th>10</th>
<td colspan="3"><font color="purple"><b>Controlling classes effectively during the class hours</td>
<td><p><input type="radio" id="b7" name="q10" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b7" name="q10" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b7" name="q10" value="6" required />Good</p></td>
<td><p><input type="radio" id="b7" name="q10" value="5" required />Satisfactory</p></td>
</tr>

<th>11</th>
<td colspan="3"><font color="purple"><b>Inviting opinion and question on subject matter from students</td>
<td><p><input type="radio" id="b8" name="q11" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b8" name="q11" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b8" name="q11" value="6" required />Good</p></td>
<td><p><input type="radio" id="b8" name="q11" value="5" required />Satisfactory</p></td>
</tr>
<th>12</th>
<td colspan="3"><font color="purple"><b>Encouraging the students to make presentation on course related topics</td>
<td><p><input type="radio" id="b9" name="q12" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b9" name="q12" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b9" name="q12" value="6" required />Good</p></td>
<td><p><input type="radio" id="b9" name="q12" value="5" required />Satisfactory</p></td>
</tr>
<th>13</th>
<td colspan="3"><font color="purple"><b>How does teacher deals irregular students</td>
<td><p><input type="radio" id="b10" name="q13" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b10" name="q13" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b10" name="q13" value="6" required />Good</p></td>
<td><p><input type="radio" id="b10" name="q13" value="5" required />Satisfactory</p></td>
</tr>

<th>14</th>
<td colspan="3"><font color="purple"><b>Discuss the evaluated answer books of assignments with the students</td>
<td><p><input type="radio" id="b11" name="q14" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b11" name="q14" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b11" name="q14" value="6" required />Good</p></td>
<td><p><input type="radio" id="b11" name="q14" value="5" required />Satisfactory</p></td>
</tr>

<th>15</th>
<td colspan="3"><font color="purple"><b>Explains the content by taking realtime examples</td>
<td><p><input type="radio" id="b12" name="q15" value="10" required />Excellent</p></td>
<td><p><input type="radio" id="b12" name="q15" value="8" required />Very Good</p></td>
<td><p><input type="radio" id="b12" name="q15" value="6" required />Good</p></td>
<td><p><input type="radio" id="b12" name="q15" value="5" required />Satisfactory</p></td>
</tr>

</div>
</table> 




<center><input type="submit" name="save" value="SUBMIT" id="butsave"></center>
</form>
<a href="logout.php" accesskey="a"></a>
<a href="log_ins.php"; accesskey="s"></a>

</body>
</html>