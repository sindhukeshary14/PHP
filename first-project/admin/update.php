<?php include('header.php');?>


<?php
//call the connection file
include_once("connection.php");


//create the all input field from which help we will be send the data.
$id			=	$_POST['id'];
$fn			=	$_POST['fn'];
$email		=	$_POST['email'];
$mobile		=	$_POST['mobile'];
$address	=	$_POST['address'];
$course		=	$_POST['course'];
$query		=	$_POST['query'];

//mysqli query
$query = "update student set StudentName='$fn',StudentEmail='$email',StudentMobile='$mobile',StudentAddress='$address',StudentCourse='$course' where Id='$id'";

//mysql query activate by php mysql methods

$result = mysqli_query($conn,$query);

if($result>0)
{
	echo "<script>alert('Data Updated')
	window.location.href='fetch.php';
	</script>";
	
}

else
{
	mysqli_error($conn);
}








?>



