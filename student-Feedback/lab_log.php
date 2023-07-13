<?php
session_start();
include_once "connect.php";
?>
<html>
    <head>
<style>
.info a{
    background: #212121;
    padding: 10px 18px;
    text-decoration: none;
    color: #fff;
    display: inline-block;
    margin: 100px 300px;
    border-radius: 5px;
}
.infoo a{
    background: #212121;
    padding: 10px 18px;
    text-decoration: none;
    color: #fff;
    display: inline-block;
    margin: 0px 300px;
    border-radius: 5px;
}

</style>

    </head>
<body bgcolor="#0000aa">
    <center><div class="lds-hourglass" style="position: relative; top: 300px;"></div></center>
    <center><font size="+3" color="#fff"><p>Loading...</p></font></center>
    
<?php

   
      $rollno =$_POST['rollno'];
      $dept = $_POST['dep']; 
	  $key=$_POST['key'];	 

      $result = mysqli_query($conn,"SELECT stud_no FROM student WHERE rollno = '$rollno' and dept = '$dept' and term='".$_POST['term']."' and key_gen='".$key."'");
      $res=mysqli_query($conn,"SELECT * FROM lab_login WHERE logined = '$rollno'");
      $count = mysqli_num_rows($result);
      $co=mysqli_num_rows($res);

	        // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1 && $co<1) {
		  
	
         $_SESSION['dep']=$_POST['dep'];
$_SESSION['rollno']=$_POST['rollno'];
$_SESSION['term']=$_POST['term'];
$url="labfeedback.php";
function ll()
{
    
    echo "<script>location.href='labfeedback.php';</script>";
}
?>
<?php
ll();
?>
  <?php
      }elseif ($co == 1) {
        
        
         echo '<script>alert("you have already submitted")</script>';
          echo "<script>location.href='lab_login.php';</script>";
?>
 <?php
      }else {
        echo '<script>alert("you have entered wrong id")</script>';
         echo "<script>location.href='lab_login.php';</script>";
      }
   
?>

</body></html>