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
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="assests/css/welcome.css" rel="stylesheet">
</head>
<body>
 
    <div class="container-fluid">            
      <a href="logout.php" class="btn btn-light">Logout </a> 
    </div>
</body>

</html>
<?php } ?>
