<?php
include('security.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ई-मध्यप्रदेश</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    

    <link rel="shortcut icon" href="img/odi.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
<script src="https://kit.fontawesome.com/d0fe7b38ff.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link href="vendor1/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor1/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor1/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor1/remixicon/remixicon.css" rel="stylesheet">
    <!-- Theme Style -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
      <style type="text/css">
    .responsive {
  max-width: 100%;
  height: auto;
}


#mapsbtn {

  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  margin-bottom: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: olive;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#mapsbtn:hover {background-color: grey}

#mapsbtn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#mapsbtn:hover a{

   color: #21c87a;    
}

.carousel-inner img{
  max-width: 250%;
  height: auto;
}

  </style>
  </head>
  <body>
   
  <?php  
include('navbar.php');
?>


<!-- <img src="img/haryana/e.jpg" class=" responsive" style="width: 100%; " > -->
 
 <!--  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <div class="carousel-item active">
        <div class="carousel-container"><br><br><br>
         <img class="animated fadeInDown" src="img/haryana/map.png" >
        </div>
      </div>

   
      <div class="carousel-item">
        <div class="carousel-container">
        
          <img class="animated fadeInDown" src="img/blog/about.png">
        </div>
      </div>

      <div class="carousel-item">
        <div class="carousel-container">
         <img class="animated fadeInDown" src="img/kerala/a5.png" >
          
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section > -->

 

    
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!--indicators-->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
     <!--  <li data-target="#demo" data-slide-to="1"></li> -->
   
    </ul>
    
    <!--slideshow-->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/mad/e.jpg" width="1500" height="500">
      </div>
     
  <!--     <div class="carousel-item">
        <img src="img/haryana/e.jpg" width="1500" height="500">
      </div> -->
    </div>
    <!--left and right controls-->
<!--     <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
  </div>








    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="fa fa-map-o d-block mb-4"></span></span>
            <h3 class="mb-2 text-dark" >Innovative Maps</h3>
            <p>Various locations and relief services plotted on user-friendly maps .</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="fa fa-institution d-block mb-4"></span></span>
            <h3 class="mb-2 text-dark">Education & Awareness</h3>
            <p>Influencial and productive online courses and Latest news around the globe and of kerala displayed.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="fa fa-heartbeat d-block mb-4"></span></span>
            <h3 class="mb-2 text-dark">HealthCare</h3>
            <p>Automating several processes regarding healthcare and providing users numerous services from online booking of appointments to checking symptoms & much more .</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="fa fa-tasks d-block mb-4"></span></span>
            <h3 class="mb-2 text-dark">Public + Government Services</h3>
            <p>Effortless access to government portals,online payments,registrations for various schemes and services etc.</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up">Sectors</h2>
              <p data-aos="fade-up" data-aos-delay="100">Some of the domains focused on and corresponding solutions derived for the same .</p>
            </div>
          </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <img src="img/b7.png" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          <div class="col-lg-4">
            <img src="img/v6.jpg" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="img/andhra/a2.png" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
          </div>
          <div class="col-lg-4">
            <img src="img/andhra/a3.png" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>
      </div>
    </section>





<br><br><br><br><br><br>
 <section class="section bg-light  top-slant-white bottom-slant-gray">

      <div class="clearfix mb-5 pb-5" >
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap" >
              <h2>MADHYA-PRADESH</h2>
              <P>"Wonders of the Land known as "The heart of India""</P>
            </div>
            <div class="container" style="position: center;">
              <center>
<img class="responsive" src="img/mad/p.png">
</center>
</div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/mad/h1.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Khajuraho</h3>
                
                <p>Khajuraho, a UNESCO World Heritage Site located in Madhya Pradesh, is known around the world for its stunning temples adorned by erotic and sensuous carvings.</p>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.6</i></p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/mad/h2.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Bhedaghat</h3>
                <p>Bhedaghat is known for the Dhuandar Falls (Dhuan means smoke and Dhar means flow), a huge cascade of water that falls from a height of 98 feet.</p><br><br><br><br>
                <p class="text-primary h3"><i class="fa fa-star" style="color: olive">5.0</i></p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/mad/h4.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Pachmarhi</h3>
                <p>Pachmarhi is the only hill station and is the highest point in Madhya Pradesh. Pachmarhi is also often known as "Satpura ki Rani" or the "Queen of the Satpura Range". </p>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.7</i></p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/mad/h5.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Gwalior</h3>
                <p>Gwalior is a historic city located in the state of Madhya Pradesh. Popular because of the hilltop fort, Gwalior is full of palaces and glorious temples giving this city a majestic charm which speaks volumes of its glorious past.</p><br>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.6</i></p>
                
              </div>
              
            </div>

          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/mad/h6.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Bandhavgarh National Park</h3>
                <br>
                <p>Formerly a hunting ground for the Maharajas of Rewa, the Bandhavgarh National Park is world-renowned as a tiger reserve and it is known to have the highest density of Bengal tigers in the world.</p>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.5</i></p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/mad/h7.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Kanha National Park</h3>
                <p>Located in a central region of Madhya Pradesh, Kanha National Park is the largest National Park in central India and has been ranked as one of the best parks in Asia.</p>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.4</i></p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
              <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/mad/h8.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Sanchi</h3>
                <p>Designated a World Heritage site by UNESCO, the Great Stupa was installed in the 3rd century BC by Emperor Ashoka of the Mauryan dynasty. </p>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.5</i></p>
                
              </div>
              
            </div>

              <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/mad/h9.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Indore</h3>
                <p>Indore is the largest and the most populous city of Madhya Pradesh. Located on the Malwa Plateau, the charm of this city lies in its rich cultural heritage which has been preserved over centuries and along with the hints of urbanisation.</p><br><br><br>
                <p class="text-primary h3"><i class="fa fa-star"  style="color: olive">4.2</i></p>
                
              </div>
              
            </div>

          </div>
        </div>
        

      </div>
    </section> 

    <section class="section relative-higher">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2 style="color: red">ALERT</h2>
                     
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="owl-carousel centernonloop2">
              <div class="slide" data-aos="fade-left" data-aos-delay="100">
                <blockquote class="testimonial">
                  
                  <div class="d-flex author">
                    <img src="img/mad/p.png" alt="" class="mr-4">
                    <div class="author-info">
                      <h4 style="color: red">NISARGA/AMPHAN</h4>
                      <p style="color: black">Cyclone Nisarga & Amphan ,one of the worst storms over the Arabian Sea and Bay of Bengal.</p>
                    </div>
                  </div>  
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="200">
                <blockquote class="testimonial">
                
                  <div class="d-flex author">
                    <img src="img/person_1.jpg" alt="" class="mr-4">
                    <div class="author-info">
                      <h4 style="color: red">COVID 19</h4>
                      <p style="color: black">Global Pandemic</p>
                    </div>
                  </div>  
                </blockquote>
              </div>
              <!--<div class="slide" data-aos="fade-left" data-aos-delay="300">
                <blockquote class="testimonial">
                
                  <div class="d-flex author">
                    <img src="img/person_3.jpg" alt="" class="mr-4">
                    <div class="author-info">
                      <h4>Charles White</h4>
                      <p>CEO, XYZ Company</p>
                    </div>
                  </div>  
                </blockquote>
              </div>-->
            </div>
          </div>
        </div>

        

        
      </div>
    </section> 
<section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"  ><span class="fas fa-diagnoses d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Diagnosis</h3>
            <p>Go for a check up regularly to ensure health safety.</p>
          </div>
           <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="fas fa-head-side-cough d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Dry Cough</h3>
            <p>If one experiences dry cough then its mandatory to visit to the nearest treatement center immediately .</p>
          </div>
           <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="fa fa-lungs-virus d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Effects</h3>
            <p>Coronavirus effects the lungs of a patient severly.</p>
          </div>
           <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="fas fa-head-side-mask d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Cover Face using masks</h3>
            <p>Preventive measure.</p>
          </div>
           <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="fas fa-people-arrows d-block mb-4 " ></span></span>
            <h3 class="mb-2 text-success">Social Distancing</h3>
            <p>Maintain social distancing..</p>
          </div>
          <br><br><br><br>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="fa fa-hands-wash d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Wash Hands Regularly</h3>
            <p>Maintain cleanliness and wash hands regularly.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="fa fa-handshake-slash d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Avoid Handshakes</h3>
            <p>Donot shake hands while communicating/greeting.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="fa fa-laptop-house d-block mb-4"></span></span>
            <h3 class="mb-2 text-success">Stay Home-Stay Safe</h3>
         
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

           <div class="section-title" data-aos="zoom-out">
          
          <p>SERVICES:</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/person_1.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                
                <a href="covid.php"> <button id=mapsbtn>COVID19 DASHBOARD</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/b10.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <br> 

                 <a href="publiccare.php"><button id=mapsbtn>PUBLIC HEALTHCARE LOCATIONS</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/b11.jpg" class="img-fluid" alt="">
            
              </div>
              <center>
              <div class="member-info"><br> <br><br>
                 <a href="medical.php"><button id=mapsbtn>MEDICAL STORES</button></a>
              </div>
              </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/m5.png" class="img-fluid" alt="">
               
              </div><br>
              <center>
              <div class="member-info">
              <a href="check.php"><button id=mapsbtn>CHECK FOR SYMPTOMS</button></a>
              </div>
            </center>
            </div>

          </div>

        </div>

                <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/f9.jpg" class="img-fluid" alt="">
               
              </div>
              <center>
              <div class="member-info">
                <br>
                 <a href="weather.php"><button id=mapsbtn>AMPHAN RELIEF</button></a>
              </div></center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/4.png" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
              
                <a href="labs.php"><button id=mapsbtn>LABS FOR TESTING & RESULTS</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/c2.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                
                <a href="covid.php"><button id=mapsbtn>COUNSELLING FOR PATIENTS & FAMILY</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/c3.png" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                
                <a href="mentalbot.php"><button id=mapsbtn>ONLINE DOCTOR'S APPOINTMENT</button></a>
              </div>
            </div>

          </div>

        </div>
                <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/h1.png" class="img-fluid" alt="">
               
              </div><br><br><br>
              <div class="member-info">
                
                  <a href="home.php"><button id=mapsbtn>HOME TREATMENT & ALARM SYSYTEMS</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/l.png" class="img-fluid" alt="">
              
              </div><br><br><br><br><br>
              <center>
              <div class="member-info">
                
                  <a href="firstres.php"><button id=mapsbtn>FIRST RESPONDERS</button></a>
              </div></center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/l4.png" class="img-fluid" alt="">
                
              </div><br><br><br><br><br>
              <center>
              <div class="member-info">
                
                <a href="tollfree.php"><button id=mapsbtn>TOLL FREE</button></a>
              </div>
            </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/f11.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                
                <a href="funds.php"><button id=mapsbtn>COLLECTION OF FUNDS/RELIEF MATERIALS</button></a>
              </div>
            </div>

          </div>

        </div>

                       <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/a5.gif" class="img-fluid" alt="">
            
              </div><br><br><br>
              <center>
              <div class="member-info">
                
                  <a href="Blog/index.php"><button id=mapsbtn>BLOGS</button></a>
              </div>
            </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/g9.jpg" class="img-fluid" alt="">
           
              </div><br>
              <div class="member-info">
                
                 <a href="govt.php"><button id=mapsbtn>GOVERNMENT SERVICES</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/f8.jpg" class="img-fluid" alt="">
            
              </div>
              <div class="member-info">
                
                 <a href="Blog/index.php"><button id=mapsbtn>FOOD SUPPLY TO ISOLATED PATIENTS</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/g7.png" class="img-fluid" alt="">
           
              </div><br><br>
              <center>
              <div class="member-info">
             <a href="pass.php">   
             <button id=mapsbtn>TRANSPORT PASSES</button></a>
              </div>
            </center>
            </div>

          </div>

        </div>
         

       <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/g1.jpg" class="img-fluid" alt="">
            
              </div><br><br><br>
              <div class="member-info">
              <a href="NEWS/index.html">  
              <button id=mapsbtn>NEWS DASHBOARD</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/b8.png" class="img-fluid" alt="">
          
              </div>
              <center>
              <div class="member-info">
                
                 <a href="courses.php"> <button id=mapsbtn>ONLINE COURSES</button></a>
              </div>
            </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/f8.jpg" class="img-fluid" alt="">
             
              </div>
              <br><br><br>
              <center>
              <div class="member-info">
                
               <a href="ecommerce.php"> <button id=mapsbtn>E-COMMERCE</button></a>
              </div>
            </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/g7.png" class="img-fluid" alt="">
            
              </div><br><br><br><br>
              <center>
              <div class="member-info">
                <a href="cluster.php">
                 <button id=mapsbtn>CLUSTER GEOFENCING</button></a>
              </div></center>
            </div>

          </div>

        </div>
          </div>



    </section><!-- End Team Section -->
<br><br><br><br>
<!--
   <section class="section  bg-light top-slant-white">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Blog</h2>
              <span class="back-text">Our Blog</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_1.jpg');"></a>
              <div class="text">
                <h3><a href="single.html">How To Cook Pasta?</a></h3>
                <p class="sched-time">
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_2.jpg');"></a>
              <div class="text">
                <h3><a href="single.html">How To Cook Pasta?</a></h3>
                <p class="sched-time">
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                
              </div>
              
            </div>
          </div>

        </div>
      </div>

    </section> 
-->
<?php
include('footer.php');
?>



    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    


    <script src="js/main.js"></script>
    <script src="js/main1.js"></script>
    
  </body>
</html>