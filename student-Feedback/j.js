	function a()
	{
	 	alert('hello');
	
	}
	function ch()
	{
	    alert('hi');
	}
	function lo()
	{
	     location.href="logout.php";
	    if(document.getElementById("course").length==0){
	    <?php
$conn = mysqli_connect("localhost","root","","theory_database");
$sq="insert into login_user values ('".$_SESSION['rollno']."')";
mysqli_query($conn,$sq);
?>
	       
	    }
	}