
<html>
<head>
    <style>
        div.log
{
	background-color: rgba(0,0,0,0.7);
position: relative;
border: 0px;
border-radius: 15px;
height: 400px;
width: 800px;
top: 100px;
}
p
{
    color: #fff;
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

#back
{
    position: relative;
    left: 140px;
}
    </style>
</head>
<body>
     <div class="backBtn" style="  position: relative;top: 30px;left: 160px;">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="ad_main.php">Back to Admin</a></span>
      <span class="line bLine"></span>
	</div>
    <p><a href="ad_logout.php"><img src="home_logo.png" alt="home" height="100" width="100" style="position: static;" /></a></p>
    <center>
<div class="log" align="middle">
    <br />
     
            <form method="post" action="stud_ins.php" enctype="multipart/form-data">

                <p>Import Student Data:
                   <input type="file" name="excelfile" id="excelfile">
             

                
                <input type="submit" value="submit"/>
                </p>
<br />
            </form>
			    <form method="post" action="staf_ins.php" enctype="multipart/form-data">

                <p>Import Faculty Data:
                   <input type="file" name="excelfile" id="excelfile">
             

                
                <input type="submit" value="submit"/>
                </p>

            </form>
	<br />
			    <form method="post" action="cou_ins.php" enctype="multipart/form-data">

                <p>Import Course Data:
                   <input type="file" name="excelfile" id="excelfile">
             

                
                <input type="submit" value="submit"/>
                </p>

            </form>
          <br />
            <form method="post" action="dep_ins.php" enctype="multipart/form-data">

                <p>Import Department Data:
                   <input type="file" name="excelfile" id="excelfile">
             

                
                <input type="submit" value="submit"/>
                </p>

            </form><br />
            <form method="post" action="e_ins.php" enctype="multipart/form-data">

                <p>Import Elective Student Data:
                   <input type="file" name="excelfile" id="excelfile">
             

                
                <input type="submit" value="submit"/>
                </p>
            </form>
            </div></center>
<a accesskey="a" href="ad_logout.php"></a>
</body>
</html>