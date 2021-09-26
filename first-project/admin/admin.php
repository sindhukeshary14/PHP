<?php include('../header.php');?>


<?php
//call the connection file
include_once("../contact-form/connection.php");
error_reporting(0);
if(isset($_POST['sb']))
{
//create the all input field from which help we will be send the data.
$user			=	$_POST['user'];
$pass			=	$_POST['pass'];



//mysqli query
$query = "select * from Admin where UserName='$user' && Password='$pass'";

//mysql query activate by php mysql methods

$result = mysqli_query($conn,$query);

$details = mysqli_fetch_assoc($result);

if($details>0)
{
	header("location:welcome.php");
	
}

else
{
	$error="Check UserName or Password";
	mysqli_error($conn);
}




}



?>



<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2 align="Center"> Login </h2>
<form method="post">
<div class="form-group">
<input type="Text" placeholder="UserName" name="user" class="form-control">
</div>
<div class="form-group">
<input type="password" placeholder="Password" name="pass" class="form-control">
</div>



<div class="form-group">
<button class="btn btn-primary" name="sb"> Login </button>
<p><?php echo $error;?></p>
</div>
</form>


</div>
<div class="col-md-3"></div>

</div>


</div>




</body>