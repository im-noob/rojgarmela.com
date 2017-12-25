<html>
	<head>
		<title>Apply List | sarkariformbharo - Free Bootstrap Form Apply Template</title>
		<!-- bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			#heading{
				border-bottom-style:  solid;
				border-bottom-color: cyan;
				border-width: 5px;
			}
		</style>
	</head>
	<body>		
		<!-- MAIN -->
		<div class="container-fluid">
			<h4 id = "heading">Genral Information {{$id}}</h4>
			
			<div class="row">
				<div class="col-sm-2">
					<input class="form-control" id="user_id" value="User Id"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="name" value="Name"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="f_name" value="Father Name"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="m_name" value="Mother Name"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="pic" value="Picture"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" value="ohoh" id="dob" value="DOB"/>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2">
					<input class="form-control" id="name" value="Gender"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="name" value="Cast"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="name" value="Nationality"/>
				</div>
				<div class="col-sm-2">
					<input class="form-control" id="name" value="Phycial Handicapt"/>
				</div>
				<div class="col-sm-2">
					<div id = "div"> </div>
				</div>
				<div class="col-sm-2">
					<div id = "div2"> </div>
				</div>	
				<div class="col-sm-2">
					<div id = "div3"> </div>
				</div>				
			</div>
			<h4 id = "heading">Document Information</h4>

			<!-- this section will created by code -->
			<div class="row" id = "rowSection">
				<div class="col-sm-2">
					<input class="form-control" id="hello" value="Hello">
				</div>
			</div>
			
			

		</div>
		<!-- END MAIN -->
		<!-- script for createing input -->
		<script>
			
			$(document).ready(function(){
				$("#hello").click(function(){
					$("#rowSection").append('<div class="col-sm-2"><input class="form-control" id="hello" value="tello"></div>');
				});
						
			});
			$(document).ready(function(){
					$("input").click(function(){
						$(this).select();					
						document.execCommand("copy");
						
					});
					$("input").click(function() {
						$(this).select(function() {
  							$( "#div" ).text( "Something was selected" ).show().fadeOut( 1000 );
						});
					});
					$(document).bind({
						copy: function(){
							$("#div2").text("Something copiend").show().fadeOut(1000);
						},
						paste: function(){
							$("#div3").text("Something pasted").show().fadeOut(1000);
						}
					});
			});
 			/* disabling right click */
			
			$(document).ready(function(){
			    $(document).bind("contextmenu",function(e){
			        return false;
			    });
			});	

			$(document).keydown(function(e){
			  var key = e.charCode || e.keyCode;
			  if (key == 'v') { 
			   alert("enter key");
			  } else {
			    e.preventDefault();
			  }	
			});
			
		</script>
	</body>
</html>

<!-- 
	function copyToClipboard(element) {
  
 
    $(element).text().select();
  
  document.execCommand("copy");
}
-->