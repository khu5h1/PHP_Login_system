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
    <nav class="navbar">
      <div class="nav-wrapper">              
        <ul>
          <li><img src="images/logo.png" alt="Home"></li>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
        </ul>

        <a href="logout.php" class="btn btn-light float-right">Logout</a>
      </div>
    </nav>
    <!-- <div class="container">      
      <h1></h1>              
    </div> -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
         <div class="row">

             <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                   <div class="hero-text">

                        <h1 class="text-white" data-aos="fade-up">Welcome!</h1>
                        <p class="text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere quam vel consequuntur doloribus numquam ipsam enim. Dolorum, aliquam? Autem hic nisi fugiat quidem odio ipsam sequi recusandae laborum voluptatem! Labore!</p>

                        <a href="#contact-us" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Contact Us</a>

                   </div>
             </div>

             <div class="col-lg-6 col-12">
               <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                 <img src="images/working-girl.png" class="img-fluid" alt="working girl">
               </div>
             </div>

         </div>
    </div>
</section>
    <section class="about section-padding pb-0" id="about">
  <div class="container">
      <div class="row">
  
           <div class="col-lg-12 mx-auto col-md-10 col-12">
                <div class="about-info">
  
                     <h2 data-aos="fade-up">Want to know more <strong>About Us</strong>? Connect with us! </h2>
  
                     
                </div>
  
                <div class="about-image" data-aos="fade-up" data-aos-delay="200">
  
                 <img src="images/office.png" class="img-fluid" alt="office">
               </div>
           </div>
  
      </div>
  </div>
  </section>
  <!-- ***** Contact Us Start ***** -->
  <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title text-center">Talk To Us</h2>
                    </div>
                </div>
                
            </div>
            <br>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                        <br>auctor non lorem</p>
                        
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
  
    <!-- Footer -->
    <footer class="page-footer center">
       © 2020. Developed using PHP            
    </footer>
  </body>
</html>
<?php } ?>
