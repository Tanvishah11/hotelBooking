
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Hotels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/slide1.css">
    
  </head>
  <body>

  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-white h2 mb-0" style="font-size: 40px; font-weight: bold;">HOTELS</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php"><span>Home</span></a></li>
                <li><a href="about.html"><span>About</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>
                
                <li class="active"><a href="login2.php"><span>Log In</span></a></li>
              </ul>
            </nav>
          </div>

          <?php
 $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 if (strpos($url, "cpass") !== false) {
   echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
           Password 1 and Password 2 does not match
         </div>';
 }
 elseif (strpos($url, "login=empty") !== false) {
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
          Fill out all fields
        </div>';
}
elseif (strpos($url, "login=error") !== false) {
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
          Invalid username or password
        </div>';
}
  ?>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover inner-page-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="slider">

        <img src="images/5.jpg" class="slide_image slider_active"></img>
        <img src="images/2.jpg" class="slide_image"></img>
        <img src="images/6.jpg" class="slide_image"></img>
        <img src="images/4.jpg" class="slide_image"></img>

      </div>
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 style="color: #4fc275; font-size: 45px;">Sign Up / Login</h1>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            

            

            <form method="post" action="post2.php" class="p-5 bg-white" style="margin-top: -150px;">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" name="fname">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control" name="lname">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name="email">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass1">Password</label> 
                  <input type="password" id="pass1" class="form-control" name="pass1">
                </div>
              </div>
              
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass2">Re-type Password</label> 
                  <input type="password" id="pass2" class="form-control" name="pass2">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="save" value="Sign Up" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
        
          </div>
          <div class="col-md-6 mb-5">

            

            <form action="login.php" method="POST" class="p-5 bg-white" style="margin-top: -150px;">
             

              

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email2" name="email2" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="pass1">Password</label> 
                  <input type="password" id="pass3" name="pass3" class="form-control">
                </div>
              </div>
              
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="submit" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="#">Special Offers</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </div>
            
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <p>Subscribe now to our newsletter so that you don't miss out on the best of deals we have for you.</p>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  <script src="js/slides.js"></script>
  <script src="js/slide1.js"></script>
  <script src="js/calendar.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/main.js"></script>
  
  </body>
</html>