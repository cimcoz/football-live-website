<?php include('inc/config.php');?>


<?php 
$sta = "1";
$sql = "SELECT * FROM cnot WHERE sta = '$sta'";
$res = mysqli_query($con,$sql);
$s = mysqli_num_rows($res);
echo $s;





?>




