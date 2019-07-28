<?php
include('inc/config.php');
include('inc/header.php');
include('boot.php');
?>
<link rel="shortcut icon" href="logo/wtf.ico" type="image/x-icon"/>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144704899-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144704899-1');
</script>

<TITLE>HOME</TITLE>
</head>
<link rel="stylesheet" type="text/css" href="css/so.css">
<?php
$th = "<img src='https://imageproxy.themaven.net/http%3A%2F%2Fwww.espn.com%2Fi%2Fteamlogos%2Fsoccer%2F500%2Fdefault-team-logo-500.png'alt='' class='logo'>";
$ta = "<img src='https://imageproxy.themaven.net/http%3A%2F%2Fwww.espn.com%2Fi%2Fteamlogos%2Fsoccer%2F500%2Fdefault-team-logo-500.png'alt='' class='logo'>";

$sql ="SELECT * FROM data ORDER BY id DESC ";
$t = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($t))
{
$liv = $row['id'];
$t1 = $row['t1'];
$t1h = substr($t1,0,3);
$dp ="SELECT * FROM logo WHERE name = '$t1' ORDER BY id DESC  ";
$td = mysqli_query($con, $dp);
while ($rowd = mysqli_fetch_assoc($td))
{
if (!empty($rowd['logo'])) 
{

$th = "<img src='data:image/jpeg;base64,".base64_encode($rowd['logo'])."' alt='' class='logo'>";
  }
else
  {
    $th = "<img src='https://imageproxy.themaven.net/http%3A%2F%2Fwww.espn.com%2Fi%2Fteamlogos%2Fsoccer%2F500%2Fdefault-team-logo-500.png'alt='' class='logo'>"; 
  }
}
$t2 = $row ['t2'];
$t2a =substr($t2,0,3);
$dpp ="SELECT * FROM logo WHERE name = '$t2' ORDER BY id DESC ";
$tdd = mysqli_query($con, $dpp);
while ($rowd = mysqli_fetch_assoc($tdd))
{
if (!empty($rowd['logo'])) {

$ta = "<img src='data:image/jpeg;base64,".base64_encode($rowd['logo'])."'alt='' class='logo'>";
  }
  else
  {
    $ta = "<img src='https://imageproxy.themaven.net/http%3A%2F%2Fwww.espn.com%2Fi%2Fteamlogos%2Fsoccer%2F500%2Fdefault-team-logo-500.png'alt='' class='logo'>"; 
  }
}

echo '<div class="container">

  <div class="app">
    <div class="header">
      <span class="team team-left">
       '.$th.'
        <span class="name">    '.$t1h.'</span>
      </span>
       <span class="stats"><i>VS</i></span>
      <span class="team team-right">
        '.$ta.'
        <span class="name">    '.$t2a.'</span>
      </span>
    </div>
    <div class="body">
     
        <span class="sec"></span>
      
    <span class="time">
     <center> <a href="live.php?live='.$liv.'" class = "live">  WATCH LIVE </a> </center>
</span>
    <span class="time-bar">
     
    </span>
    </div>
    </div>
  </div>
'
;






?>


<?php
}
?>
