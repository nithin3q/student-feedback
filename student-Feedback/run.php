<?php
function run()
{
	echo "hii";
}
?>
<html>
<head>
<script>
function run()
{
	for(var i=0;i<4;i++){
alert("<?php run(); ?>");
}}
</script>
</head>
<body>
<button onclick="run()">click</button>
<p id="sam">

</p>
</body>
</html>