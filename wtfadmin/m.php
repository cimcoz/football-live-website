<?php 
session_start();
include('inc/config.php');
if(!$_SESSION['username']){
   header("location: index.php");
   exit;
}
?>
<?php include('inc/config.php');?>

<?php
if (isset($_POST['submit'])) {
	$image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	$name = $_POST['name'];
	$e = "INSERT `logo` (name, logo) VALUES ('$name','$image')";
	
	$s1 = mysqli_query($con, $e);
	header("location: logou.php");
}
?>