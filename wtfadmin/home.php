<?php 
session_start();
include('inc/config.php');
if(!$_SESSION['username']){
   header("location: index.php");
   exit;
}
?>
      <link rel="stylesheet" type="text/css" href="../font-awesome/css/all.css">          

<?php
 include ('inc/config.php');

$sample =isset( $_POST['sub']) ? $_POST['sub'] : null;
if ($sample == true) 
{
 $t1 = isset($_POST['t1']) ? $_POST['t1']  : null ;
 $t2 = isset($_POST['t2'] ) ? $_POST['t2']  : null;
 $l1 = isset($_POST['lin']) ? $_POST['lin'] : null ;
 $l2 = isset($_POST['lin1']) ? $_POST['lin1'] : null ;
 $l3 =isset( $_POST['lin2']) ? $_POST['lin2'] : null ;


	$query = "INSERT INTO data (t1 , t2,  s1, s2, s3) VALUES
	('" . $t1 . "', '" .$t2 . "', '" . $l1. "', '" . $l2. "' ,'" . $l3 . "')";
	$result = mysqli_query($con ,$query);
	if(!empty($result)) {
		$error_message = "";
		$success_message = "<script>alert('New Record Added!'); location.href='home.php';</script>";	
		unset($_POST);
	} else {
		$error_message = "<script>alert('New Record Added!'); location.href='home.php';</script>";
	}

    $sample=false;
}
?>





<?php include('inc/boot.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL-HOME</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">

</head>
<?PHP INCLUDE('inc/header.php');?>
<body>

<div class="container">
  <form action=""  method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">HOME TEAM</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="t1" placeholder="HOME TEAM" required="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">AWAY TEAM</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="t2" placeholder="AWAY TEAM" required="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">STREAM LINK 1</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lin" placeholder="STREAM" required="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">STREAM LINK 2</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lin1" placeholder="STREAM 2" required="">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">STREAM LINK 3</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lin2" placeholder="STREAM 3" required="">
      </div>
    </div>
   
    <div class="row">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
</div>
<div class="ou">
	<?php if(!empty($success_message)) { ?>	
		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
		<?php } ?>
		<?php if(!empty($error_message)) { ?>	
		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
		<?php } ?>
</div>
</body>

</html>
<style type="text/css">
	* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 20px;
  border-top: 11px solid #034693;
  +border-bottom: 11px solid #e89e01;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

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