<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BillCircuit Technology</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/isotope.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <link  type="text/css" href="{{ URL::asset('css/prettyPhoto.css')}}" rel="stylesheet"/>
    <link type="text/css"  href="{{ URL::asset('css/prettyPhoto.css')}}" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

    <body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="home"><h1><span>Bill</span>Circuit</h1></a>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="/home" class="active">Home</a></li>
                                <li role="presentation"><a href="/service">Service</a></li>
                                <li role="presentation"><a href="/about">About</a></li>
                                <li role="presentation"><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="slider">
        <div class="img-responsive">
            <ul class="bxslider">
                <li><img src="images/slider/1.jpg" alt=""/></li>
                <li><img src="images/slider/2.jpg" alt=""/></li>
                <li><img src="images/slider/3.jpg" alt=""/></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                <h3>Providing Our Clients</h3>
            </div>
            <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
                <h2>Best & Creative Solutions</h2>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="col-sm-3">
                <i class="fa fa-cogs fa-3x"></i>
                <h4>Creative Solutions</h4>
            </div>
        </div>
        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
            <div class="col-sm-3">
                <i class="fa fa-leaf fa-3x"></i>
                <h4>Creative Solutions</h4>
            </div>
        </div>
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
            <div class="col-sm-3">
                <i class="fa fa-heart-o fa-3x"></i>
                <h4>Creative Solutions</h4>
            </div>
        </div>
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
            <div class="col-sm-3">
                <i class="fa fa-laptop fa-3x"></i>
                <h4>Creative Solutions</h4>
            </div>
        </div>
    </div>

    <div class="container">



    </div>

    <footer>
        <div class="footer">
            <div class="container">
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2>Multi</h2>
                    <p>In a elit in lorem congue varius. Sed nec arcu.
                        Etiam sit amet augue.
                        Fusce fermen tum neque a rutrum varius odio pede
                        ullamcorp-er tellus ut dignissim nisi risus non tortor.
                        Aliquam mollis neque.</p>

                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">

                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <h3>CONTACT INFO</h3>
                    <ul>
                        <li><i class="fa fa-home fa-2x"></i> Office # 38, Suite 54 Elizebth Street, Victoria State Newyork, USA 33026</li><hr>
                        <li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li><hr>
                        <li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        Copyright  &copy; 2018 BillCircuit. All Rights Reserved.
                    </div>
                    <!--
                        All links in the footer should remain intact.
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Multi
                    -->
                </div>
                <div class="pull-right">
                    <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/functions.js"></script>
    <script>
        wow = new WOW(
            {

            }	)
            .init();
    </script>


    </body>
</html>
