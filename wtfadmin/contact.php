<?php 
session_start();
include('inc/config.php');
if(!$_SESSION['username']){
   header("location: index.php");
   exit;
}
?>
<?php
$sta = "0";
$sql = "UPDATE `cnot` SET `sta`= '$sta' ";
mysqli_query($con, $sql);
?>
<?php
include('inc/header.php');
?>
<?php
include('inc/boot.php');
?>
<?php
$sql ="SELECT * FROM cnot ORDER BY id DESC";
$t = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($t))
{?>


<?php
$name = $row['name'];
$email = $row['email'];
$sub = $row['sub'];
$text =$row['text'];
?>

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
                                        <a href=''>     <div class='h5 m-0'>FROM: ".$name."</div></a>
                        <a href=''> 
                                <div class='h7 text-muted'>EMAIL: ".$email."</div>
                                </div>
                                </div>
                       </a> 
                        <div>

     

                        </div>
                        </div>

                        </div>

                        <div class='card-body'>
                        <div class='time text-muted h10s mb-2'> <i class='fa'>SUBJECT: $sub</i></div>
                        <p class='card-text postbi'>
                        ".$text."
                    
                        </p>
                        </div>
                        <div class='card-footer'> ";?>
</div></div>











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