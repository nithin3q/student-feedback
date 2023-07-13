<?php
  session_start();
  include_once "connect.php";
?>
<html><head>
<style>
.container{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.container div{
	background: whitesmoke;
	height: 30px;
	width: 30px;
	border-radius: 50%;
	float: left;
	top: 40px;
	position: relative;
	margin-left: 10px;
}

.container div:nth-child(1),.container div:nth-child(3),.container div:nth-child(5){
	animation: animateone 1s linear infinite;
	top: 40px;
}

.container div:nth-child(2),.container div:nth-child(4){
	animation: animatetwo 1s linear infinite;
	top: -40px;
}

@keyframes animateone{
	0%{
		top:40px;
		transform:scale(1);
	}
	50%{
		top:-40px;
		transform:scale(0.5);
	}
}

@keyframes animatetwo{
	0%,100%{
		top:-40px;
		transform:scale(0.5);
	}
	50%{
		top:40px;
		transform:scale(1);
	}
}

</style>
</head>
<body bgcolor="#1ad057">
   <div class="container">
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
</div>
<?php
      $term =$_POST['term'];
      $dept = $_POST['dep']; 
      $result = mysqli_query($conn,"SELECT id FROM staff WHERE term = '$term' and dept = '$dept'");

      $count = mysqli_num_rows($result);

	        // If result matched $myusername and $mypassword, table row must be 1 row
		
    
		  
         $_SESSION['dep']=$_POST['dep'];
$_SESSION['term']=$_POST['term'];

         echo "<script>location.href='sem.php';</script>";
     
   
?>
<p><a href="login.php">click here to go login page</a></p>
</body></html>