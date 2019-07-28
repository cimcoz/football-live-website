<?php 
session_start();
include('inc/config.php');
if(!$_SESSION['username']){
   header("location: index.php");
   exit;
}
?>
<?php include('inc/header.php');?>
<?php include ('inc/boot.php');?>
<center>
 <div class="col-md-6 gedf-main">
<div class="card-body">
                  <div class="tab-content" id="myTabContent">
      <link rel="stylesheet" type="text/css" href="../font-awesome/css/all.css">         
    <!--- \\\\\\\Post--> 
	<div class="col-md-12">
<!--<form method="POST" enctype="multipart/form-data"  action="inc/gpc.php">-->
        		<div class="comment-wrap">

<form method="POST" enctype="multipart/form-data"  action="m.php">
        		<div class="comment-wrap">
                       
             
                    <div class="comment-block" style="box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.8); border-radius: 6px;">
                    	<div class="form-group">
                    		<input type="text" class="form-control emoji" name="name" placeholder="TEAM NAME" required="">
                    	</div>

                    	<div class="custom-file">
                            <input type="hidden" name="size" value="1000000">
                    		<input type="file" class="custom-file-input" id="validatedCustomFile" name="file">
                    		<label class="custom-file-label" for="validatedCustomFile">TEAM LOGO</label>
                    	</div>
                    	<div class="text-right" style="padding-top: 1%;"> <button type="submit" name="submit" class="btn btn-success btn-lg">ADD <i class="fas fa-check"></i></button> </div>

                    </div>

                </div>
            </form> </div></form>
      <?php include('inc/foot.php');?>
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