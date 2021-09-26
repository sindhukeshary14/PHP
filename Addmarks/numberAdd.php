<?php include('method.php');?>




<html>
<head>
<title> Elements </title>
</head>
<body>
<form  method="post">
<input type="text" placeholder="Enter hindi" name="hindi"> <br><br>
<input type="text" placeholder="Enter English" name="eng"><br><br>
<input type="text" placeholder="Enter Math" name="math"><br><br>
<input type="text" placeholder="total" value="<?php echo $total;?>"><br><br>
<input type="text" placeholder="Per" value="<?php echo $per;?>"><br><br>
<input type="text" placeholder="Grade" value="<?php echo $grade;?>"><br><br>
<input type="submit" value="GetData" name="sb">
</form>


</body></html>