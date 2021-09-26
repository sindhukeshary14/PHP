<?php include('header.php');?>


<?php
//call the connection file
include_once("connection.php");


//create the all input field from which help we will be send the data.
$id			=	$_GET['dels'];


//mysqli query
$query = "delete from student where Id='$id'";

//mysql query activate by php mysql methods

$result = mysqli_query($conn,$query);

if($result>0)
{
	echo "<script>
	if(confirm('Are You Sure'))
	{
	alert('Data Deleted');
	window.location.href='fetch.php';
	}
	else
	{
		window.location.href='fetch.php';	
	}
	</script>";
	
}

else
{
	mysqli_error($conn);
}








?>



