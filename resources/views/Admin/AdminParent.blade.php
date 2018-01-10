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
	<style type="text/css">
		.main{
			background:#AEB7C2;
		}
		.sidebar-scroll{
			background-image: url(images/banner4.jpg);
			background-repeat: repeat-x;
		}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav style="color:white; background: skyblue;" class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="FormApply.html"><img src="assets/img/logo-dark.png" alt="SulabhNaukari Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				 
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						 
						<li class="dropdown">
							<a style="color:white; " href="indexMain#contact"><i class="lnr lnr-question-circle"></i> <span style="color:white;">Help</span></a>
						</li>
						
						<li class="dropdown">
							<a style="color:white; background: black; opacity: 0.8;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span><span style="opacity: 0.8;">{{Session::get('username')}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul  class="dropdown-menu">
								<li >
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
		<div style=" background: rgb(0,0,0);"  id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul style="opacity: 0.9;" class="nav">
						<li>
							<a style="opacity: 1.0" href="Dashboard" id = "activeTab" onclick = "activeTab()"><i class="lnr lnr-pencil"> </i>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="NewPost" id = "" onclick = "activeTab()"><i class="lnr lnr-rocket"></i> 
								<span>New Post</span>
							</a>
						</li>
						<li>
							<a href="CreateJob" id = "" onclick = "activeTab()"><i class="lnr lnr-dice"></i> 
								<span>Create Job</span>
							</a>
						</li>
						<li>
							<a href="ViewListUser" id = "" onclick = "activeTab()"><i class="lnr lnr-list"></i>
								<span>View List User</span>
							</a>
						</li>
						<li>
							<a href="ViewPartiUser" id = "" onclick = "activeTab()"><i class="lnr lnr-user"></i>
								<span>View Particular User</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		
		
		<!-- main -->
		
		
		<!-- MAIN -->
		@yield('Dashboard');
		@yield('NewPost');
		@yield('CreateJob');
		@yield('ViewListUser');
		@yield('ViewPartiUser');

		<!-- END MAIN -->
		
		
	</div>
	<footer>
			<div class="container-fluid">
				<b><p class="copyright">&copy; 2017 <a href="https://www.SulabhNaukari.com" target="_blank">SulabhNaukari.com</a>. All Rights Reserved.</p></b>
			</div>
	</footer>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	 
	 
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	
	<script src="assets/scripts/SulabhNaukari-common.js"></script>
	<script>

		function activeTab(){
			//document.getElementById('activeTab').innserHTML="active";
			//console.log("clickedd");
		}

	</script>

</body>

</html>
