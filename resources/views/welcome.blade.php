<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Engineering | </title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <!-- Bootstrap Core CSS -->
        <link href="/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="/assets/css/animate.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!--My admin Custom CSS -->
        <link href="/assets/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <!-- animation CSS -->
        <link href="/assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="/assets/css/colors/blue-dark.css" id="theme" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(28, 24, 37);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 20px">Sistem Informasi Engineering</div>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark"><h5>Login</h5></a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                        @endauth
                    </div>
                    @endif
                    <div class="panel-wrapper p-b-10 collapse in">
                        {{-- <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item" data-interval="2000" ><img src="/assets/plugins/images/heading-bg/11.jpg" alt="Owl Image"></div>
                            <div class="item" data-interval="2000" ><img src="/assets/plugins/images/heading-bg/21.jpg" alt="Owl Image"></div>
                            <div class="item" data-interval="2000" ><img src="/assets/plugins/images/heading-bg/31.jpg" alt="Owl Image"></div>
                        </div> --}}

                        {{-- <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-interval="2000">
                                <img src="/assets/plugins/images/heading-bg/11.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-interval="2000">
                                <img src="/assets/plugins/images/heading-bg/21.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-interval="2000">
                                <img src="/assets/plugins/images/heading-bg/31.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div> --}}

                        <div id="carousel-example-captions-3" data-ride="carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-captions-3" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-captions-3" data-slide-to="1"></li>
                                <li data-target="#carousel-example-captions-3" data-slide-to="2"></li>
                                <li data-target="#carousel-example-captions-3" data-slide-to="3"></li>
                                <li data-target="#carousel-example-captions-3" data-slide-to="4"></li>
                                <li data-target="#carousel-example-captions-3" data-slide-to="5"></li>
                            </ol>
                            <div role="listbox" class="carousel-inner">
                                <div class="item active"> <img src="/assets/plugins/images/heading-bg/11.jpg" alt="First slide image"> </div>
                                <div class="item"> <img src="/assets/plugins/images/heading-bg/21.jpg" alt="Second slide image"> </div>
                                <div class="item"> <img src="/assets/plugins/images/heading-bg/31.jpg" alt="Third slide image"> </div>
                                <div class="item"> <img src="/assets/plugins/images/heading-bg/6239.jpg" alt="Fourth slide image"> </div>
                                <div class="item"> <img src="/assets/plugins/images/heading-bg/1721.jpeg" alt="Fifth slide image"> </div>
                                <div class="item"> <img src="/assets/plugins/images/heading-bg/1731.jpeg" alt="Sixth slide image"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="/assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="/assets/js/waves.js"></script>
        <!-- jQuery for carousel -->
        <script src="/assets/plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
        <script src="/assets/plugins/bower_components/owl.carousel/owl.custom.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/assets/js/custom.min.js"></script>
        <!--Style Switcher -->
        <script src="/assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>
</html>
