<?php

    session_start();
    include ('inc/config.php');   
    if (isset($_GET['live']))
    {
        $c = $_GET['live'];
    }
    else
    {
        header("Location: index.php");
        exit();
    }
?> 

<link rel="shortcut icon" href="logo/wtf.ico" type="image/x-icon"/>
<heda>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144704899-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144704899-1');
</script>

<TITLE>SERVER</TITLE>
</heda>
<style type="text/css">
    /* the functional important stuff */
.container {
  display:table;
}
.div1 {
  display:table-footer-group;  
}
.div2 {
  display:table-row-group;
}
.div3 {
  display:table-header-group;
}

/* presentation below */
body {
    background : #2c3e50;
  font-size:20px;
}

.container {
  width:90%;
  margin:100px auto;
  max-width:500px;
  border:10px solid #000;
  text-align:center;
}

.container div span {
  padding:20px;
  display:block;
  border:5px solid #000;
  background:#222;
}
.s1{
    color: white;
    font-family: 'Russo One', sans-serif;

    font-size: 15px;
}
.s2{
    color: white;
    font-family: 'Russo One', sans-serif;

    font-size: 15px;
}
.s3{
    color: white;
    font-size: 15px;
    font-family: 'Russo One', sans-serif;
}


</style>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Live Scores</title>
</head>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/wtf.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<?php include('inc/header.php');?>
<br>
<br>
<br>
<style type="text/css">

  @import url('https://fonts.googleapis.com/css?family=Russo+One&display=swap');
   body{
    margin: 0;
    padding: 0;
    font-family: 'Russo One', sans-serif !important;
    
    background : #2c3e50;
  }
  

</style>
<?php

$s = $_GET['live'];
$sql = "select * from data where id='".$s."'";
$stmt = mysqli_stmt_init($con);    

if (!mysqli_stmt_prepare($stmt, $sql))
{
    die('SQL error');
}
else
{
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result))
{
    echo '
                                                   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">';?>
                                             
                                            
                                               <!-- <small class="card-text "> '.ucwords($row['t1']).' </small> vs <small class="card-text mb-auto"> '.ucwords($row['t2']).' </small>-->
                                              <div class="container">
  <div class="div1"><span><?php echo '
                                                 <a href="video.php?l='.$row['s1'].'"';?>><li class=" s1 fa fa-tv fa-2"> STREAM 1</li></a></span></div>
<br><br><?php echo '
                                               <div class="div2">   <span><a href="video.php?l='.$row['s2'].'"';?>> <li class=" s2 fa fa-tv fa-2"> STREAM 2</li></a> </span></div>
<br><br><?php echo '
                                                  <div class="div3"><span><a href="video.php?l='.$row['s3'].'"';?>> <li class="s3 fa fa-tv fa-2"> STREAM 3</li></a></span></div></div>
</div>





</div>


                                                
<?php
}
}

?>
<?php
include('inc/foot.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>