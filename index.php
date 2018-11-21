<?php
    include("db/db.php");
    include("appointment.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Title  -->
    <title>Dev's - Dental Hosipital</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/dev.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="img/core-img/dev.jpeg" alt="logo">
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area gradient-background">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <div class="top-header-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <div class="top-header-menu">
                                <nav class="top-menu">
                                    <ul>
                                        
                                        <li><a data-toggle="modal" data-target="#appointment_modal" style="cursor:pointer;color:white;">Book Appointment</a></li>
                                        <li><a href="#">Contacts</a></li>
                                        <li><a href="#">devsdentalplanet@gmail.com</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.php"><img src="img/core-img/dev.jpeg" alt="Logo" style="height:70px;">&nbsp;DEV'S DENTAL</a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                                <div class="collapse navbar-collapse" id="medicaMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.html">Home</a>
                                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                                <a class="dropdown-item" href="services.html">Services</a>
                                                <a class="dropdown-item" href="blog.html">News</a>
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                                <a class="dropdown-item" href="elements.html">Elements</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.html">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                    
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide height-800 bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">We provide top <br>medical services</h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">More than 30 professionals</h5>
                                <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                    <a data-toggle="modal" data-target="#appointment_modal" class="btn medica-btn">Make an Appointment</a>
                                    <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide height-800 bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">We provide top <br>medical services</h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">More than 30 professionals</h5>
                                <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                    <a data-toggle="modal" data-target="#appointment_modal" class="btn medica-btn">Make an Appointment</a>
                                    <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide height-800 bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">We provide top <br>medical services</h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">More than 30 professionals</h5>
                                <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                    <a data-toggle="modal" data-target="#appointment_modal" class="btn medica-btn">Make an Appointment</a>
                                    <a href="#" class="btn medica-btn ml-2 btn-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Contact Info Area Start ***** -->
    <div class="medica-contact-info-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon mr-30">
                            <img src="img/icons/alarm-clock.png" alt="">
                        </div>
                        <div class="contact-meta">
                            <p>Monday - Saturday <br> 10:00 - 1:00 PM &amp; 5:00 - 9:30 PM <br>Sunday <br>09:30 AM - 2:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon mr-30">
                            <img src="img/icons/envelope.png" alt="">
                        </div>
                        <div class="contact-meta">
                            <p>+91 70101 43299 | 0452 498 6441 <br> devsdentalplanet@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon mr-30">
                            <img src="img/icons/map-pin.png" alt="">
                        </div>
                        <div class="contact-meta">
                            <p>Door no. 84, Plot no. 33, DRO Colony Main Road,<br>KMSL Colony, Alagar Kovil Main Road,<br>K.Pudur, Madurai,<br> Tamil Nadu - 625002<br>India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Info Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area">
        <!-- Card Area -->
        <div class="medica-card-area">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="medica-emergency-card wow fadeInUp" data-wow-delay="0.2s">
                            <h5>For Details</h5>
                            <h4>+91 70101 43299</h4>
                            <p>We are happy to clear all the doubts about dental and our treatments. We care about our customers and we love them.</p>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="medica-doctors-card wow fadeInUp" data-wow-delay="0.4s">
                            <h5>The Doctors</h5>
                            <p>We the doctors assure that we take care for your teeth.</p>
                            
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="medica-appointment-card wow fadeInUp" data-wow-delay="0.6s">
                            <h5>Book an apppointment</h5>
                                Click this button below for appointment                            
                               <button type="button" class="btn medica-btn mt-15" data-toggle="modal" data-target="#appointment_modal">Make an Appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Contact -->
        <div class="medica-about-content section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="medica-about-text">
                            <h2>Welcome to <span>DEV'S</span> Dental Planet</h2>
                            <p>We care for your teeth. We have specialities in the following sectors:</p>
                            <ul>
                                <li>Orthodontics / Clip treatment</li>
                                <li>Pedodontics / Kids Dental treatment</li>
                                <li>Root Canal Treatment (RCT)</li>
                                <li>Crowns and Bridges</li>
                                <li>Dental Implants</li>
                                <li>Complete Denture</li>
                                <li>Cosmetic Treatment</li>
                                <li>Gums treatment</li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="medica-about-thumbnail">
                            <img src="img/bg-img/doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Services Area Start ***** -->
    <section class="medica-services-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/service.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading white-heading">
                        <img src="img/icons/hospital2.png" alt="">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/icons/braces.png" alt="">
                        <h5>Orthodontics / Clip treatment</h5>
                        <p>Clip treatment is a way of straightening or moving teeth, to improve the appearance of the teeth. <a href="">Read More..</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.3s">
                        <img src="img/icons/tooth.png" alt="">
                        <h5>Pedodontics Dental treatment</h5>
                        <p>Pedodontics or pediatric dentistry is a dental specialty that focuses on treatment of infants, children, and young adults.<a href="">Read More..</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/icons/dental-care.png" alt="">
                        <h5>Root Canal Treatment (RCT)</h5>
                        <p>Dev ’s Dental Planet  is specialized in root canal treatment and it is one of the most common dental procedural treatments .<a href="">Read More..</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/icons/crown.png" alt="">
                        <h5>Crowns and Bridges</h5>
                        <p>A dental crown or “cap” is a covering that fits over a damaged, decayed or unattractive tooth. It can <a href="">Read More..</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/icons/implant.png" alt="">
                        <h5>Dental Implants</h5>
                        <p>A dental implant can be a notion of an artificial tooth root that is submerged into the jaw bone. The implant material is <a href="">Read More..</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single-service-area">
                        <img src="img/icons/teeth.png" alt="">
                        <h5>Complete Denture</h5>
                        <p>Complete dentures are full-coverage oral prosthetic devices that replace a complete arch of missing teeth. <a href="">Read More..</a></p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single-service-area">
                        <img src="img/icons/cos.png" alt="">
                        <h5>Aesthetic dentistry</h5>
                        <p>They realize and want to consult the dentist for improving their dental imperfections, chipped,.<a href="">Read More..</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single-service-area">
                        <img src="img/icons/gum.png" alt="">
                        <h5>Gum Treatment</h5>
                        <p>During a typical checkup your dentist or dental hygienist will remove the plaque and tartar. <a href="">Read More..</a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Doctors Area Start ***** -->
    <section class="medica-doctors-area section_padding_100_20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <img src="img/icons/doctor.png" alt="">
                        <h2>Our Doctors</h2>
                        <p>Phasellus at nunc orcidonec ipsum metus, pharetra quis nunc sit amet</p>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-12 col-sm-6 col-lg-3" style="margin-left:25%;">
                    <div class="single-doctor-area">
                        <div class="doctor-thumbnail">
                            <img src="img/bg-img/d2.jpg" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. M.M.Varadharaja M.D.S</h5>
                            <h6>Dentist, Orthodontist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area">
                        <div class="doctor-thumbnail">
                            <img src="img/bg-img/d3.jpg" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Udhya.J M.D.S</h5>
                            <h6>Pediatric Dentist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Doctors Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="medica-testimonials-area section_padding_100 bg-img background-overlay" style="background-image: url(img/bg-img/hero2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading white-heading">
                        <img src="img/icons/stethoscope.png" alt="">
                        <h2>Clients Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials-slider owl-carousel">
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Testimonials Slide -->
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->

    
    <!-- ***** Appointment Area Start ***** -->
    <section class="medica-book-an-appointment-area section_padding_100_0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="medica-appointment-card">
                        <h5>Book an apppointment</h5>
                                <p style="color:white;">You have gone through our specialities and our stuff we are clean open to our patients if you need an appointment just trust us and click the link below to open a new path</p>
                               <div class="col-12">
                                    <button type="button" data-toggle="modal" data-target="#appointment_modal" class="btn medica-btn mt-15">Make an Appointment</button>
                                </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="medica-appointment-thumb">
                        <img src="img/bg-img/medical1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Appointment Area End ***** -->

    
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section_padding_100 bg-default">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area">
                            <div class="footer-logo">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/core-img/dev.jpeg" alt="" style="height:100px;width:100px;"><br><span style="color:white">DEV'S DENTAL PLANET</span>
                            </div>
                            <p>Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh.</p>
                            <div class="footer-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3" style="margin-left:50%;">
                        <div class="footer-widget-area">
                            <div class="widget-title">
                                <h6>contact us</h6>
                            </div>

                            <div class="widget-contact">
                                <!-- Single Contact Info -->
                                <div class="widget-single-contact d-flex align-items-center">
                                    <div class="widget-contact-thumbnail mr-15">
                                        <img src="img/icons/alarm-clock.png" alt="">
                                    </div>
                                    <div class="widget-contact-info">
                                        <p>Monday - Saturday <br> 10:00 - 1:00 PM &amp; 5:00 - 9:30 PM <br>Sunday <br>09:30 AM - 2:00 PM</p>
                                    </div>
                                </div>
                                <!-- Single Contact Info -->
                                <div class="widget-single-contact d-flex align-items-center">
                                    <div class="widget-contact-thumbnail mr-15">
                                        <img src="img/icons/map-pin.png" alt="">
                                    </div>
                                    <div class="widget-contact-info">
                                        <p>Door no. 84, Plot no. 33, DRO Colony Main Road,<br>KMSL Colony, Alagar Kovil Main Road,<br>K.Pudur, Madurai,<br> Tamil Nadu - 625002<br>India</p>
                                    </div>
                                </div>
                                <!-- Single Contact Info -->
                                <div class="widget-single-contact d-flex align-items-center">
                                    <div class="widget-contact-thumbnail mr-15">
                                        <img src="img/icons/envelope.png" alt="">
                                    </div>
                                    <div class="widget-contact-info">
                                        <p>+91 70101 43299<br> devsdentalplanet@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="bottom-footer-content h-100 d-md-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</p>
                            </div>
                            <!-- Footer Menu -->
                            <div class="footer-menu">
                                <p>Designed By ANONYMOUS STEPPERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="success">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="modal_body">Select "Logout" below if you are ready to end your current session.</div>
          
        </div>
      </div>
    </div>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>



<?php
if(isset($_POST['submit']))
{
    $email = h(protect($_POST['email']));
    $phone_no = h(protect($_POST['phone_no']));
    $appointment_date = h(protect($_POST['appointment_date']));
    $get_time = h(protect($_POST['get_time']));
    $start_time = ''.$appointment_date.' '.$get_time.'';
    $end_time = date('m/d/Y H:i:s',strtotime('+0 hour +30 minutes',strtotime($start_time)));
    $name = h(protect($_POST['name']));
    $reason = h(protect($_POST['reason']));
    $confirm = 0;
    $consult=0;
    if(empty($email) || empty($phone_no) || empty($appointment_date) || empty($start_time) || empty($name)||empty($reason))
    {
        echo "<script>$('#modal_body').html('<p>Please Fill all the Fields<p>');
            $('#success').modal();</script>";
    }
    else
    {
        $insert_query = $con->query("INSERT into appointment (email,phone_number,start_time,end_time,name,reason,confirm,consult) values ('$email','$phone_no','$start_time','$end_time','$name','$reason','$confirm','$consult')");
        if($insert_query)
        {
            echo "<script>
            $('#modal_body').html('<p>Appointment Requested<p>');
            $('#success').modal();</script>";
        }
        else
        {
            echo "<script>
            $('#modal_body').html('<p>Something Went Wrong<p>');
            $('#success').modal();</script>";
        }
    }
}

?>