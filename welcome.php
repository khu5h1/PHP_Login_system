<?php
session_start();
if(time()-$_SESSION["login_time_stamp"] >1800)   
    { 
        session_unset(); 
        session_destroy(); 
        header("location:home.php");
     }
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');

  } 
else{
  echo "<script>alert('You are LoggedIn successfully!')</script>";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="assets/css/welcome.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <a href="logout.php" class="btn btn-primary">Logout</a>
      <h1></h1>
              
    </div>
  </body>
</html>
<?php } ?>
