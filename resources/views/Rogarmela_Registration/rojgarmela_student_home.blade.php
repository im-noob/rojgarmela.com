<!--Author: rojgarmela
Author URL: http://rojgarmela.com
-->
<!DOCTYPE HTML>
<html lang="en">
<head> 
<title>rojgarmela An Education Category Flat Bootstrap Responsive  Website Template | Home :: rojgarmela</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rojgarmela a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/viewbox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/hoverex-all.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/about.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- js files -->
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<!-- /js files -->
</head>
<body>
<div class="topbar-w3ls">
	<a href="index.html" class="logo"><h1>rojgarmela</h1></a>	
	<div class="top-agileits">
		<form class="search-container" action="#" method="post">
			<input id="search-box" type="text" class="search-box" name="q" placeholder="Search Here"/>	
			<label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>	
			<input type="submit" id="search-submit" />
		</form>	
		<p><span class="glyphicon glyphicon-phone-alt"></span> +91-9523908398</p>
		<div class="clearfix"></div>
	</div>
</div>
<!-- banner section -->
<section class="banner">
	<!-- navigation -->
	<div class="navbar-wrapper">
		<div class="container-fluid">
			<nav class="navbar navbar-inverse ">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" data-spy="affix" data-offset-top="800">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse" data-spy="affix" data-offset-top="0">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="page-scroll">Home</a></li>
						<li><a href="#about" class="page-scroll">About</a></li>
						<li><a href="#team" class="page-scroll">Notice</a></li>
						<li><a href="#portfolio" class="page-scroll">Galary</a></li>
						<li><a href="#testimonial" class="page-scroll">Student zone</a></li>
						<li><a href="#contact" class="page-scroll">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- /navigation -->
	<div id="slideshow-banner">
		<ul>
			<li class="slideshow-item"><img src="images/banner1.jpg" alt="" /></li>
			<li class="slideshow-item"><img src="images/banner2.jpg" alt="" /></li>
			<li class="slideshow-item"><img src="images/banner3.jpg" alt="" /></li>
			<li class="slideshow-item"><img src="images/banner4.jpg" alt="" /></li>
		</ul>
	</div>
</section>


<!-- about body section-->
<section>
	<div style="position: relative;height: 600px;width:1500px;">
		<div id="notice" >
			





		</div>
		<div  id="about_us" ">
			






		</div>
	</div>
</section>




<!-- Footer Section -->
<section class="footer">
	<div class="container">
		<div class="copyright">
			<p>&copy; 2017 rojgarmela. All Rights Reserved | Design by <a href="http://rojgarmela.com/"> rojgarmela </a></p>
		</div>
	</div>
</section>
<!-- /Footer Section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script src="js/index.js"></script>
<script type="text/javascript" src="js/jquery.slide.js"></script>
<script type="text/javascript">
	$('#slideshow-banner').slide({
		cdTime : 5000,      
	    controllerLeftButton : "images/left.png",    
	    controllerRightButton : "images/right.png"   
	});
</script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.viewbox.min.js"></script>
<script>
		$(function(){
			
			$('.thumbnail').viewbox();
			$('.thumbnail-2').viewbox();
			
			(function(){
				var vb = $('.popup-link').viewbox();
				$('.popup-open-button').click(function(){
					vb.trigger('viewbox.open');
				});
				$('.close-button').click(function(){
					vb.trigger('viewbox.close');
				});
			})();
			
			(function(){
				var vb = $('.popup-steps').viewbox({navButtons:false});
				
				$('.steps-button').click(function(){
					vb.trigger('viewbox.open',[0]);
				});
				
				$('.next-button').click(function(){
					vb.trigger('viewbox.open',[1]);
				});
				$('.prev-button').click(function(){
					vb.trigger('viewbox.open',[0]);
				});
				$('.ok-button').click(function(){
					vb.trigger('viewbox.close');
				});
			})();
			
		});
</script>
<script src="js/retina-1.1.0.js"></script>
<script src="js/jquery.hoverex.min.js"></script>

<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js files -->
</body>
</html>