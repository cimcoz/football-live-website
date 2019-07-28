<?php

$live = $_GET['l'];
?>
<style type="text/css">
	 @import url('https://fonts.googleapis.com/css?family=Russo+One&display=swap');
  body{
    margin: 0;
    padding: 0;
    font-family: 'Russo One', sans-serif !important;
   
  }
</style>
<title>VIDEO</title>
<?php include('inc/header.php');?>
<link rel="shortcut icon" href="logo/wtf.ico" type="image/x-icon"/>
<?php include('boot.php');?>
<body>
<br>
<br>
<div class="videoWrapper">
	<div class="logo">
  <?php
  echo '
    <iframe width="560" height="349" src="'.$live.'" frameborder="0" allowfullscreen></iframe>';
    ?>
</div>
</div>
<style type="text/css">
	.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
body{
	background: #2c3e50;
}
 </style>

<?php include('inc/foot.php');?>