<!doctype html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	 <!-- bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=10">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<!-- VENDOR CSS -->
	 
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	  
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="FormApply.html"><img src="assets/img/logo-dark.png" alt="sarkariformbharo Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				 
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="indexMain#contact">Contact To Developer</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span><span>{{Session::get('username')}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								 
								<li>
									<a href="{{url('/logout_link')}}"><i class="lnr lnr-exit"></i> 
										<span class="btn btn-danger">Logout</span>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		
		
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="Dashboard" id = "activeTab" onclick = "activeTab()"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="ApplyHistory" id = "" onclick = "activeTab()"><i class="lnr lnr-code"></i> <span>Apply History</span></a></li>
						<li><a href="ApplyList" id = "" onclick = "activeTab()"><i class="lnr lnr-dice"></i> <span>Apply List</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		
		<!-- main -->
		
		
		<!-- MAIN -->
		@yield('ApplyHistory');
		@yield('Dashboard');
		@yield('ApplyList');
		<!-- END MAIN -->
		
		
	</div>
	<footer>
			<div class="container-fluid">
				<b><p class="copyright">&copy; 2017 <a href="https://www.sarkariformbharo.com" target="_blank">sarkariformbharo.com</a>. All Rights Reserved.</p></b>
			</div>
	</footer>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	 
	 
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	
	<script src="assets/scripts/sarkariformbharo-common.js"></script>
	<script>

		function activeTab(){
			//document.getElementById('activeTab').innserHTML="active";
			//console.log("clickedd");
		}

	</script>

</body>

</html>
