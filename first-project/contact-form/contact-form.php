<?php include('header.php');?>


<?php
//call the connection file
include_once("connection.php");

if(isset($_POST['sb']))
{
//create the all input field from which help we will be send the data.
$fn			=	$_POST['fn'];
$email		=	$_POST['email'];
$mobile		=	$_POST['mobile'];
$address	=	$_POST['address'];
$course		=	$_POST['course'];
$query		=	$_POST['query'];

//mysqli query
$query = "insert into student(StudentName,StudentEmail,StudentMobile,StudentAddress,StudentCourse,StudentQuery) 
values('$fn','$email','$mobile','$address','$course','$query')";

//mysql query activate by php mysql methods

$result = mysqli_query($conn,$query);

if($result>0)
{
	echo "<script>alert('Send Your Query SUccessfully We will be Contact you Soon')</script>";
	
}

else
{
	mysqli_error($conn);
}




}



?>



<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2 align="Center"> Contact Us </h2>
<form method="post">
<div class="form-group">
<input type="Text" placeholder="Full Name" name="fn" class="form-control">
</div>
<div class="form-group">
<input type="Text" placeholder="Email" name="email" class="form-control">
</div>

<div class="form-group">
<input type="Text" placeholder="Mobile" name="mobile" class="form-control">
</div>

<div class="form-group">
<textarea rows="5" cols="35" placeholder="Address" name="address" class="form-control">
</textarea>
</div>

<div class="form-group">
<select name="course" class="form-control">
<option> Choose Course </option>
<option> Web Development </option>
<option> Graphic Designing </option>
<option> MIS </option>
<option> Tally </option>
</select>
</div>

<div class="form-group">
<textarea rows="5" cols="35" placeholder="Your Query" name="query" class="form-control">
</textarea>
</div>

<div class="form-group">
<button class="btn btn-primary" name="sb"> Send </button>
</div>
</form>

</div>
<div class="col-md-3"></div>

</div>


</div>




</body>