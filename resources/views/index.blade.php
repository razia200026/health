<!DOCTYPE html>
<html lang="en">
<head>
    <title>Health - Medical Website Template</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <span class="phone-icon"><i class="fa fa-phone"></i> +8809658317</span>
                    <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                    <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">diithealth@gmail.com</a></span>
                </div>
                <ul class="social-icon" style="text-align: right">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
            </div>
        </div>
    </header>
 
    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo.png" width="150px" alt=""></a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#team" class="smoothScroll">Doctor's</a></li>
                    <li><a href="#special" class="smoothscroll">Speciality's</a></li>
                    <li><a href="#patient" class="smoothscroll">Patient Reviews</a></li>

                    <!-- <li><a href="#google-map" class="smoothScroll">Contact</a></li> -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @else
                    <li class="smoothScroll"><a href="{{ url('/home') }}">Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                    <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <img src="images/Fav.png" style="width: 100px; display: block; margin: 0 auto;">
                                <h3>Welcome To</h3>
                                <h2 style="color:#ffff">Life-changing DIIT <i class="fa fa-h-square"></i>ealth Care</h2>
                                <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-second" >
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make your life happier</h3>
                                <h1>Healthy Living</h1>
                                <a href="#about" class="section-btn btn btn-default btn-primary smoothScroll">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
<section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">DIIT <i class="fa fa-h-square" style="color:#1B61AB"></i>ealth Care Center</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>DIIT Health Care Center is an acute care facility serving as the major referral center for Dhaka, Bangladesh. </p>
                            <p>We offer centers for Level 1 trauma, burn, stroke, cardiovascular disease, and sickle cell disease. </p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Razia</h3>
                                        <p>General Principal</p>
                                   </figcaption>
                              </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1" style="background-color: #89CFF0">
        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('images/team-image1.jpg') }}" class="img-responsive" alt="">
                        <div class="team-info">
                            <h3>Prof. Bahar Hussain</h3>
                            <p>Senior Consultant</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 015289640</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:baharhussain@gmail.com">baharhussain@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="mailto:baharhussain@gmail.com" class="fa fa-envelope-o"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('images/team-image2.jpg') }}" class="img-responsive" alt="">
                        <div class="team-info">
                            <h3>Dr. Asif Manwar</h3>
                            <p>Associate Consultant, Cardiology</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 018957463</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:asifmanwar@gmail.com">asifmanwar@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook-square"></a></li>
                                <li><a href="mailto:asifmanwar@gmail.com" class="fa fa-envelope-o"></a></li>
                                <li><a href="#" class="fa fa-flickr"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{ asset('images/team-image3.jpg') }}" class="img-responsive" alt="">
                        <div class="team-info">
                            <h3>Dr. Mahmudur Rahman</h3>
                            <p>Medical Officer</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 017846300</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:mahmudurrahman@gmail.com">mahmudurrahman@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="mailto:mahmudurrahman@gmail.com" class="fa fa-envelope-o"></a></li>
                                <li><a href="#" class="fa fa-skype"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <img src="{{ asset('images/appointment-image.jpg') }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                @auth
                    <!-- APPOINTMENT FORM -->
                    <form id="appointment-form" role="form" method="post" action="{{ route('appointments.store') }}">
                        @csrf
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="department">Select Department</label>
                                <select class="form-control" name="department" required>
                                    <option>General Health</option>
                                    <option>Cardiology</option>
                                    <option>Dental</option>
                                    <option>Medical Research</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                <label for="message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                            </div>
                        </div>
                    </form>
                @else
                    <!-- LOGIN PROMPT -->
                    <div class="alert alert-warning">
                        <p>You need to <a href="{{ route('login') }}">log in</a> to make an appointment. Don't have an account? <a href="{{ route('register') }}">Register here</a>.</p>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>18/F , Bir Uttam Qazi Nuruzzaman Sarak , West Panthapath , Dhaka 1205.</p>
                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> +8809658317</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">diithealth@gmail.com</a></p>
                              </div>
                         </div>
                    </div>  
                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2024 DIIT Health Care Center 
                                   
                                   | Design: code_chasers</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>
     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
</body>
</html>
