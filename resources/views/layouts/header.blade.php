<header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <span class="phone-icon"><i class="fa fa-phone"></i> +8809658317</span>
                    <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                    <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">diitlife@gmail.com</a></span>
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