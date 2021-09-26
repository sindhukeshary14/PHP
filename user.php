<?php
error_reporting(0);
if(isset($_REQUEST['sb']))
{
	
	$user=$_REQUEST['user'];//js(document.getElementById())
	
	
	
}



?>




<html>
<head>
<title> Elements </title>
</head>
<body>
<form method="post">
<input type="text" placeholder="Enter Name" name="user">
<input type="submit" value="GetData" name="sb">
</form>

<p> <?php echo $user;?> </p>


</body></html>