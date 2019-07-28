<?php include('inc/header.php');?>
<?php include('../boot.php');?>
<?php include('inc/config.php');?>
<?php 
session_start();
include('inc/config.php');
if(!$_SESSION['username']){
   header("location: index.php");
   exit;
}
?>
<center>
<h1>DELETE MATCHES</h1>
</center>
<?php
$sql ="SELECT * FROM data";
$t = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($t))
{?>

<?php


                                             echo "
 <div class='card gedf-card' style='padding-top: 1%; padding-bottom: 1%;'>
                        <div class='card-header'>
                        <div class='d-flex justify-content-between align-items-center'>
            
                                <div class='d-flex justify-content-between align-items-center'>
                                <div class='mr-2'>
                                <span title='<div class=\"text-center postbi\" >  </div>' data-toggle='popover' data-trigger='hover' data-content='' data-placement='left' data-html='true'></span>
                                </div>
                                <div class='ml-2 postbi'>
                                     <div class='h5 m-0'>".$row['t1']."  vs ".$row['t2']."</div></a>
                        <a href=''> 
                            
                                </div>
                                </div>
                       </a> 
                        <div>

   <a href ='inc/delete.php?id=".$row['id']." ' id = 'sa'  ><li class='q fa fa-trash fa-2x'> </li></a>

                        </div>
                        </div>

                        </div>

                       
                        <div class='card-footer'> </div> </div>";




                                                   

?>





<style type="text/css">
	.q{
		color: red;
	}
</style>




<?php
}
?>
<script type="text/javascript">
  function loadDoc(){
    setInterval(function(){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("not").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "not.php", true);
  xhttp.send();
  },1000);
  }
  loadDoc();
</script>