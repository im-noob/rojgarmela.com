<html>
<head>
<script type="text/javascript" src="alert.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/viewbox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/hoverex-all.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/about.css" rel="stylesheet" type="text/css" media="all"/>
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
						<li class="dropdown" class="caret"><a  class="page-scroll" class="dropdown-toggle" href="#" class="caret" data-toggle="dropdown">Student zone</a>
							<ul class="dropdown-menu" style="position: relative;background-color: black; color:white;width:200px;">
								<li style="color:white;"><a href="#"> Result</a></li>
								<li style="color:white;"><a href="#">Aplly</a></li>
								<li style="color:white;"><a href="#">Admit card</a></li>
							</ul>

						</li>
						<li><a href="#contact" class="page-scroll">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- /navigation -->
</section>
	<div bgcolor="#3C3C3C" style="position: relative;width:1500px;height: 830px;background-color:#1E1E1E ;">
		
		
		
			<form action="#" name="StudentRegistration" onsubmit="return(validate());" style="position: relative;top:300px;left: 500px;">
			<table cellpadding="2" width="50%" bgcolor="#3C3C3C" align="center" cellspacing="2">
			<tr>
			<td colspan=2>
			<center><font size=10 color="white" style="position: relative;left: -120px;height: 100px;top:-20px;"><b>Student Admission Form</b></font></center>
			</td>
			</tr>
			<tr>
			<td><font color="white">Name</font></td>
			<td><input type=text name=textnames id="textname" size="30"></td>
			</tr> 
			<tr> <td><font color="white">Father Name</td>
			<td><input type="text" name="fathername" id="fathername"size="30"></td>
			</tr>
			<tr>
			<td><font color="white">DOB</td>
			<td><input type="text" name="dob" id="dob" size="30"></td>
			</tr>
			<tr>
			<td><font color="white">Sex</td>
			<td><input type="radio" name="sex" value="male" size="10"><font color="white">Male
			<input type="radio" name="sex" value="Female" size="10"><font color="white">Female</td>
			</tr>
			<tr>
			<td><font color="white">EmailId</td>
			<td><input type="text" name="emailid" id="emailid" size="30"></td>
			</tr> <tr> <td><font color="white">Course</td>
			<td><select name="Course">
			<option value="-1" selected>select..</option>
			<option value="B.Tech">B.TECH</option>
			<option value="B.Tech">BSC</option>
			<option value="B.Tech">BCOM</option>
			<option value="B.Tech">BA</option>
			<option value="MCA">MCA</option>
			<option value="MBA">MBA</option>
			<option value="BCA">BCA</option>
			</select></td>
			</tr>
			<tr>
			<td><font color="white">Permanent Address</td>
			<td><input type="text" name="paddress" id="paddress" size="30"></td>
			</tr>
			<tr>
			<td><font color="white">City</td>
			<td><select name="City">
			<option value="-1" selected>select..</option>
			<option value="New Delhi">NEW DELHI</option>
			<option value="Mumbai">MUMBAI</option>
			<option value="Goa">GOA</option>
			<option value="Patna">PATNA</option>
			<option value="Jaipur">Jaipur</option>
			</select></td>
			</tr>
			<tr>
			<td><font color="white">District</td>
			<td><select name="District">
			<option value="-1" selected>select..</option>
			<option value="Nalanda">NALANDA</option>
			<option value="UP">UP</option>
			<option value="Goa">GOA</option>
			<option value="Patna">PATNA</option>
			</select></td>
			</tr>
			<tr>
			<td><font color="white">State</td>
			<td><select Name="State">
			<option value="-1" selected>select..</option>
			<option value="New Delhi">NEW DELHI</option>
			<option value="Mumbai">MUMBAI</option>
			<option value="Goa">GOA</option>
			<option value="Bihar">BIHAR</option>
			<option value="Rajasthan">Rajasthan</option>
			</select></td>
			</tr>
			<tr>
			<td><font color="white">PinCode</td>
			<td><input type="text" name="pincode" id="pincode" size="30"></td>
			</tr>
			<tr>
			<td><font color="white">MobileNo</td>
			<td><input type="text" name="mobileno" id="mobileno" size="30"></td>
			</tr>
			<tr>
			<td><input type="reset" style="position: relative;top:50px;height: 40px;width: 100px;background-color: black;color: white;"></td>
			<td colspan="2"><input type="submit" value="Submit Form" style="position: relative;top:50px;left: 180px;height: 40px;width: 100px;background-color: black;color: white;"/></td>
			</tr>
			</table>
		</div>
</form>
<!--footer section-->
<section class="footer" style="position: relative;background-color: black; color:white;width:1500px;height: 150px;text-align: center;top:0%;">
	<div class="container">
		<div class="copyright">
			<p >&copy; 2017 rojgarmela. All Rights Reserved | Design by <a href="http://rojgarmela.com/"> rojgarmela </a></p>
		</div>
	</div>
</section>
<!--End footer section -->
</body>
</html> 
<script src="js/retina-1.1.0.js"></script>
<script src="js/jquery.hoverex.min.js"></script>
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
<script type="text/javascript">
function validate()

{ 

if( document.StudentRegistration.textnames.value == "" )

{

alert( "Please provide your Name!" );

document.StudentRegistration.textnames.focus() ;

return false;

}

if( document.StudentRegistration.fathername.value == "" )

{

alert( "Please provide your Father Name!" );

document.StudentRegistration.fathername.focus() ;

return false;

}

if( document.StudentRegistration.dob.value == "" )

{

alert( "Please provide your DOB!" );

document.StudentRegistration.dob.focus() ;

return false;

}

if ( ( StudentRegistration.sex[0].checked == false ) && ( StudentRegistration.sex[1].checked == false ) )

{

alert ( "Please choose your Gender: Male or Female" );

return false;

} 

var email = document.StudentRegistration.emailid.value;

atpos = email.indexOf("@");

dotpos = email.lastIndexOf(".");

if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 

{

alert("Please enter correct email ID")

document.StudentRegistration.emailid.focus() ;

return false;

}

if( document.StudentRegistration.Course.value == "-1" )

{

alert( "Please provide your Course!" );

return false;

} 

if( document.StudentRegistration.paddress.value == "" )

{

alert( "Please provide your Address!" );

document.StudentRegistration.paddress.focus() ;

return false;

}

if( document.StudentRegistration.City.value == "-1" )

{

alert( "Please provide your City!" );

document.StudentRegistration.City.focus() ;

return false;

} 

if( document.StudentRegistration.District.value == "-1" )

{

alert( "Please provide your Select District!" );

return false;

} 

if( document.StudentRegistration.State.value == "-1" )

{

alert( "Please provide your Select State!" );

return false;

}

if( document.StudentRegistration.pincode.value == "" ||

isNaN( document.StudentRegistration.pincode.value) ||

document.StudentRegistration.pincode.value.length != 6 )

{

alert( "Please provide a pincode in the format ######." );

document.StudentRegistration.pincode.focus() ;

return false;

}

if( document.StudentRegistration.mobileno.value == "" ||

isNaN( document.StudentRegistration.mobileno.value) ||

document.StudentRegistration.mobileno.value.length != 10 )

{

alert( "Please provide a Mobile No in the format 123." );

document.StudentRegistration.mobileno.focus() ;

return false;

}

return( true );

}
</script>
