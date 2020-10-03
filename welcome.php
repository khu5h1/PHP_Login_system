<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    <div class="container">
            <h1>Hola Amegos!</h1>
            <p>This is a basic Login/SignUp/Logout functionality which you may use in your project.</p>
            <a  href="logout.php" class="btn btn-primary btn-large">Logout </a> 
        <hr>
        </div>
        <hr>    </div>
</body>

</html>
<?php } ?>