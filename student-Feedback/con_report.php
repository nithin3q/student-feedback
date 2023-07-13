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

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="for" name="for">
<p id="dis"></p>
   <p>
Select Subject :
<select name="course" id="course" >
<?php



// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
           $dd_res=mysqli_query($conn,"Select  courses from courses where dept='".$_SESSION["dep"]."' and term='".$_SESSION["term"]."'");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }
          $sell=mysqli_query($conn,"select * from ac where dept='".$_SESSION["dep"]."E'");
          $sell_cou=mysqli_num_rows($sell);
          if($sell_cou>=1){
          $dd_res=mysqli_query($conn,"Select  courses from courses where dept='".$_SESSION["dep"]."E' and term='".$_SESSION["term"]."'");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }}
      ?>
</select>
</p>
<input type="button" id="add" value="add" onclick="ad()" />
   <input type="submit" name="submit" value="Submit" onclick="run()"><br/>
   <input type="text" name="co" id="co" style="display: none;" />
</form>
<div id="pri" >
 <center>
 
 <!--<b><u><font color="#ff3374" size=5>Academic Year: <font color="#408c72" size=5>2018-2022</font></font></u></b><br>-->
 
 
  <table border="1" cellpadding="10" cellspacing="0" width="75%" bgcolor="lightgrey">
  <tr >
<td colspan="7">
 <img src="logo.png" height="90" width="90" alt="not supported" class="img1"/>
<img src="logo1.png" height="90" width="90" alt="not supported" class="img2"/>

 <br/>&nbsp;<center><font size="+2.2"><b><font size="+3" COLOR="maroon">SRINIVASA INSTITUTE OF ENGINEERING & TECHNOLOGY </font>  <br/>                                         

</font></center></td></tr>

<tr>
<td colspan="7"><center><h2><u><font color="green">Subjectwise Faculty Performance</font></td>
</tr>

<tr>
<td colspan="7"><center><h3><u><font color="blue">B.Tech</font></td>
</tr>
<tr>
<td colspan="7"><center><b><u><font color="maroon">CSE-Section-A</td>
</tr>
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
    //$c_o_cou=mysqli_num_rows($c_o);
   // if(mysqli_num_rows($c_o)>=1)
   // {
       // $dep=$_SESSION['dep']."E";
   // }else
   // {
        $dep=$_SESSION['dep'];
    //}
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








<?php
{
	
$Ecount1=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques1=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row1= $Ecount1->fetch_row();
 $row1=$row1[0];


$Vcount1=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques1=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row2 = $Vcount1->fetch_row();
$row2=$row2[0];


$Gcount1=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques1=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row3= $Gcount1->fetch_row();
$row3=$row3[0];

$scount1=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques1=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row4 = $scount1->fetch_row();
$row4=$row4[0];

$Ecount2=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques2=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row5= $Ecount2->fetch_row();
 $row5=$row5[0];


$Vcount2=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques2=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row6 = $Vcount2->fetch_row();
$row6=$row6[0];


$Gcount2=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques2=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row7= $Gcount2->fetch_row();
$row7=$row7[0];

$scount2=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques2=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row8 = $scount2->fetch_row();
$row8=$row8[0];


// 3rd


$Ecount3=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques3=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row9= $Ecount3->fetch_row();
 $row9=$row9[0];


$Vcount3=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques3=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row10 = $Vcount3->fetch_row();
$row10=$row10[0];


$Gcount3=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques3=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row11= $Gcount3->fetch_row();
$row11=$row11[0];

$scount3=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques3=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row12 = $scount3->fetch_row();
$row12=$row12[0];

//4th
$Ecount4=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques4=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row13= $Ecount4->fetch_row();
 $row13=$row13[0];


$Vcount4=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques4=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row14 = $Vcount4->fetch_row();
$row14=$row14[0];


$Gcount4=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques4=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row15= $Gcount4->fetch_row();
$row15=$row15[0];

$scount4=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques4=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row16 = $scount4->fetch_row();
$row16=$row16[0];
}

//5th
$Ecount5=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques5=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row17= $Ecount5->fetch_row();
 $row17=$row17[0];


$Vcount5=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques5=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row18 = $Vcount5->fetch_row();
$row18=$row18[0];


$Gcount5=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques5=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row19= $Gcount5->fetch_row();
$row19=$row19[0];

$scount5=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques5=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row20 = $scount5->fetch_row();
$row20=$row20[0];

//6th
$Ecount6=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques6=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row21= $Ecount6->fetch_row();
 $row21=$row21[0];


$Vcount6=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques6=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row22 = $Vcount6->fetch_row();
$row22=$row22[0];


$Gcount6=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques6=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row23= $Gcount6->fetch_row();
$row23=$row23[0];

$scount6=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques6=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row24 = $scount6->fetch_row();
$row24=$row24[0];

//7th
$Ecount7=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques7=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row25= $Ecount7->fetch_row();
 $row25=$row25[0];


$Vcount7=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques7=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row26 = $Vcount7->fetch_row();
$row26=$row26[0];


$Gcount7=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques7=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row27= $Gcount7->fetch_row();
$row27=$row27[0];

$scount7=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques7=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row28 = $scount7->fetch_row();
$row28=$row28[0];

//8th
$Ecount8=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques8=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row29= $Ecount8->fetch_row();
 $row29=$row29[0];


$Vcount8=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques8=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row30 = $Vcount8->fetch_row();
$row30=$row30[0];


$Gcount8=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques8=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row31= $Gcount8->fetch_row();
$row31=$row31[0];

$scount8=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques8=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row32 = $scount8->fetch_row();
$row32=$row32[0];

//9th
$Ecount9=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques9=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row33= $Ecount9->fetch_row();
 $row33=$row33[0];


$Vcount9=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques9=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row34 = $Vcount9->fetch_row();
$row34=$row34[0];


$Gcount9=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques9=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row35= $Gcount9->fetch_row();
$row35=$row35[0];

$scount9=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques9=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row36 = $scount9->fetch_row();
$row36=$row36[0];

//10th
$Ecount10=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques10=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row37= $Ecount10->fetch_row();
 $row37=$row37[0];


$Vcount10=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques10=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row38 = $Vcount10->fetch_row();
$row38=$row38[0];


$Gcount10=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques10=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row39= $Gcount10->fetch_row();
$row39=$row39[0];

$scount10=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques10=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row40= $scount10->fetch_row();
$row40=$row40[0];

//11th
$Ecount11=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques11=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row41= $Ecount11->fetch_row();
 $row41=$row41[0];


$Vcount11=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques11=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row42 = $Vcount11->fetch_row();
$row42=$row42[0];


$Gcount11=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques11=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row43= $Gcount11->fetch_row();
$row43=$row43[0];

$scount11=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques11=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row44= $scount11->fetch_row();
$row44=$row44[0];

//12th
$Ecount12=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques12=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row45= $Ecount12->fetch_row();
 $row45=$row45[0];


$Vcount12=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques12=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row46 = $Vcount12->fetch_row();
$row46=$row46[0];


$Gcount12=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques12=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row47= $Gcount12->fetch_row();
$row47=$row47[0];

$scount12=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques12=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row48= $scount12->fetch_row();
$row48=$row48[0];

//13th
$Ecount13=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques13=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row49= $Ecount13->fetch_row();
 $row49=$row49[0];


$Vcount13=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques13=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row50 = $Vcount13->fetch_row();
$row50=$row50[0];


$Gcount13=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques13=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row51= $Gcount13->fetch_row();
$row51=$row51[0];

$scount13=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques13=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row52= $scount13->fetch_row();
$row52=$row52[0];

//14th

$Ecount14=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques14=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row53= $Ecount14->fetch_row();
 $row53=$row53[0];


$Vcount14=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques14=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row54 = $Vcount14->fetch_row();
$row54=$row54[0];


$Gcount14=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques14=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row55= $Gcount14->fetch_row();
$row55=$row55[0];

$scount14=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques14=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row56= $scount14->fetch_row();
$row56=$row56[0];

//15th

$Ecount15=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques15=10 and term='".$_SESSION['term']."' and course='".$course."' ");
$row57= $Ecount15->fetch_row();
 $row57=$row57[0];


$Vcount15=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques15=8 and term='".$_SESSION['term']."' and course='".$course."'" );
$row58 = $Vcount15->fetch_row();
$row58=$row58[0];


$Gcount15=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques15=6 and term='".$_SESSION['term']."' and course='".$course."'");
$row59= $Gcount15->fetch_row();
$row59=$row59[0];

$scount15=mysqli_query($conn,"SELECT COUNT(ques1)FROM feedback WHERE ques15=5 and term='".$_SESSION['term']."' and course='".$course."'");
$row60= $scount15->fetch_row();
$row60=$row60[0];

?>

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

<tr class="tr">
<tr colspan="2" bgcolor="lightgrey"><td  style="text-align: left;"><?php echo "<b>Faculty Name:</b>" .$r1["staff_name"]; ?>
<td colspan="7" class="le"><?php echo "<b>Total  Number of Students Given  Feedback:</b>&nbsp&nbsp&nbsp&nbsp".$r["ic"]; ?></td></td></tr>
<td bgcolor="lightgrey" colspan="7">
<?php echo "&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp<b>subject:</b>&nbsp &nbsp&nbsp".$course." ";echo "&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<b>Department:</b> &nbsp".$_SESSION['dep']." ";echo "&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp<b>sem:</b>&nbsp".$_SESSION['term'];echo "<b>&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbspAcademic Year:</b>  &nbsp&nbsp".$acyr." ";?> </td>



</tr>
  <tr bgcolor="lightgrey">
    <th>Questions</th>
	<th>Excellent(10) Count</th>
	<th>VeryGood(8) Count</th>
	<th>Good(6) Count</th>
	<th>Satisfactory(5) Count</th>
    <th>Marks Secured for each Question</th>
    <th colspan="4">Maximum Marks each Question</th>
  </tr>

<tr bgcolor="lightgrey"><td style="font-weight:bold;">1. Punctual to the Class : </td><td><?php echo $row1; ?></td><td><?php echo $row2; ?></td><td><?php echo $row3; ?></td><td><?php echo $row4; ?></td><td style="font-weight:bold;"><?php echo  $r["q1"];?></td>
    <td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>

<tr><td style="font-weight:bold;">2. Completes the syllabus in time : </td><td><?php echo $row5; ?></td><td><?php echo $row6; ?></td><td><?php echo $row7; ?></td><td><?php echo $row8; ?></td><td style="font-weight:bold;"><?php echo $r["q2"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>></tr>
<tr><td style="font-weight:bold;">3. Conduction of assignments and class tests as per the schedule</td><td><?php echo $row9; ?></td><td><?php echo $row10; ?></td><td><?php echo $row11; ?></td><td><?php echo $row12; ?></td><td style="font-weight:bold;"><?php echo $r["q3"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">4. Explains the subject content with clarity</td><td><?php echo $row13; ?></td><td><?php echo $row14; ?></td><td><?php echo $row15; ?></td><td><?php echo $row16; ?></td><td style="font-weight:bold;"><?php echo $r["q4"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">5. Explanation with suitable applications of the topic</td><td><?php echo $row17; ?></td><td><?php echo $row18; ?></td><td><?php echo $row19; ?></td><td><?php echo $row20; ?></td><td style="font-weight:bold;"><?php echo $r["q5"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">6. Use of teaching aids(Blackboard/PPt's etc..) relevant to the content</td><td><?php echo $row21; ?></td><td><?php echo $row22; ?></td><td><?php echo $row23; ?></td><td><?php echo $row24; ?></td><td style="font-weight:bold;"><?php echo $r["q6"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">7. Gives references of additional source materials(Library) </td><td><?php echo $row25; ?></td><td><?php echo $row26; ?></td><td><?php echo $row27; ?></td><td><?php echo $row28; ?></td><td style="font-weight:bold;"><?php echo $r["q7"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">8. About Counselling of students</td><td><?php echo $row29; ?></td><td><?php echo $row30; ?></td><td><?php echo $row31; ?></td><td><?php echo $row32; ?></td><td style="font-weight:bold;"><?php echo $r["q8"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">9. Explaining the subjects by utilizing the lab machines/equipments </td><td><?php echo $row33; ?></td><td><?php echo $row34; ?></td><td><?php echo $row35; ?></td><td><?php echo $row36; ?></td><td style="font-weight:bold;"><?php echo $r["q9"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">10. Controlling classes effectively during the class hours </td><td><?php echo $row37; ?></td><td><?php echo $row38; ?></td><td><?php echo $row39; ?></td><td><?php echo $row40; ?></td><td style="font-weight:bold;"><?php echo $r["q10"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">11 Inviting opinion and question on subject matter from students </td><td><?php echo $row41; ?></td><td><?php echo $row42; ?></td><td><?php echo $row43; ?></td><td><?php echo $row44; ?></td><td style="font-weight:bold;"><?php echo $r["q11"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">12. Encouraging the students to make presentation on course related topics</td><td><?php echo $row45; ?></td><td><?php echo $row46; ?></td><td><?php echo $row47; ?></td><td><?php echo $row48; ?></td><td style="font-weight:bold;"><?php echo $r["q12"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">13. How does teacher deals irregular students </td><td><?php echo $row49; ?></td><td><?php echo $row50; ?></td><td><?php echo $row51; ?></td><td><?php echo $row52; ?></td><td style="font-weight:bold;"><?php echo $r["q13"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">14. Discuss the evaluated answer books of assignments with the students </td><td><?php echo $row53; ?></td><td><?php echo $row54; ?></td><td><?php echo $row55; ?></td><td><?php echo $row56; ?></td><td style="font-weight:bold;"><?php echo $r["q14"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">15. Explains the content by taking realtime examples </td><td><?php echo $row57; ?></td><td><?php echo $row58; ?></td><td><?php echo $row59; ?></td><td><?php echo $row60; ?></td><td style="font-weight:bold;"><?php echo $r["q15"];?></td><td colspan="4" style="font-weight:bold;"><?php echo $r["ic"]*10;?> </td></tr>
<tr><td style="font-weight:bold;">total marks secured </td><td></td><td></td><td></td><td></td> <td style="font-weight:bold;"><?php echo $r["total"];?></td><td  style="font-weight:bold;"><?php echo $r["ic"]*150;?> </td></tr>
<tr><td style="font-weight:bold;">Overall rating(%)</td><td colspan="7" colspan=2 style="font-weight:bold;"><?php echo $r["average"];?></td></tr>
<?php
}}
?>

  
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
   <!-- <th>Sno</th>-->
    <th >Name of the Faculty</th>
<th >Name of the Subject</th>
    <th>Score</th>
<th>Performance</th>
<th colspan="4">Number of Students</th>
  </tr>
<?php
$i=0;

$res1=mysqli_query($conn,"select staff_name from staff where course='".$r["course"]."' and term='".$_SESSION['term']."' and dept='".$_SESSION['dep']."'");
$r1 = mysqli_fetch_array($res1);
$tk=intval($r["total"]/5);
$ans="no";
if($r["total"]!=0){
$kkk=intval(($r["total"]/(100*$r["ic"]))*100);
if($r["average"] >90)
{
	$ans="excellent";
}
elseif($r["average"] >80 )
{
	$ans=" Very Good";
}
elseif($r["average"] > 70 )
{
	$ans=" Good";
}
elseif($r["average"] > 60 )
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
	<!--<td><center><?php echo $i; ?></center></td>-->
	
    <td style="text-align: left;"><?php echo $r1["staff_name"]; ?></td>
    <td style="text-align: left;"><?php echo $r["course"]; ?></td>
	
    <td><center><?php echo $r["average"]; ?></center></td>
    <td><center><?php echo $ans; ?></center></td>
	<td colspan="4"><center><?php echo $r["ic"]; ?></center></td>
	
</tr>

<?php {} ?>

<?php {} ?>

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

  
<?php {} ?>

<?php {} ?>

</table>

</center>
</div>
<br>
<!--
<table border=0 width="20%">
<tr >
<th><font color="maroon">Overall Rating</font></th>
</tr>

<tr>
<td ><b>91-100 &nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Excellent</td>

</tr>
<tr>
<td><b>81-90&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Very Good</td>

</tr>
<tr>
<td><b>71-80&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Good</td>

</tr>
<tr>
<td><b>61-70&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Satisfactory</td>

</tr>
<tr>
<td><b>Less than 60&nbsp--&nbsp&nbsp  <b>Poor</td>

</tr>
</table><br>-->
<h3>Overall Rating</h3>
<pre>
<h3><b>91-100 --> Excellent  81-90 --> VeryGood  71-80 --> Good   61-70--> Satisfactory</b>
</pre>
<b>Comments:- <textarea cols="125"> </textarea><br><br><br>




<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHoD</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 


  <b>Principal</b>

<br><br><center>
<input type="button" onClick="window.print();" value="PRINT">&nbsp;<input type="button" onClick="window.location='index.php'" value="BACK">
<br>
 <p accesskey="p" onclick="call()"></p>
  <a href="ad_logout.php" accesskey="a"></a>
  
  
</body>
</html>