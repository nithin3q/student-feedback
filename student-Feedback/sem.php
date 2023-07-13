<?php
session_start();
include_once "connect.php";
if(isset($_SESSION['us'])) {
	header("location: adm_login.php");
}

$a=1;
$b=1;
$c=1;
$d=1;
$e=1;
$f=1;
$ic=1;
?>
<html>
<head>
<style>
 
 .img1
{
float: left;
}
.img2
{
float: right;
}
#but
{
	position: relative;
	top: 280px;
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


</style>
 <script>
  var i=0;
  document.getElementById("pri").style.display='none';
 function call()
 {
	   var printContent = document.getElementById("pri");
    var WinPrint = window.open('', '', 'width=1080,height=1920');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
 }
function ad()
{
	i++;
	if(i<=document.getElementById("course").length){
	var x=document.getElementById("course").value;
	var y=document.createElement("INPUT");
	y.setAttribute("type","text");
	y.setAttribute("value",x);
	y.setAttribute("name","in"+i);
	y.style.display="none";
	document.forms[0].appendChild(y);
	document.getElementById("co").value=i;
	var k=document.getElementById("dis").innerHTML;
	if(i==1){
	document.getElementById("dis").innerHTML=k+"selected course: "+x;
	}else
	{
		document.getElementById("dis").innerHTML=k+","+x;
	}
	var sel=document.getElementById("course").selectedIndex;
	document.getElementById("course").options[sel].disabled=true;
	document.getElementById("course").options[sel+1].selected=true;
}}
 </script>
</head>
<body bgcolor="white">
 <div class="backBtn" style="  position: relative;top: 30px;left: 160px;">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="ad_main.php">Back to Admin</a></span>
      <span class="line bLine"></span>
	</div>
<p><a href="ad_logout.php"><img src="home_logo.png" alt="home" height="100" width="100" style="position: static;" /></a></p>


<div id="pri">
    <center>
<table border="1" cellpadding="10" cellspacing="0" width="75%" bgcolor="lightgrey">
  <tr bgcolor="lightgrey">
<<td colspan="7">
 <img src="logo.png" height="90" width="90" alt="not supported" class="img1"/>
<img src="logo1.png" height="90" width="90" alt="not supported" class="img2"/>
  <br />&nbsp;<center><font size="+2.2"><b><font size="+3" COLOR="MAGENTA">SRINIVASA INSTITUTE OF ENGINEERING & TECHNOLOGY </font>  <br />                                         

</font></center></td>
</tr>
<tr>
<td colspan="7"><center><h3><u><font color="blue">B.Tech</font></td>
</tr>



<?php


if (($_SESSION['term']=="I-I")||($_SESSION['term']=="I-II"))
{
    $acyr="2018-2019";
}
elseif (($_SESSION['term']=="II-I")||($_SESSION['term']=="II-II"))
	 $acyr= "2019-2020";
	 
elseif (($_SESSION['term']=="III-I")||($_SESSION['term']=="III-II"))
	 $acyr= "2020-2021";
else
	 $acyr= "2021-2022";
?>

<td bgcolor="lightgrey" colspan="7"><center>
<?php  echo " &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<b>Sem:</b>&nbsp".$_SESSION['term'];echo "<b>&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbspAcademic Year:</b>  &nbsp&nbsp".$acyr." ";?> </center></td>





</table>






<?php

?>
<?php

$course="0";
$staf="0";
?>
<?php
if(isset($_POST['submit'])) 
{ 
$count = $_POST['co'];
$ar=array();
$i1=0;
for($i=0;$i<$count;$i++)
{
	$i1++;
	$ar[$i]=$_POST["in".$i1];
}
for($i=0;$i<$count;$i++){
    $course = $ar[$i];
    $c_o=mysqli_query($conn,"select rollno from ac where course='".$course."' and term='".$_SESSION['term']."' and dept='".$_SESSION['dep']."E'");
    $c_o_cou=mysqli_num_rows($c_o);
    if($c_o_cou>=1)
    {
        $dep=$_SESSION['dep']."E";
    }else
    {
        $dep=$_SESSION['dep'];
    }
	$result = mysqli_query($conn,"SELECT * from coursse_mark where course='$course' and dept='".$dep."'");
	$res=mysqli_query($conn,"select staff_name from staff where course='".$course."' and term='".$_SESSION['term']."' and dept='".$dep."'");
	//$res=mysqli_query($conn,"select * from staff ");
	$r = mysqli_fetch_array($result);
	$r1 = mysqli_fetch_array($res);
	while($z=mysqli_fetch_array($result))
	{
		$q1 = $q1 + $z['q1'];
		$q2 = $q2 + $z['q2'];
		$q3 = $q3 + $z['q3'];
		$q4 = $q4 + $z['q4'];
		$q5 = $q5 + $z['q5'];
		$q6 = $q6 + $z['q6'];
		$q7 = $q7 + $z['q7'];
		$q8 = $q8 + $z['q8'];
		$q9 = $q9 + $z['q9'];
		$q10 = $q10 + $z['q10'];
		$q11 = $q11 + $z['q11'];
		$q12 = $q12 + $z['q12'];
		$q13 = $q13 + $z['q13'];
		$q14= $q14 + $z['q14'];
		$q15 = $q15 + $z['q15'];
		$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15;
		//$avg = ($total / 15)	;
	}
	
	

	
	
	
	$ic=$r["ic"];
	$staf=$r1["staff_name"];
?>
<tr class="tr">
<tr bgcolor="lightgrey"><td  style="text-align: left;"><?php echo "<b>Faculty Name:</b>" .$r1["staff_name"]; ?>
<td colspan="2" class="le"><?php echo "<b>Total  Number of Students Given  Feedback:</b>&nbsp&nbsp&nbsp&nbsp".$r["ic"]; ?></td></td></tr>
<td bgcolor="lightgrey" colspan="5">
<?php echo "<b>Course:</b>&nbsp &nbsp&nbsp".$course." ";echo "&nbsp&nbsp&nbsp<b>Department:</b> &nbsp".$_SESSION['dep']." ";echo "&nbsp&nbsp&nbsp<b>term:</b>&nbsp".$_SESSION['term'];  ?></td>



</tr>
  <tr bgcolor="lightgrey">
    <th>Questions</th>
    <th>Marks Secured for each Question</th>
    <th>Maximum Marks each Question</th>
  </tr>

<tr bgcolor="lightgrey"><td style="font-weight:bold;">1. Punctual to the Class : </td><td style="font-weight:bold;"><?php echo  $r["q1"];?></td>
    <td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
	
<tr><td style="font-weight:bold;">2. Completes the syllabus in time : </td><td style="font-weight:bold;"><?php echo $r["q2"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>></tr>
<tr><td style="font-weight:bold;">3. Conduction of assignments and class tests as per the schedule</td><td style="font-weight:bold;"><?php echo $r["q3"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">4. Explains the subject content with clarity</td><td style="font-weight:bold;"><?php echo $r["q4"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">5. Explanation with suitable applications of the topic</td><td style="font-weight:bold;"><?php echo $r["q5"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">6. Use of teaching aids(Blackboard/PPt's etc..) relevant to the content</td><td style="font-weight:bold;"><?php echo $r["q6"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">7. Gives references of additional source materials(Library) </td><td style="font-weight:bold;"><?php echo $r["q7"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>

<tr><td style="font-weight:bold;">8. About Counselling of students</td><td style="font-weight:bold;"><?php echo $r["q8"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">9. Explaining the subjects by utilizing the lab machines/equipments </td><td style="font-weight:bold;"><?php echo $r["q9"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">10. Controlling classes effectively during the class hours </td><td style="font-weight:bold;"><?php echo $r["q10"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">11 Inviting opinion and question on subject matter from students </td><td style="font-weight:bold;"><?php echo $r["q11"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>

<tr><td style="font-weight:bold;">12. Encouraging the students to make presentation on course related topics</td><td style="font-weight:bold;"><?php echo $r["q12"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">13. How does teacher deals irregular students </td><td style="font-weight:bold;"><?php echo $r["q13"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">14. Discuss the evaluated answer books of assignments with the students </td><td style="font-weight:bold;"><?php echo $r["q14"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">15. Explains the content by taking realtime examples </td><td style="font-weight:bold;"><?php echo $r["q15"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>

<tr><td style="font-weight:bold;">total marks secured </td><td style="font-weight:bold;"><?php echo $r["total"];?></td><td style="font-weight:bold;"><?php echo $r["ic"]*150;?> </td></tr>
<tr><td style="font-weight:bold;">Overall rating(%)</td><td colspan=2 style="font-weight:bold;"><?php echo $r["average"];?></td></tr>
<?php
}}
?>
</table>


<table border="1" cellspacing="0" width="75%">
  
<?php

$sq="SELECT * from coursse_mark where term='".$_SESSION["term"]."' and dept='".$_SESSION["dep"]."'";
$res1ult = mysqli_query($conn,$sq);
$ress = mysqli_query($conn,"SELECT * from coursse_mark where term='".$_SESSION["term"]."' and dept='".$_SESSION["dep"]."E'");
//$res1=mysqli_query($conn,"select staff_name from staff where course='".$_POST['course']."'");
?>
<!--<tr class="tr">
<td class="le"><?php echo "<b>Count:</b>".$r["ic"]; ?></td>
</tr>-->

  <br><tr bgcolor="lightpink">
    <th>Sno</th>
    <th>Name of the Faculty</th>
<th>Name of the Subject</th>
    <th>Score</th>
<th>Performance</th>
<th>Count</th>
  </tr>
<?php
$i=0;
while($r = mysqli_fetch_array($res1ult)){
		
		
		
		
		
		
		
	$i++;
$res1=mysqli_query($conn,"select staff_name from staff where course='".$r["course"]."' and term='".$_SESSION['term']."' and dept='".$_SESSION['dep']."'");
$r1 = mysqli_fetch_array($res1);
$tk=intval($r["total"]/5);
$ans="no";
if($r["total"]!=0){
$kkk=intval(($r["total"]/(100*$r["ic"]))*100);
if($r["average"] >= 80)
{
	$ans="excellent";
}
elseif($r["average"] >= 70 )
{
	$ans=" Very Good";
}
elseif($r["average"] >= 60 )
{
	$ans=" good";
}
elseif($r["average"] >= 50 )
{
	$ans="Satisfactory";
}
else
{
	$ans="Poor";
}
}
?>
<tr>
	<td><center><?php echo $i; ?></center></td>
    <td style="text-align: left;"><?php echo $r1["staff_name"]; ?></td>
    <td style="text-align: left;"><?php echo $r["course"]; ?></td>
	
    <td><center><?php echo $r["average"]; ?></center></td>
    <td><center><?php echo $ans; ?></center></td>
	<td><center><?php echo $r["ic"]; ?></center></td>
</tr>

<?php {} ?>

<?php } ?>
</table>
</center>
</div>
<br><br><center>
<input type="button" onClick="window.print();" value="PRINT">&nbsp;<input type="button" onClick="window.location='index.php'" value="BACK">
<br>
 <p accesskey="p" onclick="call()"></p>
  <a href="ad_logout.php" accesskey="a"></a>
  
  
</body>
</html>