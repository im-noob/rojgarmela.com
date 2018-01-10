<!--Author: rojgarmela
Author URL: http://rojgarmela.com
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>rojgarmela An Education Category Flat </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
</head>
<body>
<section style="position: relative;height:200px;width:1600px;background-color: red;">
	<div class="container-fluid">
		<!--header section-->

		<h1>Header section</h1>



	</div>
</section>
<section class="banner">
	<!-- navigation -->
		<div class="container-fluid" >
			<nav class="navbar navbar-inverse ">
				<div id="navbar" data-spy="affix" data-offset-top="0">
					<ul class="nav navbar-nav">




						<li><a href="#contact" class="page-scroll">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
	<!-- /navigation -->
</section>


<section  id="body" style="position: relative;height:900px;width:1600px;background-color:green;">
	<div class="container-fluid">
		<!--body section-->

			<h1>Body section</h1>



	</div>
</section>
<section class="contact-us slideanim" id="contact">
	<h3 class="text-center slideanim">Contact Us</h3>
	<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">		
		<div class="row">
			<div class="col-lg-5 col-md-5">
				<div class="contact-info">
					<h4 class="slideanim">Connect With Us :-</h4>
					<p class="slideanim"><span>Phone</span>+91-9523908398</p>
					<p class="slideanim"><span>Email</span><a href="mailto:name@example.com">name@example.com</a></p>
					<p class="addr slideanim"><span>Address</span>3481 Melrose Place,Beverly Hills, Chicago 90210.</p>
					<ul class="social-icons2">
						<li><a href="https://www.facebook.com/viim08feb2016/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-7">
				<form action="#" method="post">
					<div class="row">
						<div class="col-sm-12 form-group slideanim">
							<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
						</div>
					</div>
					<div class="row email-bar">
						<div class="col-sm-12 form-group slideanim">
							<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
						</div>
					</div>
					<textarea class="form-control slideanim" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea><br>
					<div class="row">
						<div class="col-sm-12 form-group">
							<button class="btn btn-outline1 btn-lg" type="submit">Send</button>
						</div>
					</div>
				</form>			
			</div>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script type="text/javascript" src="js/jquery.slide.js"></script>
<script type="text/javascript">
</script>
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
</body>
</html>