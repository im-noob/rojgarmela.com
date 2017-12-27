<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Password Reset</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, Apply List-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body style="background-color: #FFFFAA;">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<h3 class="load" style="color: green;">SulabhNaukari.coms</h3>
								<p class="lead">LOGIN TO YOUR PRESONAL ACCOUNT</p>
							</div>
			 				<form class="form-auth-small" method="post" action="{{url('/checkingp')}}">
								<input type="hidden" name="_token" value="{{csrf_token()}}">

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" name = "mail" id="mail"  placeholder="Email" value="{{old('mail')}}">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name = "pass" id="pass" placeholder="Password" value="{{old('pass')}}">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="content text" >
							<h1 style="color: blue;"><BIG><big>SulabhNaukari.com</big></BIG></h1>
							<h2 style="color: green;">Admin Login Pannel</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
