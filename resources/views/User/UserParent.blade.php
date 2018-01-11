<!DOCTYPE html>
<html lang="en-us">
    <head>
    	

    	<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.min.css">
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/main.css">

		<!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="content-block" id="header">
            <div id="overlay-1">
                <header id="site-header" class="clearfix">
                    <div class="pull-left">
                        <h1><a href="home">ROJGARMELA</a></h1>
                    </div>
                    <div class="pull-right">
                        <nav class="navbar site-nav" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                                    <li><a href="apply"><i class="fa fa-bookmark"></i> Apply</a></li>
                                    <li><a href="job"><i class="fa fa-bullseye"></i> job</a></li>
                                    <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bullhorn"></i> Notice
                                        <span class="caret"></span></a>
                                        <ul style="background:black;" class="dropdown-menu">
                                              <li><a href="result">Result</a></li>
                                              <li><a href="admit_card">Admit Card</a></li>
                                              <li><a href="notice">Notice</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="about_us"><i class="fa fa-users"></i> About Us</a></li>
                                    <li><a href="home#contact"><i class="fa fa-phone-square"></i> Contact</a></li>
                                </ul>
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>	<!-- site-header -->

                <!-- This is content section -->
                    @yield('home')
                    @yield('apply')
                    @yield('result')
                    @yield('job')
                    @yield('admit_card')
                    @yield('notice')
                    @yield('about_us') 

                <!-- end of content section -->               

                <footer id="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="copyright">&copy; 2018 ROJGARMELA</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="designed-by">Designed By <a href="http://JavaAP.com/" target="_blank">JavaAP</a></div>
                            </div>
                        </div>
                    </div>
                </footer>	<!-- site-footer -->


        <!-- // js 
        <script>
            new WOW().init();
        </script> -->

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.isonscreen.js"></script>
       
        <script src="js/main.js"></script>

        <script>
        	$(document).ready(function(){
  				$('.owl-carousel').owlCarousel({
    				loop:true,
    				margin:10,
    				autoplay:true,
    				autoplayTimeout:3000,
    				autoplayHoverPause:true,
    				responsiveClass:true,
    				responsive:{
        					0:{
					            items:1,
        					},
					        600:{
					            items:1,
					        },
					        1000:{
					            items:1,
					        }
    				}
				})
			});
        </script>

	</body>
</html>
