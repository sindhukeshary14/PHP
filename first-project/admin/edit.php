<?php include('admin_header.php');?>


<?php
//call the connection file


//mysql select query
$id = $_GET['eid'];
$data = "select * from student where Id='$id'";

//php mysql query method
$fetch = mysqli_query($conn,$data);
$rows=mysqli_fetch_assoc($fetch);

?>

<div class="right">
<div class="cont">

<div class="container">
<div class="row">
<div class="col-md-12">
<form action="update.php" method="post">
<table class="table">
<tr>
<th> Id</th>
<td> <input type="Text" value="<?php echo $rows['Id'];?>" name="id"> </td>
</tr>
<tr>
<th> Name</th>
<td> <input type="Text" value="<?php echo $rows['StudentName'];?>" class="form-control" name="fn"> </td>
</tr>
<tr>
<th> Email</th>
<td> <input type="Text" value="<?php echo $rows['StudentEmail'];?>" class="form-control" name="email"> </td>
</tr>
<tr>
<th> Mobile</th>
<td> <input type="Text" value="<?php echo $rows['StudentMobile'];?>" class="form-control" name="mobile"> </td>
</tr>
<tr>
<th> Address</th>
<td> <input type="Text" value="<?php echo $rows['StudentAddress'];?>" class="form-control" name="address"> </td>
</tr>
<tr>
<th> Course</th>
<td> <select class="form-control" name="course">
<option value="<?php echo $rows['StudentCourse'];?>" class="form-control"><?php echo $rows['StudentCourse'];?>
<option>Web Development </option>
<option> Graphic Designing </option>
<option> MIS </option>
<option> Tally </option>


</option> </td>
</tr>
<tr>
<th> Query</th>
<td> <input type="Text" value="<?php echo $rows['StudentQuery'];?>" class="form-control"> </td>
</tr>

<tr>
<td colspan=2> <button class="btn btn-primary"> Update </button></td>
</tr>





</table>

</form>
</div>

</div>



</div>


</div>
</div>
</div>




</body>