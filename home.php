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
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"-->

    <title>LOGISTICS</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGISTICS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
      aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

        <li class="nav-item">
          <a class="nav-link active" href="home.php" style="color: #ff4444;">HOME</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="services.php">SERVICES</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="pagesDropdown">
            <li><a class="dropdown-item" href="pricing-plan.php">Pricing Plan</a></li>
            <li><a class="dropdown-item" href="features.php">Features</a></li>
            <li><a class="dropdown-item" href="free-quote.php">Free Quote</a></li>
            <li><a class="dropdown-item" href="our-team.php">Our Team</a></li>
            <li><a class="dropdown-item" href="testimonial.php">Testimonial</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="LOGIN-PAGE.PHP">Login</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <img src="image/social_10096736.png" alt="call" width="30" height="30" class="me-1">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tel:9994567890">9994567890</a>
        </li>
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

<!-- Bootstrap JS bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Auto-close navbar on mobile after clicking a normal link -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  // Select only normal links, not dropdown toggles
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
  const navbarCollapse = document.querySelector('.navbar-collapse');

  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });
});
</script>

<!-- Push page content below navbar -->
<div style="height: 35px;"></div>


<div class="container-fluid p-0 " >
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-overlay "></div>
            <img src="image/shipping_website_background.jpg" class="d-block w-100" alt="Shipping background">

            <div class="carousel-caption   d-flex flex-column justify-content-center align-items-center text-center text-white p-3 p-md-4 h-100">
              <h2 class="fw-semibold fs-6 fs-sm-5 fs-md-4 mb-2">
                TRANSPORT AND LOGISTICS SOLUTION
              </h2>
              <h1 class="fw-bold lh-sm fs-5 fs-sm-4 fs-md-3 mb-3">
                #1 Place For Your <br><span class="text-warning">Logistics</span> Solution
              </h1>
              <p class="mb-1 fs-6 fs-sm-6 fs-md-5">
                Parcel delivery via ships and airports ensures fast and efficient global.
              </p>
              <p class="mb-3 fs-6 fs-sm-6 fs-md-5">
                Air freight is ideal for urgent deliveries and time-sensitive shipments.
              </p>
              <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
                <a href="services.php" class="btn btn-danger btn-sm px-3">Read More</a>
                <a href="free-quote.php" class="btn btn-primary btn-sm px-3">Free Quote</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-overlay "></div>
            <img src="image/trailer-trucks-driving-road-surrounded-by-beautiful-green-trees.jpg" class="d-block w-100" alt="Truck on road">
            <div class="carousel-caption home-caption d-flex flex-column justify-content-center align-items-center text-center text-white p-3 p-md-4 h-100">
              <h2 class="fw-semibold fs-6 fs-sm-5 fs-md-4 mb-2">
                TRANSPORT AND LOGISTICS SOLUTION
              </h2>
              <h1 class="fw-bold lh-sm fs-5 fs-sm-4 fs-md-3 mb-3">
                #1 Place For Your <br><span class="text-warning">Transport</span> Solution
              </h1>
              <p class="mb-1 fs-6 fs-sm-6 fs-md-5">
                Efficient logistic solutions optimize transport networks with real-time use.
              </p>
              <p class="mb-3 fs-6 fs-sm-6 fs-md-5">
                They ensure timely delivery while reducing costs and environmental impact.
              </p>
              <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center">
                <a href="services.php" class="btn btn-danger btn-sm px-3">Read More</a>
                <a href="free-quote.php" class="btn btn-primary btn-sm px-3">Free Quote</a>
              </div>
            </div>
          </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  
    </div>
</div>
<div class="container-fluid py-5 bg-light">
  <div class="row align-items-center">
    <!-- LEFT COLUMN -->
    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
      <img src="image/row1-left.jpg" class="img-fluid w-100" alt="About Image">
    </div>

    <!-- RIGHT COLUMN -->
    <div class="col-12 col-lg-6">
      <h2 class="text-uppercase text-primary">About Us</h2>
      <h1 class="mb-4">Quick Transport and <br>Logistics Solutions</h1>
      <p class="mb-4 text-justify">
        Overseas parcel services rely on efficient transport and logistics solutions...
      </p>

      <!-- SUB-BOXES -->
      <div class="row">
        <div class="col-12 col-md-6 mb-3">
          <div class="p-3 border rounded h-100 text-center bg-white">
            <img src="image/rig-sub1.jpeg" width="60" height="60" alt="Global">
            <h4 class="mt-3">Global Coverage</h4>
            <p class="text-justify">Global parcel services ensure efficient logistics and transport solutions...</p>
          </div>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <div class="p-3 border rounded h-100 text-center bg-white">
            <img src="image/rig-sub2 (2).png" width="60" height="60" style="background-color:black;" alt="On Time">
            <h4 class="mt-3">On Time Delivery</h4>
            <p class="text-justify">On-time delivery is crucial for maintaining customer trust...</p>
          </div>
        </div>
      </div>

      <!-- Button -->
      <a href="about.php" class="btn btn-danger mt-4">Explore More</a>
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
              <div class="col-lg-3 col-md-6 col-12">
                        <div class="r2-rig-sub" id="sub1">
                            <img src="image/r2-rig-sub1.png" width="40px" height="40px" style="margin-bottom:15px;margin-top:30px;margin-left:30px;">
                            <p>1234<br>Happy Clients</p>
                        </div>
                        <div class="r2-rig-sub" id="sub2">
                            <img src="image/r2-rig-sub2.webp" width="40px" height="40px" style="margin-bottom:15px;margin-top:30px;margin-left:30px;">
                            <p>1245 <br>Complete Shipments</p>
                        </div>
                  </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="r2-rig-sub" id="sub3">
                        <img src="image/r2-rig-sub3.jpg" width="40px" height="40px" style="margin-bottom:15px;margin-top:30px;margin-left:30px;">
                        <p>1256<br>Customer Reviews</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-sm-8 mx-auto text-center mt-5 mb-5">
                     <h3 style="color:red">OUR SERVICES</h3>
                     <h1>Explore Our Services</h1>
                </div>
               
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
           <div class="col-12 col-sm-6 col-lg-4 mb-4">
              <div class="card">
              <img src="image/service1.png" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">Air Freight</h5>
                <p class="card-text">Air freight ensures fast, efficient global cargo transport, minimizing delays and maximizing supply chain reliability.</p>
               <div class="readmore-wrapper"> 
                  <button class="readmore-btn">
                    <span class="readmore-arrow">→</span>
                    <a class="readmore-text" href="services.php" style="text-decoration:none;color:white">Read More</a>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <img src="image/services-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ocean Freight</h5>
                <p class="card-text">Ocean freight offers cost-effective, high-volume cargo transport across global waters, ensuring efficient and sustainable logistics solutions.</p>
                 <div class="readmore-wrapper"> 
                   <button class="readmore-btn">
                      <span class="readmore-arrow">→</span>
                      <a class="readmore-text" href="services.php" style="text-decoration:none;color:white">Read More</a>
                    </button>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <img src="image/services-3.jpg" class="card-img-top" alt="..." height="200px">
              <div class="card-body">
                <h5 class="card-title">Road Freight</h5>
                <p class="card-text">Road freight enables flexible, reliable cargo transport across cities and regions, ensuring timely deliveries and efficient distribution.</p>
                  <div class="readmore-wrapper"> 
                     <button class="readmore-btn">
                       <span class="readmore-arrow">→</span>
                       <a class="readmore-text" href="services.php" style="text-decoration:none;color:white">Read More</a>
                      </button>
                   </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row mt-4">
           <div class="col-12 col-sm-6 col-lg-4 mb-4">
              <div class="card">
              <img src="image/service-4.jpg" class="card-img-top" alt="..." height="200px" width="100%">
              <div class="card-body">
                <h5 class="card-title">Train Freight</h5>
                <p class="card-text">Train freight provides efficient, eco-friendly cargo transport for long distances, ensuring high-capacity movement with minimal environmental impact.</p>
                 <div class="readmore-wrapper"> 
                    <button class="readmore-btn">
                      <span class="readmore-arrow">→</span>
                      <a class="readmore-text" href="services.php" style="text-decoration:none;color:white">Read More</a>
                    </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <img src="image/service-5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Customs Clearance</h5>
                <p class="card-text">Custom clearance ensures smooth international trade by verifying compliance, handling documentation, and expediting cargo movement through borders.</p>
                  <div class="readmore-wrapper"> 
                    <button class="readmore-btn">
                      <span class="readmore-arrow">→</span>
                      <a class="readmore-text" href="services.php" style="text-decoration:none;color:white">Read More</a>
                    </button>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <img src="image/service-6.jpg" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Warehouse Solutions</h5>
                <p class="card-text">Warehouse solutions optimize storage,streamline inventory management, and enhance order fulfillment for efficient supply chain operations.</p>
                  <div class="readmore-wrapper"> 
                    <button class="readmore-btn">
                      <span class="readmore-arrow">→</span>
                      <a class="readmore-text" href="services.php" style="text-decoration:none;color:white">Read More</a>
                    </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
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
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-sm-8 mx-auto text-center mt-5 mb-5">
                     <h3 style="color:red">Pricing Plan</h3>
                     <h1>Perfect Pricing Plan</h1>
                </div>
             </div>
        </div>
        <div class="container-fluid">
          <div class="row">
           <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body">
                    <h5 class="card-title" style="color:red">Basic Plan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">$ 50/per delivery</h6>
                    <hr class="my-4">
                <p class="card-text"><ul><li>Standard delivery timelilnes</li>
                          <li>Cost-effective for small shipments</li>
                          <li>Limited tracking options</li>
                          <li>No priority handling</li>
                          <li>Suitable for non-urgent cargo</li></ul></p>
                 <div class="readmore-wrapper"> 
                    <button class="readmore-btn">
                      <span class="readmore-arrow">→</span>
                      <a class="readmore-text" href="pricing-plan.php" style="text-decoration:none;color:white">Order Now</a>
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body">
                    <h5 class="card-title" style="color:red">Express Plan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">$ 150/per delivery</h6>
                    <hr class="my-4">
                <p class="card-text"><ul><li>Faster transit times</li>
                          <li>Priority handling for urgent shipments</li>
                          <li>Real-time tracking available </li>
                          <li>Expedited customs clearance</li>
                          <li>Ideal for time-sensitive goods</li></ul></p>
                  <div class="readmore-wrapper"> 
                  <button class="readmore-btn">
                    <span class="readmore-arrow">→</span>
                    <a class="readmore-text" href="pricing-plan.php" style="text-decoration:none;color:white">Order Now</a>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <div class="card-body">
                    <h5 class="card-title" style="color:red">Premium Plan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">$ 500/per delivery</h6>
                    <hr class="my-4">
                <p class="card-text"><ul><li>Full-service logistics support</li>
                          <li>Comprehensive tracking and insurance</li>
                          <li>Dedicated customer assistance</li>
                          <li>Enhanced security measures</li>
                          <li>Best for high-value shipments</li></ul></p>
                  <div class="readmore-wrapper"> 
                    <button class="readmore-btn">
                      <span class="readmore-arrow">→</span>
                      <a class="readmore-text" href="pricing-plan.php" style="text-decoration:none;color:white">Order Now</a>
                    </button>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>  
     </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-6 mt-4 col-12 col-sm-6 mb-4">
                <h3 style="font-size:20px;color:blue;">GET A QUOTE</h3>
                <h1 style="color:blueviolet;font-size:25px">Request A Free Quote!!</h1>
                <p>Our transparent pricing ensures cost-effective shipping with no hidden fees. Whether for local or international transport, we provide seamless service with fast transit times and expert support. Optimize your supply chain with hassle-free logistics.</p> 
                <div class="d-flex flex-column flex-md-row ">
                       <img src="image/social_10096736.png" alt="......"id="image" width="60px" height="60px">
                       <div class="d-flex flex-column ms-4">
                           <h2 style="color:green;font-size:20px">Call for any query!</h2> 
                           <h4>+91 9503820394</h4>
                        </div>
                </div>
              </div>
              <div  class="col-lg-6 mt-4 pt-4 col-12 col-sm-6  mb-4"  id="form">
                   <div class="d-flex flex-column flex-md-row justify-content-between">
                       <input type="text" class="form-control" placeholder="Your Name" style="margin-right:5px;">
                       <input type="email" class="form-control" placeholder="Your Email">
                   </div>
                   <div class="d-flex flex-column flex-md-row justify-content-between mt-4">
                       <input type="tel" class="form-control" id="mobileNumber" placeholder="Your mobile number" pattern="[0-9]{10}" required style="margin-right:5px;">
                      <div class="input-group">
                        <select class="form-select">
                          <option selected>Freight</option>
                          <option value="option1">Freight 1</option>
                          <option value="option2">Freight 2</option>
                          <option value="option3">Freight 3</option>
                        </select>
                      </div>
                   </div>
                  <textarea class="form-control mt-4" aria-label="With textarea" placeholder="Special Note"></textarea>  
                  <button class="btn btn-primary mt-4 px-4  d-flex flex-md-row align-items-center" type="submit">SUBMIT</button>
  
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-sm-8 mx-auto text-center mt-5 mb-5">
                     <h3 style="color:red">OUR TEAM</h3>
                     <h1>Expert Team Members</h1>
                </div>
               
            </div>
        </div>  
      <div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img src="image/team-1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Karthick</h3>
                    <h5 class="card-text">Supply Chain Manager</h5>
                    <div class="readmore-wrapper"> 
                      <button class="readmore-btn">
                        <span class="readmore-arrow">→</span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.facebook.com" target="_blank" class="mx-2 text-primary">
                                <i class="bi bi-facebook fs-6"></i>
                              </a></span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.instagram.com" target="_blank" class="mx-2 text-danger">
                                <i class="bi bi-instagram fs-6"></i>
                              </a>
                              </span>  
                        <span class="readmore-text"> <a class="dropdown-item read-more mx-2 px-2 py-0 my-0 d-block" href="https://www.twitter.com" target="_blank" class="mx-2 text-info">
                                <i class="bi bi-twitter fs-6"></i>
                              </a></span>          
                      </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img src="image/team-2.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Santhosh</h3>
                    <h5 class="card-text">Logistics Manager</h5>
                    <div class="readmore-wrapper"> 
                      <button class="readmore-btn">
                        <span class="readmore-arrow">→</span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.facebook.com" target="_blank" class="mx-2 text-primary">
                                <i class="bi bi-facebook fs-6"></i>
                              </a></span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.instagram.com" target="_blank" class="mx-2 text-danger">
                                <i class="bi bi-instagram fs-6"></i>
                              </a>
                              </span>  
                        <span class="readmore-text"> <a class="dropdown-item read-more mx-2 px-2 py-0 my-0 d-block" href="https://www.twitter.com" target="_blank" class="mx-2 text-info">
                                <i class="bi bi-twitter fs-6"></i>
                              </a></span>          
                      </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img src="image/team-3.jpeg" class="card-img-top" alt="..." height="260">
                <div class="card-body">
                    <h3 class="card-title">Kumaran</h3>
                    <h5 class="card-text">Warehouse Manager</h5>
                    <div class="readmore-wrapper"> 
                      <button class="readmore-btn">
                        <span class="readmore-arrow">→</span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.facebook.com" target="_blank" class="mx-2 text-primary">
                                <i class="bi bi-facebook fs-6"></i>
                              </a></span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.instagram.com" target="_blank" class="mx-2 text-danger">
                                <i class="bi bi-instagram fs-6"></i>
                              </a>
                              </span>  
                        <span class="readmore-text"> <a class="dropdown-item read-more mx-2 px-2 py-0 my-0 d-block" href="https://www.twitter.com" target="_blank" class="mx-2 text-info">
                                <i class="bi bi-twitter fs-6"></i>
                              </a></span>          
                      </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img src="image/team-4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Senthil</h3>
                    <h5 class="card-text">Freight Agent</h5>
                    <div class="readmore-wrapper"> 
                      <button class="readmore-btn">
                        <span class="readmore-arrow">→</span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.facebook.com" target="_blank" class="mx-2 text-primary">
                                <i class="bi bi-facebook fs-6"></i>
                              </a></span>
                        <span class="readmore-text"><a class="dropdown-item read-more px-2 mx-2 py-0 my-0 d-block" href="https://www.instagram.com" target="_blank" class="mx-2 text-danger">
                                <i class="bi bi-instagram fs-6"></i>
                              </a>
                              </span>  
                        <span class="readmore-text"> <a class="dropdown-item read-more mx-2 px-2 py-0 my-0 d-block" href="https://www.twitter.com" target="_blank" class="mx-2 text-info">
                                <i class="bi bi-twitter fs-6"></i>
                              </a></span>          
                      </button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-sm-8 mx-auto text-center mt-5 mb-5">
                     <h3 style="color:red">Testimonial</h3>
                     <h1>Our Clients Say!!</h1>
                </div>
               
            </div>
        </div>   
      <div class="container my-5">
              <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                            <div class="col-lg-4">
                                  <div class="card">
                                      <div class="d-flex justify-content-center my-3">
                                        <img src="image/customer-1.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                        <div class="col-lg-6 mx-3">
                                          <h3 style="color:purple">Anaya</h3>
                                          <h4 style="color:burlywood">Teacher</h4>
                                          </div>
                                    </div>
                                    <div class="card-body">
                                          <p class="card-text">Praised the company for its helpful and responsive team, ensuring shipments are always taken care of.</p>
                                    </div>
                                  </div>
                            </div>
                              <div class="col-lg-4">
                                  <div class="card">
                                      <div class="d-flex justify-content-center my-3">
                                          <img src="image/customer-2.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                          <div class="col-lg-6 mx-3">
                                            <h3 style="color:purple">Arjun</h3>
                                            <h4 style="color:burlywood">Engineer</h4>
                                          </div>
                                       </div>
                                      <div class="card-body">
                                          <p class="card-text">Called Single Source Logistics "absolutely amazing", highlighting their top-notch service and competitive prices.</p>
                                      </div>
                                  </div>
                               </div>
                              <div class="col-lg-4">
                                  <div class="card">
                                      <div class="d-flex justify-content-center my-3">
                                          <img src="image/customer-3.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                          <div class="col-lg-6 mx-3">
                                            <h3 style="color:purple">Kian</h3>
                                            <h4 style="color:burlywood">Manager</h4>
                                          </div>
                                        </div>
                                      <div class="card-body">
                                          <p class="card-text">Described the company as the best logistics provider she has ever used, appreciating their friendly and knowledgeable team.</p>
                                      </div>
                                   </div>
                              </div>
                    </div>
                  </div> 
                  <div class="carousel-item">
                     <div class="row">
                         <div class="col-lg-4">
                            <div class="card">
                                 <div class="d-flex justify-content-center my-3">
                                    <img src="image/customer-2.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                    <div class="col-lg-6 mx-3">
                                      <h3 style="color:purple">Arjun</h3>
                                    <h4 style="color:burlywood">Engineer</h4>
                                    </div>
                                 </div>
                                <div class="card-body">
                                    <p class="card-text">Called Single Source Logistics "absolutely amazing", highlighting their top-notch service and competitive prices.</p>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="card">
                                 <div class="d-flex justify-content-center my-3">
                                    <img src="image/customer-3.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                    <div class="col-lg-6 mx-3">
                                      <h3 style="color:purple">Kian</h3>
                                      <h4 style="color:burlywood">Manager</h4>
                                    </div>
                                 </div>
                                <div class="card-body">
                                    <p class="card-text">Described the company as the best logistics provider she has ever used, appreciating their friendly and knowledgeable team.</p>
                                </div>
                            </div>
                          </div>
                       <div class="col-lg-4">
                            <div class="card">
                                 <div class="d-flex justify-content-center my-3">
                                      <img src="image/customer-4.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                      <div class="col-lg-6 mx-3">
                                          <h3 style="color:purple">Ravi</h3>
                                          <h4 style="color:burlywood">Doctor</h4>
                                      </div>
                                  </div>
                                <div class="card-body">
                                    <p class="card-text"> Found Single Source Logistics to be a game-changer,noting their prompt and professional handling of shipments.</p>
                                </div>
                              </div>
                        </div>
                      </div> 
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                         <div class="col-lg-4">
                            <div class="card">
                                 <div class="d-flex justify-content-center my-3">
                                   <img src="image/customer-3.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                   <div class="col-lg-6 mx-3">
                                     <h3 style="color:purple">Kian</h3>
                                   <h4 style="color:burlywood">Manager</h4>
                                   </div>
                                 </div>
                                <div class="card-body">
                                    <p class="card-text">Described the company as the best logistics provider she has ever used, appreciating their friendly and knowledgeable team.</p>
                                </div>
                            </div>
                         </div>
                       <div class="col-lg-4">
                            <div class="card">
                                 <div class="d-flex justify-content-center my-3">
                                   <img src="image/customer-4.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                     <div class="col-lg-6 mx-3">
                                     <h3 style="color:purple">Ravi</h3>
                                   <h4 style="color:burlywood">Doctor</h4>
                                   </div>
                                 </div>
                                <div class="card-body">
                                    <p class="card-text"> Found Single Source Logistics to be a game-changer,noting their prompt and professional handling of shipments.</p>
                                </div>
                            </div>
                         </div>
                         <div class="col-lg-4">
                            <div class="card">
                                 <div class="d-flex justify-content-center my-3">
                                   <img src="image/customer-1.jpg" class="card-img-top" alt="..." style="width: 100px; height:100px;">
                                  <div class="col-lg-6 mx-3">
                                     <h3 style="color:purple">Anaya</h3>
                                   <h4 style="color:burlywood">Teacher</h4>
                                   </div>
                                 </div>
                                <div class="card-body">
                                    <p class="card-text">Praised the company for its helpful and responsive team, ensuring shipments are always taken care of. </p>
                                </div>
                            </div>
                         </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>  
        </div> 
      </div>   
    </div>       
  </div>

</div>  
      
<!-- Footer Start -->
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
       <a href="#">Logistics</a>, All Right Reserved.
      </div>
      <div class="col-md-6 text-center text-md-end">
        Designed By <a href="#"></a> | Distributed By <a href="#"></a>
      </div>
    </div>
  </div>
</footer>
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function toggleDropdown() {
    const dropdown = document.getElementById("dropdown");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
}
document.addEventListener("DOMContentLoaded", function () {
  const toggler = document.querySelector(".navbar-toggler");
  const menu = document.querySelector("#mainNav");

  if (toggler && menu) {
    toggler.addEventListener("click", function () {
      menu.classList.toggle("show"); // Bootstrap uses "show" to display
    });
  }
});*/
</script-->      
</body>
</html>