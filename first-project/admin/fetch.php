<?php include('admin_header.php');?>


<?php
//call the connection file
//include_once("connection.php");

//mysql select query
$data = "select * from student";

//php mysql query method
$fetch = mysqli_query($conn,$data);


?>

<div class="right">
<div class="cont">

<div class="container">
<div class="row">
<div class="col-md-12">
<table class="table">
<tr>
<th> Id</th>
<th> Name</th>
<th> Email</th>
<th> Mobile</th>
<th> Address</th>
<th> Course</th>
<th> Query</th>
<th> Edit</th>
<th> Delete</th>
</tr>

<?php 
while($rows=mysqli_fetch_assoc($fetch))
{
?>
<tr>
<td> <?php echo $rows['Id'];?> </td>
<td> <?php echo $rows['StudentName'];?> </td>
<td> <?php echo $rows['StudentEmail'];?> </td>
<td> <?php echo $rows['StudentMobile'];?> </td>
<td> <?php echo $rows['StudentCourse'];?> </td>
<td> <?php echo $rows['StudentAddress'];?> </td>
<td> <?php echo $rows['StudentQuery'];?> </td>
<td> <?php echo "<a href='edit.php?eid=".$rows['Id']."'> Edit </a>"?> </td>
<td> <?php echo "<a href='delete.php?dels=".$rows['Id']."'> Delete </a>"?> </td>


</tr>

<?php }?>

</table>
</div>

</div>



</div>


</div>
</div>
</div>




</body>