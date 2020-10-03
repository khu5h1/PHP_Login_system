<?php session_start();
require_once('dbconnection.php');


if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$enc_password=md5($password);
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
	echo "<script>alert('Email already exists');</script>";
} else{
	$msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$enc_password','$contact')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
}

if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=md5($password);
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Please enter a valid username and password');</script>";
$extra="home.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

exit();
}
}


if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not registered');</script>";	
}
}

?>
<html>
  <head>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login/Signup</title>
    <link href="assests/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 login-form-1">
          <h3>Login</h3>
          <form name="login" action="" method="post">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="uemail"
                value=""
                placeholder="Enter your registered email"
              /><a href="#" class="icon email"></a>
            </div>
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                value=""
                name="password"
                placeholder="Enter valid password"
              /><a href="#" class="icon lock"></a>
            </div>
            <div class="form-group">
          
                <input
                  type="submit"
                  name="login"
                  class="btnSubmit"
                  value="LOG IN"
                />

            </div>

          </form>
          <h3 class="resetPass">Forgot Password?</h3>
          <form name="login" action="" method="post">
          <div class="form-group">
						<input type="text" class="form-control" name="femail" value="" placeholder="Enter your registered Email" required  ><a href="#" class=" icon email"></a>		
          </div>
          <div class="form-group">									
						<input type="submit" class="btnSubmit" name="send" onClick="myFunction()" value="Reset password" >
					</div>
					</form>
        </div>
        
        <div class="col-md-6 login-form-2">
          <h3>Sign Up</h3>
          <form
            name="registration"
            method="post"
            action=""
            enctype="multipart/form-data">
          
            <div class="form-group">
              <input class = "form-control" type="text" class="text" value="" name="fname" required placeholder="Enter First Name"/>
            </div>
            <div class="form-group">
              <input class = "form-control" type="text" class="text" value="" name="lname"placeholder="Enter Last Name" required />
            </div>
            <div class="form-group">
              <input class = "form-control" type="text" class="text" value="" name="email" placeholder="Enter Email Address"/>
            </div>
            <div class="form-group">
              <input class = "form-control"type="password" value="" name="password" placeholder="Enter Password" required />
            </div>
            <div class="form-group">
              <input class = "form-control" type="text" value="" name="contact" placeholder="Enter contact number"required />
            </div>
            
            <div class="form-group">
                <input class= "btnSubmit" type="reset" value="Reset" />
                </div>
                <div class="form-group">
                <input class= "btnSubmit"type="submit" name="signup" value="Submit" />
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="or">OR</div>

  </body>
</html>
