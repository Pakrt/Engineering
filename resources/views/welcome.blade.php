<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Engineering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/landing/images/inaco.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/landing/css/animate.css">
    <link rel="stylesheet" href="assets/landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/landing/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assets/landing/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/landing/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/landing/css/style.css">

  </head>
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="#">Engineering</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-10 ml-auto">
              <li class="nav-item">
                {{-- <a class="nav-link active" href="index.html">Login</a> --}}
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><h5 style="color: white">LOGIN</h5></a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                        @endauth
                    </div>
                    @endif
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="services.html">Mini Jelly</a>
                  <a class="dropdown-item" href="services.html">Jelly Boi</a>
                  <a class="dropdown-item" href="services.html">Nata de Coco</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="about.html">Company Profile</a>
                  <a class="dropdown-item" href="about.html">Building</a>
                  <a class="dropdown-item" href="about.html">Achievement</a>
                  <a class="dropdown-item" href="about.html">Legal</a>
                  <a class="dropdown-item" href="about.html">Find Us</a>
                  <a class="dropdown-item" href="contact.html">Contact Us</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li> --}}
            </ul>


          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('assets/landing/images/hero_2.jpg');">
      <!-- <div class="slider-item" style="background-image: url('assets/landing/images/i2.jpg');"> -->
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              <div class="btn-play-wrap mx-auto"><p class="mb-4"><a href="assets/landing/inaco.mp4" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p></div>
              <h1 class="mb-4"><span>ENGINEER</span></h1>
              <p class="mb-5 w-75">Someone who does precision guess work based on unreliable data provided by those of questionable knowledge. <br>See also Wizard, Magiciain </p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('assets/landing/images/hero_3.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              <div class="btn-play-wrap mx-auto"><p class="mb-4"><a href="assets/landing/inaco.mp4" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p></div>
              <h1><span>An ENGINEER is</span></h1>
              <p class="mb-5 w-75">Someone who washes his hands before going to the toilet.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
    </div>

    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-network text-primary"></span></div>
              <div class="media-body">
                <h3 class="heading">Automation</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-ios-gear text-primary"></span></div>
              <div class="media-body">
                <h3 class="heading">Maintenance Services</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 element-animate ">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-android-laptop text-primary"></span></div>
              <div class="media-body">
                <h3 class="heading">Information and Technology</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2>We Are Reliable Engineering In Workshop</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-4 order-lg-1">
            <div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('assets/landing/images/about_1.jpg');"></div></div></div>
          </div>

          <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion ion-leaf display-4 text-primary"></span>
                <h3>Green Energy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts.</p>
              </div>
            </div>

            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion ion-android-bulb display-4 text-primary"></span>
                <h3>Precision Mechanics</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts.</p>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion ion-alert-circled display-4 text-primary"></span>
                <h3>Construction Machines</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts.</p>
              </div>
            </div>

            <div class="feature-1 d-md-flex">
              <div class="align-self-center">
                <span class="ion ion-android-happy display-4 text-primary"></span>
                <h3>Reliable and Stable</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts.</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>


    <section class="section element-animate">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-7 order-md-2">
            <div class=""><div class="frame"><img src="assets/landing/images/about_2.jpg" alt="Image" class="img-fluid"></div></div>
          </div>
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
              <h2 class="block-41-heading mb-5">Create, Enhance and Sustain</h2>
              <div class="block-41-text">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>



    <section class="section border-t pb-0">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Our Latest Projects</h2>
            <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>Ducting Design in Colorado</h3>
              <span class="ion-plus icon"></span>
              <img src="assets/landing/images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>Tanks Project In California</h3>
              <span class="ion-plus icon"></span>
              <img src="assets/landing/images/img_2.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>Structural Design in New York</h3>
              <span class="ion-plus icon"></span>
              <img src="assets/landing/images/img_3.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>Stacks Design</h3>
              <span class="ion-plus icon"></span>
              <img src="assets/landing/images/img_4.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>Intercate Custom</h3>
              <span class="ion-plus icon"></span>
              <img src="assets/landing/images/img_1.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 element-animate">
            <a href="#" class="link-thumbnail">
              <h3>Banker Design</h3>
              <span class="ion-plus icon"></span>
              <img src="assets/landing/images/img_2.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>

      </div>
    </section>
    <!-- END section -->

    {{-- <section class="section bg-light block-11">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/landing/images/person_3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">John Smith</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/landing/images/person_2.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">Joshua Darren</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/landing/images/person_3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">John Smith</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-33 h-100">
                <div class="vcard d-flex mb-3">
                  <div class="image align-self-center"><img src="assets/landing/images/person_3.jpg" alt="Person here"></div>
                  <div class="name-text align-self-center">
                    <h2 class="heading">John Smith</h2>
                    <span class="meta">Companies Client</span>
                  </div>
                </div>
                <div class="text">
                  <blockquote>
                    <p>&rdquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &ldquo;</p>
                  </blockquote>
                </div>
              </div>
          </div>

        </div>
      </div>
    </div> --}}
    <!-- END .block-4 -->
    {{-- </section> --}}

    {{-- <section class="section blog">
      <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Blog Posts</h2>
            <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="assets/landing/images/img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="assets/landing/images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>


          </div>
          <div class="col-md-6">
            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="assets/landing/images/img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

            <div class="media mb-4 d-md-flex d-block element-animate">
              <a href="single.html" class="mr-5"><img src="assets/landing/images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <div class="media-body">
                <span class="post-meta">Feb 26th, 2018</span>
                <h3 class="mt-2 text-black"><a href="single.html">Separated they live in Bookmarksgrove right</a></h3>
                <p><a href="single.html" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section class="section bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <h2 class="text-white mb-0">Create, Enhance and Sustain</h2>
            <p class="text-white lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. .</p>
          </div>
          <div class="col-lg-4 text-lg-right">
            <a href="https://free-template.co/" class="btn btn-outline-white px-4 py-3">Download This Template</a>
          </div>
        </div>
      </div>
    </section> --}}
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Trust me, We're all Engineer !!</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-6 mb-5 pl-md-6">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Address:</span>
                <span >Jl. Gunung Gangsir no.13, Pandaan, Pasuruan 67156</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span >(0343) 631178</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span >fista.danianta@inacofood.com</span></li>
            </ul>
          </div>
          {{-- <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div> --}}
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
             <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="assets/landing/js/jquery-3.2.1.min.js"></script>
    <script src="assets/landing/js/popper.min.js"></script>
    <script src="assets/landing/js/bootstrap.min.js"></script>
    <script src="assets/landing/js/owl.carousel.min.js"></script>
    <script src="assets/landing/js/jquery.waypoints.min.js"></script>
    <script src="assets/landing/js/jquery.fancybox.min.js"></script>
    <script src="assets/landing/js/main.js"></script>

    <script src="assets/landing/js/main.js"></script>

  </body>
</html>
