<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multi Profile, free responsive template</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Multi Profile
        http://www.templatemo.com/preview/templatemo_457_multi_profile
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href= "{{asset('../css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('../css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('../css/templatemo-style.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       999 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="templatemo-container">
        <!-- header -->
    @section ('header')
    <div class="header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4  site-name-container">
                        <img src="img/logo.png" alt="Site logo" class="site-logo">
                        <h1 class="site-name">Multi Pro</h1>
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-8 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="{{ url('../') }}">Home</a></li>
                                <li><a href="{{ url('../about') }}">About</a></li>
                                <li><a href="{{ url('../news') }}">News</a></li>
                                <li><a href="{{ url('../program') }}">Program</a></li>
                                <li><a href="{{ url('../login') }}">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
    @show
    
    @yield ('header image')
    @yield ('message')
    @yield ('content')
    
    
    @section ('footer')
    <div class="blue-divider effect1">
    <div class="dark-blue-bg"></div>
    <div class="blue-divider-bg-graphic"></div>
    <div class="blue-bg"></div>
</div>
<section class="templatemo-container blue-bg footer-nav effect1">
    <div class="container">
        <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
            <h3 class="text-uppercase">Main menu</h3>
            <nav class="text-uppercase templatemo-nav-2">
                <ul>
                    <li><a href="{{ url('../') }}">Home</a></li>
                    <li><a href="{{ url('../about') }}">About</a></li>
                    <li><a href="{{ url('../news') }}">News</a></li>
                    <li><a href="{{ url('../program') }}">Program</a></li>
                    <li><a href="{{ url('../login') }}">Login</a></li>
                    <li><a href="{{ url('../contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
            <h3 class="text-uppercase">About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada lacus vel tristique rhoncus.
                Vivamus vel molestie odio. Curabitur pulvinar, diam at pharetra euismod, augue felis pretium est, sit
                amet accumsan dui enim nec tortor. Cras lobortis feugiat enim. Aliquam rhoncus pharetra ligula accumsan
                sodales. Donec blandit sed justo quis sollicitudin. Nulla et leo id purus suscipit rhoncus ut at purus.
                Suspendisse molestie sodales porttitor.

                Vivamus et vulputate augue. Etiam et eleifend purus, in sagittis nisi. Vivamus laoreet metus ut nisl
                euismod molestie. In non lacus placerat ipsum placerat dapibus eu vel arcu.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
            <h3 class="text-uppercase">Resources</h3>
            <ul>
                <li><a href="#">Aenean leogula</a></li>
                <li><a href="#">Porttitor euconsequat</a></li>
                <li><a href="#">Vitae eleifend ac enim</a></li>
                <li><a href="#">Aliquam lorante</a></li>
                <li><a href="#">Phasellus viverra nulla</a></li>
                <li><a href="#">Dmetus varius</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
            <h3 class="text-uppercase">Features</h3>
            <ul>
                <li><a href="#">lorem quis bibendum</a></li>
                <li><a href="#">Auctor nisi elit conser</a></li>
                <li><a href="#">at ipsum, nec sagittis</a></li>
                <li><a href="#">Duis sed odio sit amet</a></li>
                <li><a href="#">Fnibh vulpu</a></li>
                <li><a href="#">ftate cursus a sit amet</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- end main content -->
        <footer class="text-center">
            <p class="small copyright-text">Copyright &copy; 2084 Company Name</p>
        </footer>
    @show

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
        <script type="text/javascript" src="js/responsiveCarousel.min.js"></script>      <!-- Carousel -->
        <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
        <script>

            $(function() {
                $('.crsl-items').carousel({
                    visible: 1,
                    itemMinWidth: 320,
                    itemEqualHeight: 320,
                    itemMargin: 9,
                });
                $(".crsl-nav a[href=#]").on('click', function(e) {
                    e.preventDefault();
                });
            });

        </script>
    </body>
</html>
