<?php 
session_start();
include('inc/config.php');
if(!$_SESSION['username']){
   header("location: index.php");
   exit;
}
?>
<?php
$id = $_GET['id'];
include('config.php');
$sql = "DELETE FROM `data` WHERE id = '$id'";
mysqli_query($con, $sql);
header("location: ../edit.php");
?>
