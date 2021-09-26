<?php
error_reporting(0);
if(isset($_POST['sb']))
{
	
	$sub1= $_POST['hindi'];
	$sub2= $_POST['eng'];
	$sub3= $_POST['math'];
	
	$total=$sub1+$sub2+$sub3;
	$per=$total/3;
	
	if($per>=70)
	{
		$grade="A Grade";
	}
	
	else if($per>=55)
	{
		$grade="B Grade";
	}
	
	else if($per>=35)
	{
		$grade="C Grade";
	}
	else
	{
		$grade="Fail";
	}
}

//echo $total." ".$per." ".$grade;

?>

