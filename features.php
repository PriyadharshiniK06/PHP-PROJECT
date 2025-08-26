<?php
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/logistic-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <title>LOGISTICS</title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid" id="navbar" id="nav-left">
      <a class="navbar-brand" href="#">LOGISTICS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
            </div>    
                <div class="collapse navbar-collapse" id="navbarSupportedContent" id="nav-right">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php" >HOME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="services.php">SERVICES</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" >
                                <li><a class="dropdown-item" href="pricing-plan.php" style="padding-left:35px;padding-right:35px;">Pricing Plan</a></li>
                                <li><a class="dropdown-item" href="features.php" style="padding-left:40px;padding-right:45px;color:red">Features</a></li>
                                <li><a class="dropdown-item" href="free-quote.php" style="padding-left:40px;padding-right:40px">Free Quote</a></li>
                                <li><a class="dropdown-item" href="our-team.php" style="padding-left:40px;padding-right:45px">Our Team</a></li>
                                <li><a class="dropdown-item" href="testimonial.php" style="padding-left:40px;padding-right:40px">Testimonial</a></li>
                                
                            </ul>
                    </li>        
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="LOGIN-PAGE.PHP">Login</a>
                    </li>
                    <li class="nav-item">
                    <img src="image/social_10096736.png" alt="call" width="30px" height="30px">
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">9994567890</a>
                    </li>
                <!-- Profile dropdown -->
                  <?php if (isset($_SESSION["email"])): ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link p-0" href="#" id="profileMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img
                          src="<?php echo htmlspecialchars($_SESSION['profile_image'] ?? 'image/profile-login.png'); ?>"
                          alt="Profile" class="rounded-circle"
                          style="width:40px; height:40px; object-fit:cover;">
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileMenu">
                        <li>
                          <span class="dropdown-item-text small">
                            <?php echo htmlspecialchars($_SESSION['email']); ?>
                          </span>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                      </ul>
                    </li>
                  <?php endif; ?>

                </ul>
    </div>
  </div>
</nav>
<div class="container-fluid p-0 " >
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-overlay "></div>
            <img src="image/shipping_website_background.jpg" class="d-block w-100" alt="Shipping background">

            <div class="carousel-caption   d-flex flex-column justify-content-center align-items-center text-center text-white p-3 p-md-4 h-100">
              <h2 class="fw-semibold fs-20 fs-sm-5 fs-md-4 mb-2">
                FEATURES
              </h2>
              <h1 class="fw-bold lh-sm fs-10 fs-sm-4 fs-md-3 mb-3">
                Home/Pages/Features
              </h1>
            </div>
          </div>
    </div> 
  </div>     
</div>  

         <div class="container-fluid">
          <div class="row mt-5">
              <div class="col-lg-6 col-md-12 col-12">
                <h3 style="color:red;font-size:25px">SOME FACTS</h3>
                <h1 style="color:chocolate;font-size:35px">#1 Place to Manage All Of Your Shipments</h1>
                <p class="text-justify">Simplify your shipment process with our all-in-one platform designed for efficiency and convenience. Track shipments in real-time,stay organised with a unified dashboard,and never miss an update with custom alerts.Integrate seamlessly with your favorite logistics and e-commerce tools for a streamlined workflow.
                </p> 
                   <div class="d-flex flex-column flex-md-row">
                    <img src="image/social_10096736.png" width="100" height="100">
                    <div class="text-center col-md-4 col-12 mt-3">
                      <h5>Call for any query</h5>
                      <h4>91 9045780358</h4>
                    </div>
                </div>
              </div>
            <div class="col-lg-3 col-md-12 col-12">
                        <div class="r2-rig-sub" id="sub1">
                            <img src="image/r2-rig-sub1.png" width="40px" height="40px" style="margin-bottom:15px;margin-top:30px;margin-left:30px;">
                            <p>1234<br>Happy Clients</p>
                        </div>
                        <div class="r2-rig-sub" id="sub2">
                            <img src="image/r2-rig-sub2.webp" width="40px" height="40px" style="margin-bottom:15px;margin-top:30px;margin-left:30px;">
                            <p>1245 <br>Complete Shipments</p>
                        </div>
                  </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="r2-rig-sub" id="sub3">
                        <img src="image/r2-rig-sub3.jpg" width="40px" height="40px" style="margin-bottom:15px;margin-top:30px;margin-left:30px;">
                        <p>1256<br>Customer Reviews</p>
                  </div>
              </div>
                
           
        </div>
          </div>
        </div>
        <div class="container-fluid mb-5">
          <div class="row" style="margin-top:20px">
            <div class="col-lg-6">
                <h3 style="font-size:20px;color:blue;">OUR FEATURES</h3>
               <h1 style="color:blueviolet;font-size:30px">We Are Trusted Logistics Company Since 1990</h1>
               <div class="d-flex flex-column flex-md-row justify-content-between">
                  <img src="image/rig-sub1.jpeg" alt="......"id="image" width="60px" height="60px">
                  <div class="d-flex flex-column">
                     <h2 style="color:red;font-size:25px">Worldwide Service</h2>
                     <p>Worldwide services ensure seamless global logistics, connecting businesses with reliable transport solutions across continents.</p>
                  </div>
               </div>
               <div class="d-flex flex-column flex-md-row justify-content-between">
                  <img src="image/rig-sub2 (2).png" alt="......"id="image" width="60px" height="60px">
                  <div class="d-flex flex-column">
                     <h2 style="color:red;font-size:25px">On Time Delivery</h2>
                     <p>On-time delivery ensures efficiency in supply chains, maintaining customer trust while optimizing logistics for seamless operations.</p>
                  </div>
               </div>
               <div class="d-flex flex-column flex-md-row justify-content-between">
                  <img src="image/social_10096736.png" alt="......"id="image" width="60px" height="60px">
                  <div class="d-flex flex-column">
                     <h2 style="color:red;font-size:25px">24/7 Telephone Support </h2>
                     <p>24/7 telephone support provides round-the-clock assistance, ensuring seamless customer service and immediate issue resolution.</p>
                  </div>
               </div>
                  
              </div>
              <div  class="col-lg-6" >
                  <img src="image/dispatch-view.jpg" width="100%" height="600px">
              </div>
              
            </div>
          </div>
        </div>
    </div>
    <footer class="footer pt-5 pb-3">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold">Address</h5>
        <p><i class="fas fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
        <p><i class="fas fa-phone-alt me-2"></i>+012 345 67890</p>
        <p><i class="fas fa-envelope me-2"></i>info@example.com</p>
        <div class="d-flex flex-wrap justify-content-sm-center justify-content-md-start mt-3">
          <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fab fa-youtube"></i></a>
          <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold">Services</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-angle-right me-2"></i>Air Freight</li>
          <li><i class="fas fa-angle-right me-2"></i>Sea Freight</li>
          <li><i class="fas fa-angle-right me-2"></i>Road Freight</li>
          <li><i class="fas fa-angle-right me-2"></i>Logistic Solutions</li>
          <li><i class="fas fa-angle-right me-2"></i>Industry Solutions</li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-angle-right me-2"></i><a href="about.html">About Us</a></li>
          <li><i class="fas fa-angle-right me-2"></i><a href="contact.html">Contact Us</a></li>
          <li><i class="fas fa-angle-right me-2"></i><a href="services.html">Our Services</a></li>
          <li><i class="fas fa-angle-right me-2"></i><a href="free-quote.html">Terms & Condition</a></li>
          <li><i class="fas fa-angle-right me-2"></i><a href="contact.html">Support</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold">Newsletter</h5>
        <p>Subscribe to get the latest updates and insights in global logistics and supply chain solutions.</p>
        <form class="d-flex flex-column flex-sm-row mt-2">
          <input type="email" class="subscribe-input mb-2 mb-sm-0 me-sm-2" placeholder="Your email" required>
          <button type="submit" class="subscribe-btn">SignUp</button>
        </form>
      </div>
    </div>
    <div class="row footer-bottom mt-4">
      <div class="col-md-6 text-center text-md-start">
        &copy; <a href="#">Logistics</a>, All Right Reserved.
      </div>
      <div class="col-md-6 text-center text-md-end">
        Designed By <a href="#"></a> | Distributed By <a href="#"></a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>