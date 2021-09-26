<?php
error_reporting(0);
if(isset($_POST['sb']))
{
	
	$user="Ms. Sindhuja keshary";
	$email="sindhuja@gmail.com";
	$mobile="9632587412";
	
}



?>




<html>
<head>
<title> Elements </title>
</head>
<body>
<form method="post">
<input type="submit" value="GetData" name="sb">


</form>

<p> <?php echo $user;?> </p>
<p> <?php echo $email;?> </p>
<p> <?php echo $mobile;?> </p>

</body></html>