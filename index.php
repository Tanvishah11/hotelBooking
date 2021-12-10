
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

                <ul class="site-menu js-clone-nav mr-auto d-none d-md-block">
                  <li class="active"><a href="index.php"><span>Home</span></a></li>
                  <li><a href="about.html"><span>About</span></a></li>
                  <li><a href="contact.html"><span>Contact</span></a></li>
                
                  <li><a href="login2.php"><span>Log In</span></a></li>
                </ul>
              </nav>
            </div>
            <?php
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (strpos($url, "done") !== false) {
  $id = trim($url, 'http://localhost/IPProject/index.php?sucsess=');
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-success" role="alert">
           Account sucessfully created
         </div>';
}
elseif (strpos($url, "login=error") !== false) {
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
          An error occured please try again later
        </div>';
}
elseif (strpos($url, "success") !== false) {
  $id = trim($url, 'http://localhost/IPProject/index.php?success=');
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-success" role="alert">
          Welcome
        </div>';
}
?>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

            </div>

          </div>
        </div>
        
      </header>

    

      <div class="site-blocks-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="slider">

          <img src="images/1.jpg" class="slide_image slider_active"></img>
          <img src="images/2.jpg" class="slide_image"></img>
          <img src="images/3.jpg" class="slide_image"></img>
          <img src="images/4.jpg" class="slide_image"></img>

        </div>
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10">
              
              
              <div class="row justify-content-center mb-4">
                <div class="col-md-10 text-center">
                  <h1 data-aos="fade-up">Find Nearby <span class="typed-words"></span></h1>
                  <p data-aos="fade-up" class="custom-text w-75 mx-auto" style="font-size: 30px; color: whitesmoke;">What stirs the traveller in you?</p>
                </div>
              </div>

              <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200" style="opacity: 0.81;">
                <form method="post">
                  <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                      <input type="text" class="form-control" placeholder="What are you looking for?" style="font-size: 18.5px;">
                    </div>
                    <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                      <div class="wrap-icon">
                        <span class="icon icon-calendar"></span>
                        <input type="text" class="form-control datepicker" placeholder="Check-in" style="font-size: 18.5px;">
                      </div>
                      
                    </div>
                    <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                      <div class="wrap-icon">
                        <span class="icon icon-calendar"></span>
                        <input type="text" class="form-control datepicker" placeholder="Check-out" style="font-size: 18.5px;">
                      </div>
                      
                    </div>
                    <div class="col-lg-12 col-xl-2 ml-auto text-right">
                      <input type="submit" class="btn text-white btn-primary" value="Search">
                    </div>
                    
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>  

      
      
        
      
      <div class="site-section" data-aos="fade">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Most Popular Destinations</h2>
              <p class="color-black-opacity-5">An idyllic beach on a faraway island? Shopping for rare treasures in an ancient city?</p>
              <p class="color-black-opacity-51">A picnic in the Himalayas? A leisurely cruise on the Nile or a jungle adventure?</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                  <h2 class="mb-1"><a href="listings-single.html">New York City</a></h2>
                  <span class="address">New York</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                  <h2 class="mb-1"><a href="listings-single.html">Rome</a></h2>
                  <span class="address">Italy</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/img_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                  <h2 class="mb-1"><a href="listings-single.html">Barcelona</a></h2>
                  <span class="address">Spain</span>
                </div>
              </div>

            </div>

            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/img_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="listings-single.html" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                  <h2 class="mb-1"><a href="listings-single.html">London</a></h2>
                  <span class="address">United Kingdom</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/img_5.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                  <h2 class="mb-1"><a href="listings-single.html">Singapore</a></h2>
                  <span class="address">Singapore</span>
                </div>
              </div>

            </div>
            <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
              
              <div class="listing-item">
                <div class="listing-image">
                  <img src="images/img_6.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a href="listings-single.html" class="bookmark"><span class="icon-heart"></span></a>
                  <h2 class="mb-1"><a href="listings-single.html">Paris</a></h2>
                  <span class="address">France</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5">
              <img src="images/img_6.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"> 
            </div>
            <div class="col-md-5 ml-auto">
              <h2 class="text-primary mb-3">Why Us?</h2>
              <div class="row mt-4">
                <div class="col-12">
                  <div class="border p-3 rounded mb-2">
                    <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">Best Price Guarantee</a>

                    <div class="collapse" id="collapse-1">
                      <div class="pt-2">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 rounded mb-2">
                    <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">World Class Service</a>

                    <div class="collapse" id="collapse-4">
                      <div class="pt-2">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 rounded mb-2">
                    <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">No Hidden Charges</a>

                    <div class="collapse" id="collapse-2">
                      <div class="pt-2">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section bg-light">
        <div class="container">

          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
              <h2 class="font-weight-light text-primary">Satisfied Customers</h2>
            </div>
          </div>

          <div class="slide-one-item home-slider owl-carousel">
            <div>
              <div class="testimonial">
                <figure class="mb-4">
                  <img src="images/nemil.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                  <p>John</p>
                </figure>
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.&rdquo;</p>
                </blockquote>
              </div>
            </div>
            <div>
              <div class="testimonial">
                <figure class="mb-4">
                  <img src="images/nemil1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                  <p>Sam</p>
                </figure>
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.&rdquo;</p>
                </blockquote>
              </div>
            </div>

            <div>
              <div class="testimonial">
                <figure class="mb-4">
                  <img src="images/nemil.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                  <p>Tom </p>
                </figure>
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.&rdquo;</p>
                </blockquote>
              </div>
            </div>

            <div>
              <div class="testimonial">
                <figure class="mb-4">
                  <img src="images/nemil1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-3">
                  <p>Happy</p>
                </figure>
                <blockquote>
                  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.&rdquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="py-5 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
              <h2 class="mb-3 mt-0 text-white">Let's get started. Create your account</h2>
              <p class="mb-0 text-white">Sign Up today to enjoy an exclusive 20%* discount on your next spectacular outing with us.</p>
            </div>
            <div class="col-lg-4">
              <p class="mb-0"><a href="login2.php" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Sign Up</a></p>
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
              <h2 class="footer-heading mb-4">Newsletter Subscription</h2>
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
    

    <script src="js/typed.js"></script>
              <script>
              var typed = new Typed('.typed-words', {
              strings: ["Rooms", "Hotels", "Suites"],
              typeSpeed: 115,
              backSpeed: 115,
              backDelay: 4000,
              startDelay: 100,
              loop: true,
              showCursor: true
              });
              </script>

    <script src="js/main.js"></script>
  
  </body>
</html>