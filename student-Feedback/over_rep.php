
<html>
<head>

 <script>
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

 </script>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <p>
course
<select name="dep" id="dep" >
<?php
include_once "connect.php";

// Check connection
if (!$conn) {
    die("Connection failed: " .mysql_error());
}
           $dd_res=mysqli_query($conn,"Select  dept from courses ");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }
      ?>
</select>
</p>
   <input type="submit" name="submit" value="Submit" onclick="run()"><br>
</form>

 <p accesskey="p" onclick="call()"></p>
  <a href="ad_logout.php" accesskey="a"></a>
</body>
</html>