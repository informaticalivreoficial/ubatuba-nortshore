<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="language" content="pt-br" />
    <meta name="author" content="{{env('DESENVOLVEDOR')}}"/>
    <meta name="designer" content="Renato Montanari">
    <meta name="publisher" content="Renato Montanari">
    <meta name="url" content="{{$configuracoes->dominio}}" />
    <meta name="keywords" content="{{$configuracoes->metatags}}">
    <meta name="distribution" content="web">
    <meta name="rating" content="general">
    <meta name="date" content="Dec 26">

    {!! $head ?? '' !!}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{$configuracoes->getfaveicon()}}">

    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/search.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/aos2.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/menu.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/maps.css')}}">
    <link rel="stylesheet" id="color" href="{{url('frontend/'.env('APP_TEMPLATE').'/css/colors/pink.css')}}">

    @hasSection('css')
        @yield('css')
    @endif
</head>

<body class="homepage-9 hp-6 homepage-1 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html">
                                <img src="images/logo-white-1.svg" data-sticky-logo="images/logo-red.svg" alt="">
                            </a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="#">Home Map</a>
                                            <ul>
                                                <li><a href="index-9.html">Home Map Style 1</a></li>
                                                <li><a href="index-12.html">Home Map Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Image</a>
                                            <ul>
                                               <li><a href="index.html">Modern Home</a></li>
                                                <li><a href="index-2.html">Home Boxed Image</a></li>
                                                <li><a href="index-3.html">Home Modern Image</a></li>
                                                <li><a href="index-5.html">Home Minimalist Style</a></li>
                                                <li><a href="index-6.html">Home Parallax Image</a></li>
                                                <li><a href="index-8.html">Home Search Form</a></li>
                                                <li><a href="index-10.html">Modern Full Image</a></li>
                                                <li><a href="index-15.html">Home Typed Image</a></li>
                                                <li><a href="index-17.html">Modern Parallax Image</a></li>
                                                <li><a href="index-18.html">Image Filter Search</a>
                                                <li><a href="index-21.html">Parallax Image video</a></li>
												<li><a href="index-23.html">Home Image</a></li>
												<li><a href="index-24.html">Image and video</a></li>
                                            </ul>
                                            </li>
                                            <li><a href="#">Home Video</a>
                                                <ul>
                                                    <li><a href="index-4.html">Home Video Image</a></li>
                                                    <li><a href="index-7.html">Home Video</a></li>
                                                    <li><a href="index-20.html">Home Modern Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Slider</a>
                                                <ul>
                                                    <li><a href="index-11.html">Slider Presentation 2</a></li>
                                                    <li><a href="index-16.html">Slider Presentation 3</a></li>
                                                    <li><a href="index-19.html">Home Modern Slider</a></li>
                                                    <li><a href="index-22.html">Home Image Slider</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Styles</a>
                                                <ul>
                                                    <li><a href="index-13.html">Home Style Dark</a></li>
                                                    <li><a href="index-14.html">Home Style White</a></li>
                                                </ul>
                                            </li>
                                    </ul>
                                    </li>
                                    <li><a href="#">Listing</a>
                                        <ul>
                                            <li><a href="#">Listing Grid</a>
                                                <ul>
                                                    <li><a href="properties-grid-1.html">Grid View 1</a></li>
                                                    <li><a href="properties-grid-2.html">Grid View 2</a></li>
                                                    <li><a href="properties-grid-3.html">Grid View 3</a></li>
                                                    <li><a href="properties-grid-4.html">Grid View 4</a></li>
                                                    <li><a href="properties-full-grid-1.html">Grid Fullwidth 1</a></li>
                                                    <li><a href="properties-full-grid-2.html">Grid Fullwidth 2</a></li>
                                                    <li><a href="properties-full-grid-3.html">Grid Fullwidth 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Listing List</a>
                                                <ul>
                                                    <li><a href="properties-full-list-1.html">List View 1</a></li>
                                                    <li><a href="properties-list-1.html">List View 2</a></li>
                                                    <li><a href="properties-full-list-2.html">List View 3</a></li>
                                                    <li><a href="properties-list-2.html">List View 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Listing Map</a>
                                                <ul>
                                                    <li><a href="properties-half-map-1.html">Half Map 1</a></li>
                                                    <li><a href="properties-half-map-2.html">Half Map 2</a></li>
                                                    <li><a href="properties-half-map-3.html">Half Map 3</a></li>
                                                    <li><a href="properties-top-map-1.html">Top Map 1</a></li>
                                                    <li><a href="properties-top-map-2.html">Top Map 2</a></li>
                                                    <li><a href="properties-top-map-3.html">Top Map 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agent View</a>
                                                <ul>
                                                    <li><a href="agents-listing-grid.html">Agent View 1</a></li>
                                                    <li><a href="agents-listing-row.html">Agent View 2</a></li>
                                                    <li><a href="agents-listing-row-2.html">Agent View 3</a></li>
                                                    <li><a href="agent-details.html">Agent Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agencies View</a>
                                                <ul>
                                                    <li><a href="agencies-listing-1.html">Agencies View 1</a></li>
                                                    <li><a href="agencies-listing-2.html">Agencies View 2</a></li>
                                                    <li><a href="agencies-details.html">Agencies Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Property</a>
                                        <ul>
                                            <li><a href="single-property-1.html">Single Property 1</a></li>
                                            <li><a href="single-property-2.html">Single Property 2</a></li>
                                            <li><a href="single-property-3.html">Single Property 3</a></li>
                                            <li><a href="single-property-4.html">Single Property 4</a></li>
                                            <li><a href="single-property-5.html">Single Property 5</a></li>
                                            <li><a href="single-property-6.html">Single Property 6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop-with-sidebar.html">Product Sidebar</a></li>
                                                    <li><a href="shop-full-page.html">Product Fullpage</a></li>
                                                    <li><a href="shop-single.html">Product Single</a></li>
                                                    <li><a href="shop-checkout.html">Checkout Page</a></li>
                                                    <li><a href="shop-order.html">Order Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">User Panel</a>
                                                <ul>
                                                    <li><a href="dashboard.html">Dashboard</a></li>
                                                    <li><a href="user-profile.html">User Profile</a></li>
                                                    <li><a href="my-listings.html">My Properties</a></li>
                                                    <li><a href="favorited-listings.html">Favorited Properties</a></li>
                                                    <li><a href="add-property.html">Add Property</a></li>
                                                    <li><a href="payment-method.html">Payment Method</a></li>
                                                    <li><a href="invoice.html">Invoice</a></li>
                                                    <li><a href="change-password.html">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="pricing-table.html">Pricing Tables</a></li>
                                            <li><a href="404.html">Page 404</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="under-construction.html">Under Construction</a></li>
                                            <li><a href="ui-element.html">UI Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="#">Grid Layout</a>
                                                <ul>
                                                    <li><a href="blog-full-grid.html">Full Grid</a></li>
                                                    <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">List Layout</a>
                                                <ul>
                                                    <li><a href="blog-full-list.html">Full List</a></li>
                                                    <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                   
                    <!-- Right Side Content / End -->

                  

                    <!-- Right Side Content / End -->

                   

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        
        @yield('content')
        

        <!-- START FOOTER -->
        <footer class="first-footer rec-pro">
            <div class="top-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/logo-footer.svg" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@findhouses.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                        <li><a href="properties-full-list.html">Properties List</a></li>
                                        <li><a href="properties-details.html">Property Details</a></li>
                                        <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="agent-details.html">Agents Details</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer rec-pro">
                <div class="container-fluid sd-f">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- ARCHIVES JS -->
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/rangeSlider.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/tether.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/moment.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/bootstrap.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/mmenu.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/mmenu.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/aos.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/aos2.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/animate.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/slick.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/fitvids.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/typed.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/jquery.counterup.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/smooth-scroll.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/lightcase.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/search.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/owl.carousel.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/ajaxchimp.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/newsletter.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/jquery.form.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/jquery.validate.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/searched.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/forms-2.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/map-style2.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/range.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/color-switcher.js')}}"></script>

        @hasSection('js')
            @yield('js')
        @endif

        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <script>
            var typed = new Typed('.typed', {
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $('.job_clientSlide').owlCarousel({
                items: 2,
                loop: true,
                margin: 30,
                autoplay: false,
                nav: true,
                smartSpeed: 1000,
                slideSpeed: 1000,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    991: {
                        items: 3
                    }
                }
            });

        </script>

        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 7,
                        margin: 20
                    }
                }
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

        <!-- MAIN JS -->
        <script src="{{url('frontend/'.env('APP_TEMPLATE').'/js/script.js')}}"></script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
