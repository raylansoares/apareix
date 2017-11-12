<!DOCTYPE html>
<html>
<head>
    <title>Responsive website template for developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 website landing page for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('_plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('_plugins/font-awesome/css/font-awesome.css') }}">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('_css/styles.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">
        <h1 class="logo">
            <a class="scrollto" href="#hero">
                <span class="logo-icon-wrapper"><img class="logo-icon" src="{{ asset('_images/logo-icon.svg') }}" alt="icon"></span>
                <span class="text"><span class="highlight">APP</span>KIT</span></a>
        </h1><!--//logo-->
        <nav class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item"><a class="scrollto" href="#about">About</a></li>
                    <li class="nav-item"><a class="scrollto" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>
                    <li class="nav-item"><a class="scrollto" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="scrollto" href="#contact">Contact</a></li>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header-->

<div id="hero" class="hero-section">

    <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">

        <div class="figure-holder-wrapper">
            <div class="container">
                <div class="row">
                    <div class="figure-holder">
                        <img class="figure-image img-responsive" src="{{ asset('_images/imac.png') }}" alt="image" />
                    </div><!--//figure-holder-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//figure-holder-wrapper-->

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
            <li data-slide-to="1" data-target="#hero-carousel"></li>
            <li data-slide-to="2" data-target="#hero-carousel"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item item-1 active">
                <div class="item-content container">
                    <div class="item-content-inner">

                        <h2 class="heading">AppKit is the perfect front-end <br class="hidden-xs">template for app developers</h2>
                        <p class="intro">It helps developers to build beautiful and user-friendly web apps quickly and easily!</p>
                        <a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Get Started</a>

                    </div><!--//item-content-inner-->
                </div><!--//item-content-->
            </div><!--//item-->

            <div class="item item-2">
                <div class="item-content container">
                    <div class="item-content-inner">

                        <h2 class="heading">Angular Lover?</h2>
                        <p class="intro">AppKit also comes with an Angular JS version. It empowers developers to create UI components with very little code. Feeding data into AppKit directives is quick and easy.</p>
                        <a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Find out more</a>

                    </div><!--//item-content-inner-->
                </div>
            </div><!--//item-->

            <div class="item item-3">
                <div class="item-content container">
                    <div class="item-content-inner">

                        <h2 class="heading">Ready to build outstanding apps?</h2>
                        <p class="intro">Get AppKit today and it will supercharge your development. It's a must-have for any developers who are serious about building great products!</p>
                        <a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Try it now</a>

                    </div><!--//item-content-inner-->
                </div>
            </div><!--//item-->
        </div><!--//carousel-inner-->

    </div><!--//carousel-->
</div><!--//hero-->

<div id="about" class="about-section">
    <div class="container text-center">
        <h2 class="section-title">Why Use AppKit?</h2>
        <p class="intro">Appkit uses modern front-end technologies and is packed with useful components and widgets to speed up your app development</p>
        <ul class="technologies list-inline">
            <li><img src="{{ asset('__images') }}" alt="Bootstrap"></li>
            <li><img src="{{ asset('_images/logo-angular.svg') }}" alt="Angular"></li>
            <li><img src="{{ asset('_images/logo-html5.svg') }}" alt="HTML5"></li>
            <li><img src="{{ asset('_images/logo-css3.svg') }}" alt="CSS3"></li>
            <li><img src="{{ asset('_images/logo-less.svg') }}" alt="Less"></li>
            <li><img src="{{ asset('_images/logo-jquery.svg') }}" alt="jQuery"></li>
        </ul>

        <div class="items-wrapper row">
            <div class="item col-sm-4 col-xs-12">
                <div class="item-inner">
                    <div class="figure-holder">
                        <img class="figure-image" src="{{ asset('_images/figure-1.png') }}" alt="image">
                    </div><!--//figure-holder-->
                    <h3 class="item-title">UX-Centered Design</h3>
                    <div class="item-desc">
                        Bespoke UX/UI design to enhance your app's user experience. Let AppKit take care of the design so you can develop without design resources.
                    </div><!--//item-desc-->
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-sm-4 col-xs-12">
                <div class="item-inner">
                    <div class="figure-holder">
                        <img class="figure-image" src="{{ asset('_images/figure-2.png') }}" alt="image">
                    </div><!--//figure-holder-->
                    <h3 class="item-title">Supercharge App Development</h3>
                    <div class="item-desc">
                        AppKit provides developers with a ready-made front-end solution so you can concentrate on making your app’s back-end robust and awesome. It empowers small teams to create big things. </div><!--//item-desc-->
                </div><!--//item-inner-->
            </div><!--//item-->
            <div class="item col-sm-4 col-xs-12">
                <div class="item-inner">
                    <div class="figure-holder">
                        <img class="figure-image" src="{{ asset('_images/figure-3.png') }}" alt="image">
                    </div><!--//figure-holder-->
                    <h3 class="item-title">Mobile First</h3>
                    <div class="item-desc">
                        Built on the popular Bootstrap framework, so the design is “Mobile First” and fully responsive. For a startup, building an HTML5 webapp which also works across mobile devices is the most cost-effective way to get your product off the ground.</div><!--//item-desc-->
                </div><!--//item-inner-->
            </div><!--//item-->
        </div><!--//items-wrapper-->
    </div><!--//container-->
</div><!--//about-section-->

<div id="testimonials" class="testimonials-section">
    <div class="container">
        <h2 class="section-title text-center">Many Happy Customers</h2>
        <div class="item center-block">
            <div class="profile-holder">
                <img class="profile-image" src="{{ asset('_images/profile-1.png') }}" alt="profile">
            </div>
            <div class="quote-holder">
                <blockquote class="quote">
                    <p>Testimonial goes here Donec felis odio, sagittis eu cursus ac, porttitor eu purus. In a bibendum dui. Nullam id est sed felis rutrum tincidunt eu nec nisi morbi euismod semper neque sed lobortis.</p>
                    <div class="quote-source">
                        <span class="name">@JohnK,</span>
                        <span class="meta">San Francisco</span>
                    </div><!--//quote-source-->
                </blockquote>
            </div><!--//quote-holder-->
        </div><!--//item-->
        <div class="item item-reversed center-block">
            <div class="profile-holder">
                <img class="profile-image" src="{{ asset('_images/profile-2.png') }}" alt="profile">
            </div>
            <div class="quote-holder">
                <blockquote class="quote">
                    <p>Testimonial goes here fermentum sed pharetra in, aliquet sodales quam. Ut sed turpis quis orci viverra aliquet interdum ut ipsum. </p>
                    <div class="quote-source">
                        <span class="name">@LisaWhite,</span>
                        <span class="meta">London</span>
                    </div><!--//quote-source-->
                </blockquote>
            </div><!--//quote-holder-->
        </div><!--//item-->
        <div class="item center-block">
            <div class="profile-holder">
                <img class="profile-image" src="{{ asset('_images/profile-3.png') }}" alt="profile">
            </div>
            <div class="quote-holder">
                <blockquote class="quote">
                    <p>Testimonial goes here vestibulum non hendrerit lorem, luctus tincidunt erat. Sed pharetra aliquam posuere. Pellentesque sollicitudin.</p>
                    <div class="quote-source">
                        <span class="name">@MattH,</span>
                        <span class="meta">Berlin</span>
                    </div><!--//quote-source-->
                </blockquote>
            </div><!--//quote-holder-->
        </div><!--//item-->
        <div class="item item-reversed center-block">
            <div class="profile-holder">
                <img class="profile-image" src="{{ asset('_images/profile-4.png') }}" alt="profile">
            </div>
            <div class="quote-holder">
                <blockquote class="quote">
                    <p>Testimonial goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis</p>
                    <div class="quote-source">
                        <span class="name">@RyanW,</span>
                        <span class="meta">Paris</span>
                    </div><!--//quote-source-->
                </blockquote>

            </div><!--//quote-holder-->
        </div><!--//item-->
    </div><!--//container-->
</div><!--//testimonials-->

<div id="features" class="features-section">
    <div class="container text-center">
        <h2 class="section-title">Discover Features</h2>
        <p class="intro">AppKit comes with an AngularJS version, 4 colour schemes and 100+ components</p>

        <div class="tabbed-area row">

            <!-- Nav tabs -->
            <ul class="feature-nav nav nav-pill nav-stacked text-left col-md-4 col-sm-6 col-xs-12 col-md-push-8 col-sm-push-6 col-xs-push-0" role="tablist">
                <li role="presentation" class="active"><a href="#feature-1" aria-controls="feature-1" role="tab" data-toggle="tab"><i class="fa fa-magic"></i>20+ Use Case-based App Pages</a></li>
                <li role="presentation"><a href="#feature-2" aria-controls="feature-2" role="tab" data-toggle="tab"><i class="fa fa-cubes"></i>100+ Components and Widgets</a></li>
                <li role="presentation"><a href="#feature-3" aria-controls="feature-3" role="tab" data-toggle="tab"><i class="fa fa-bar-chart"></i>Useful Chart Libraries</a></li>
                <li role="presentation"><a href="#feature-4" aria-controls="feature-4" role="tab" data-toggle="tab"><i class="fa fa-star"></i>AngularJS Version Included</a></li>
                <li role="presentation"><a href="#feature-5" aria-controls="feature-5" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i>Built on Bootstrap 3</a></li>
                <li role="presentation"><a href="#feature-6" aria-controls="feature-6" role="tab" data-toggle="tab"><i class="fa fa-tablet"></i>Fully Responsive</a></li>
                <li role="presentation"><a href="#feature-7" aria-controls="feature-7" role="tab" data-toggle="tab"><i class="fa fa-file-code-o"></i>Valid HTML5 + CSS3</a></li>
                <li role="presentation"><a href="#feature-8" aria-controls="feature-8" role="tab" data-toggle="tab"><i class="fa fa-heart"></i>Free Updates &amp; Support + Documentation</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="feature-content tab-content col-md-8 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6 col-xs-pull-0">
                <div role="tabpanel" class="tab-pane fade in active" id="feature-1">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-1.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-2">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-2.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-3">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-3.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-4">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-4.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-5">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-5.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-6">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-6.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-7">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-7.png') }}" alt="screenshot" ></a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="feature-8">
                    <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="{{ asset('_images/feature-8.png') }}" alt="screenshot" ></a>
                </div>

            </div><!--//feature-content-->


        </div><!--//tabbed-area-->

    </div><!--//container-->
</div><!--//features-->

@include('landing._pricing')

@include('landing._contact')

@include('landing._footer')

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('_plugins/jquery-1.12.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('_plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('_plugins/jquery-scrollTo/jquery.scrollTo.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('_js/main.js') }}"></script>
</body>
</html>