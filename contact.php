<?php include('inc/header.php');?>
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

<TITLE>CONTATCT US</TITLE>
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Russo+One&display=swap');
	

*{
  margin: 0;
  padding: 0;
}

body{
    margin: 0;
    padding: 0;
    font-family: 'Russo One', sans-serif !important;
    background: #2c3e50;
  }


.container{
  max-width: 800px;
  height: 600px;
  background: #fff;
  margin: 50px auto;
  box-shadow: 0 0 20px rgba(72,98,85, 0.6);
  box-sizing: border-box;
  padding: 40px;
  border-radius: 40px;
   border-left: 11px solid #034693;
    border-right: 11px solid #e89e01;
}

p{
  text-align: center;
  letter-spacing: 1px;  
  font-size: 45px;
  margin-bottom: 20px;
  color: #486255;
}

.input,
.msg .area{
  width: 100%;
  padding: 5px;
  box-sizing: border-box;
  margin-bottom: 25px;
  border: 2px solid #e9eaea;
  font-size: 10px;
  border-radius: 5px;
  outline: none;
  transform: all 0.5s ease;
}

.login .input{
  width: 48%;
  float: left;
  margin-right: 4%;
}

.login .input:last-child{
  margin-right: 0;
}

.msg .area{
  height: 200px;
}

.btn{
  width: 250px;
  background: #486255;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 5px;
  margin: 0 auto;
  color: #fff;
  text-transform: uppercase;
  cursor: pointer;
}

.input:focus,
.msg .area:focus{
  border: 2px solid #486255;
}

::-webkit-input-placeholder{
  font-family: 'Russo One';
}

</style>
<form action="" method="post">
<div class="container">
    <p>CONTACT US</p>
    
    <div class="login">
      <input type="text" name="name" placeholder="Your Name" class="input" required="">
      <input type="email" name="email" placeholder="Your Email Address" class="input" required="">
    </div>
   
    <div class="subject">
      <input type="text" name="subject" placeholder="Subject" class="input">
    </div>
    
    <div class="msg">
      <textarea  class="area" name="text" placeholder="Leave a Message" required=""></textarea>
    </div>
    
    <input type="submit" name="sub" class="btn" value="SEND"> 
  </div>
<script type="text/javascript">
	$(".btn").click(function(){
  $(".input, .area").val("");
});
</script>
<?php include('inc/foot.php');?>
<?php
include('inc/config.php');
if (isset($_POST['sub'])) 
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sub = $_POST['subject'];
  $text = $_POST['text'];
  $sta = "1";
  $sql = "INSERT INTO `cnot`(`name`, `email`, `sub`, `text`, `sta`) VALUES ('$name','$email','$sub','$text','$sta') ";
  mysqli_query($con ,$sql);
  echo "<script>alert('INFORMATION SENDED'); location.href='index.php';</script>";

}


