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
<body>
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
course
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
   <input type="submit" name="submit" value="Submit" onclick="run()"><br>
   <input type="text" name="co" id="co" style="display: none;" />
</form>
<div id="pri">
    <center>
<table border="1" cellpadding="10" cellspacing="0" width="75%">
  <tr>
<td colspan="6">
 <!--<img src="sam1.png" alt="not supported" class="img1"/>
<img src="sam2.png" alt="not supported" class="img2"/>-->
 <br />&nbsp;<center><font size="+2.2"><b><font size="+3" COLOR="MAGENTA">SRINIVASA INSTITUTE OF ENGINEERING AND TECHNOLOGY </font>  <br />                                         

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
	$result = mysqli_query($conn,"SELECT ic from coursse_mark where course='$course' and dept='".$dep."'");
	$res=mysqli_query($conn,"select staff_name from staff where course='".$course."' and term='".$_SESSION['term']."' and dept='".$dep."'");
	$r = mysqli_fetch_array($result);
	$r1 = mysqli_fetch_array($res);
	//$a=$r["a"];
	//$b=$r["b"];
	//$c=$r["c"];
	//$d=$r["d"];
	//$e=$r["e"];
	//$f=$r["f"];
$ic=$r["ic"];
$staf=$r1["staff_name"];
?>
<tr class="tr">
<td colspan="4"><?php echo "<b>Course:</b> ".$course." ";echo "<b>Department:</b> ".$_SESSION['dep']." <b>Staff:</b>".$staf." <b>term:</b>".$_SESSION['term'];  ?></td>
<td class="le"><?php echo "<b>Count:</b>".$r["ic"]; ?></td>
<td style="text-align: left;"><?php echo $r1["staff_name"]; ?></td>
 </tr>
  <tr>
    <th>Sno</th>
    <th>Questions</th>
    <th>Mark secured</th>
    <th>Max mark</th>
<th>Percentage</th>
  </tr>
<tr>
	<td><center>1 </center></td>
    <td>Time Sense</td>
	<?php
	
	if($a==0)
	{
		$t11="0";
		$t12="0";
	}
	else{
	$t11=intval($a/$ic);
$t12=intval(($t11/12)*100);	
	}
	?>
    <td><center><?php echo $t11; ?></center></td>
    <td><center>12</center></td>
    <td><center><?php echo $t12; ?></center></td>
</tr>
<td><center>2</center></td>
<td>Teaching Methodology</td>
<?php
	
	if($b==0)
	{
		$t21="0";
		$t22="0";
	}
	else{
	$t21=intval($b/$ic);
$t22=intval(($t21/44)*100);	
	}
	?>
<td><center><?php echo $t21; ?></center></td>
<td><center>44</center></td>
<td><center><?php echo $t22; ?></center></td>
</tr>
<tr>
<td><center>3</center></td>
<td>Evaluation</td>
<?php
	
	if($c==0)
	{
		$t31="0";
		$t32="0";
	}
	else{
	$t31=intval($c/$ic);
$t32=intval(($t31/8)*100);	
	}
	?>
<td><center><?php echo $t31; ?></center></td>
<td><center>8</center></td>
<td><center><?php echo $t32; ?></center></td>
</tr>
<tr>
<td><center>4</center></td>
<td>Helping Attitude</td>
<?php
	
	if($d==0)
	{
		$t41="0";
		$t42="0";
	}
	else{
	$t41=intval($d/$ic);
$t42=intval(($t41/12)*100);	
	}
	?>
<td><center><?php echo $t41; ?></center></td>
<td><center>12</center></td>
<td><center><?php echo $t42; ?></center></td>
</tr>
<tr>
<td><center>5</center></td>
<td>Utilization of Lab Facility</td>
<?php
	
	if($e==0)
	{
		$t51="0";
		$t52="0";
	}
	else{
	$t51=intval($e/$ic);
$t52=intval(($t51/8)*100);	
	}
	?>
<td><center><?php echo $t51; ?></center></td>
<td><center>8</center></td>
<td><center><?php echo $t52; ?></center></td>
</tr>
<tr>
<td><center>6</center></td>
<td>Class Room Control</td>
<?php
	
	if($f==0)
	{
		$t61="0";
		$t62="0";
	}
	else{
	$t61=intval($f/$ic);
$t62=intval(($t61/16)*100);	
	}
	?>
<td><center><?php echo $t61; ?></center></td>
<td><center>16</center></td>
<td><center><?php echo $t62; ?></center></td>
</tr>
<tr>
<td colspan="2"><center>Total Marks</center></td>
<?php
	
	if($ic==0)
	{
		$tot="0";
		$per="";
	}
	else{
$tot=intval($a/$ic)+($b/$ic)+($c/$ic)+($d/$ic)+($e/$ic)+($f/$ic);
$per=intval(($a/$ic)+($b/$ic)+($c/$ic)+($d/$ic)+($e/$ic)+($f/$ic));	}
	?>
<td><center><b><font size="+1"><?php echo intval($tot); ?></font></b></center></td>
<td><center><b><font size="+1">100</font></b></center></td>
<td><center><b><font size="+1"><?php echo intval($per); ?></font></b></center></td>
</tr>
<?php
}}
?>
</table>


<table border="1" cellspacing="0" width="75%">
  
<?php

$sq="SELECT * from coursse_mark where term='".$_SESSION["term"]."' and dept='".$_SESSION["dep"]."'";
$res1ult = mysqli_query($conn,$sq);
$ress = mysqli_query($conn,"SELECT * from coursse_mark where term='".$_SESSION["term"]."' and dept='".$_SESSION["dep"]."E'");
$res1=mysqli_query($conn,"select staff_name from staff where course='".$_POST['course']."'");
?>
<tr class="tr">
<td class="le"><?php echo "<b>Count:</b>".$r["ic"]; ?></td>
</tr>

  <tr>
    <th>Sno</th>
    <th>Name of the Faculty</th>
<th>Name of the Subject</th>
    <th>Score</th>
<th>Grade</th>
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
if(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==1)
{
	$ans="average";
}
elseif(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==2){
	$ans="good";
}
elseif(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==3){
	$ans="very good";
}
elseif(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==4){
	$ans="excelent";
}
else
{
	$ans="null";
}}else
{
	$ans="null";
$kkk="0";
}
?>
<tr>
	<td><center><?php echo $i; ?></center></td>
    <td style="text-align: left;"><?php echo $r1["staff_name"]; ?></td>
    <td style="text-align: left;"><?php echo $r["course"]; ?></td>
	
    <td><center><?php echo $kkk; ?></center></td>
    <td><center><?php echo $ans; ?></center></td>
</tr>

<?php } ?>
<?php
$i=0;
while($r = mysqli_fetch_array($ress)){
	
	
	$i++;
$res1=mysqli_query($conn,"select staff_name from staff where course='".$r["course"]."' and term='".$_SESSION['term']."' and dept='".$_SESSION['dep']."E'");
$r1 = mysqli_fetch_array($res1);
$tk=intval($r["total"]/5);
$ans="no";
if($r["total"]!=0){
$kkk=intval(($r["total"]/(100*$r["ic"]))*100);
if(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==1)
{
	$ans="average";
}
elseif(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==2){
	$ans="good";
}
elseif(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==3){
	$ans="very good";
}
elseif(intval(intval(($r["total"]/(100*$r["ic"]))*100)/25) ==4){
	$ans="excellent";
}
else
{
	$ans="null";
}}else
{
	$ans="null";
$kkk="0";
}
?>
<tr>
	<td><center><?php echo $i; ?></center></td>
    <td style="text-align: left;"><?php echo $r1["staff_name"]; ?></td>
    <td style="text-align: left;"><?php echo $r["course"]; ?></td>
	
    <td><center><?php echo $kkk; ?></center></td>
    <td><center><?php echo $ans; ?></center></td>
</tr>

<?php } ?>
</table>
</center>
</div>
 <p accesskey="p" onclick="call()"></p>
  <a href="ad_logout.php" accesskey="a"></a>
</body>
</html>