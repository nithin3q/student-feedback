<?php 
include_once "connect.php";
 ?>
<html>
<body>
<form action="staf_log.php">
<h4>staff:<input type="text" name="staff_name" /></h4>
<h4>course:<input type="text" name="course" /></h4>
<h4>dept<select>
<?php
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
           $dd_res=mysqli_query($conn,"Select  courses from courses where dept like '".$_SESSION['dep']."' and term=".$_SESSION['term']."'");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }
      ?>
</select></h4>
</form>
</body>
</html>