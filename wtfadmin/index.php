<?php
    session_start();

$_SESSION["username"] = true ;

    //Start Database
     include('inc/config.php');

    // Pretty much kicks out a user once they revisit this page and is logged in
    // Pretty much kicks out a user once they revisit this page and is logged in

    $loggedIn = false;

    // *** While or is nice solution, it doesn't take into account when the 'name' index is not set, which generates a php warning
    // $userName = $_POST["name"] or "";
    $userName = isset($_POST["username"]) ? $_POST["username"] : null;

    // *** same change as above
    // $userPass = $_POST["pass"] or "";
    $userPass = isset($_POST["password"]) ? $_POST["password"] : null;

    // *** This test really comes down to, what if username or password is evaluated to false.
    // have a good think about what it is you are actually testing
    // php casts strings and numeric values to boolean, so something that you don't think is false could be cast as false, eg a string containing "0"
if ($userName && $userPass )
    {
        // User Entered fields
        // *** This is dangerous, it is subject to sql injection, given you wrote this code in 2 days, i am sure you can find
        // plenty of info on sql injection and mysqli and improve it
        $query = "SELECT uname, pass FROM user WHERE uname = '$userName' AND pass = '$userPass'";// AND password = $userPass";

        $result = mysqli_query( $con, $query);

        // *** Error checking, what if !$result? eg query is broken

        $row = mysqli_fetch_array($result);

        if(!$row){
            echo ' <div class = "login"> ';
            echo "No existing user or wrong password.";
            echo '</div>';
        }
        else {
            // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add  
            // code into the condition later
            $loggedIn = true;
            header('Location: home.php');
        }
    }

?>

<?php include('inc/boot.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>ADMIN PANEL-Login</title>
</head>
<body>

<div class="login">
  <form action="#" method="post">
    <h1>ADMIN</span></h1>
    <!-- <label for="username">Username:</label> -->
    <input type="text" id="username" name="username" placeholder="Username" required>
    <!-- <label for="password">Password:</label> -->
    <input type="password" id="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
<div class="sasi">
</div>
</div>
</body>
<?php include('inc/foot.php');?>
</html>
