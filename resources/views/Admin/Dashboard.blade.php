@extends('Admin.AdminParent')
@section('Dashboard')
		<!-- main -->
		<!-- counter -->
	


		<style>
			#line {
				border-bottom-style:  solid;
				border-bottom-color: coral;
				border-width: 5px;
			}
			.timer {
				font-size: 400%;
				text-align: center;
				color: rgb(0,255,0);
				
			}
			.panel{
				background-color: rgb(0, 0, 0);
			}
			.panel-heading{
				color: white;
			}
			.main{
				background-image: url(images/banner3.jpg);
			}
			.col-sm-6{
				opacity: .7;
			}
</style>
		<title> Dashboard | SulabhNaukari </title>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<b><h1 class="page-title">Dashboard</h1></b>
					<div class="row">
						<div class="col-sm-6">
							<div class="panel">
								<h2><div class="panel-heading">To Earnings</div></h2>
								<div class="panel-body">
									
									<p to="0" from =" 25000" class = "timer" id="timer"> 0 </p>
									<strong><b><div id="line"> </div></b></strong>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel">
								<h2><div class="panel-heading">Total Payout</div></h2>
								<div class="panel-body">
									
										<p to="0" from =" 3000"class = "timer" id="timer2"> 0 </p>
										<div id="line"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="panel">
								<h2><div class="panel-heading">New Forms</div></h2>
								<div class="panel-body">
									
										<p to="0" from ="100" class = "timer" id="timer3"> 0 </p>
										<div id="line"> </div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel">
								<h2><div class="panel-heading">Total Form Filled</div></h2>
								<div class="panel-body">
									
										<p to="0" from ="1225" class = "timer" id="timer4"> 0 </p>
										<div id="line"> </div>
								</div>
							</div>
						</div>
					</div>
					
					
					<!-- modal -->
					  <div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog modal-sm">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Modal Header</h4>
							</div>
							<div class="modal-body">
							  <p>This is a small modal.</p>
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						</div>
					  </div>
					</div>

					
				</div>
			</div>
		</div>
		
		<!-- END MAIN -->
		<script type="text/javascript">
			/* timmer 1 */
			var t = 125;
			
			var startVal = parseInt(document.getElementById("timer").getAttribute("to") );
			var endVal = parseInt(document.getElementById("timer").getAttribute("from"));
			var incr = parseInt(endVal/20);
			function counter(){
				startVal = startVal + incr;
				document.getElementById('timer').innerHTML = startVal;
				if(startVal>=endVal){
					clearInterval(inter);
					document.getElementById('timer').innerHTML = endVal;

				}
				
			}
			var inter = setInterval(counter,t);
			
			/* timmer 2 */
			var startVal2 = parseInt(document.getElementById('timer2').getAttribute("to")) ;
			var endVal2 = parseInt(document.getElementById("timer2").getAttribute("from"));
			var incr2 = parseInt(endVal2/20);
			function counter2(){
				startVal2 = startVal2 + incr2;
				document.getElementById('timer2').innerHTML = startVal2;
				if(startVal2>=endVal2){
					clearInterval(inter2);
					document.getElementById('timer2').innerHTML = endVal2;
				}
				

			}
			var inter2 = setInterval(counter2,t);
			
			
			/* timmer 3 */
			var startVal3 = parseInt(document.getElementById('timer3').getAttribute("to")) ;
			var endVal3 = parseInt(document.getElementById('timer3').getAttribute("from"));
			var incr3 = parseInt(endVal3/20);
			function counter3(){
				startVal3 = startVal3 + incr3;
				document.getElementById('timer3').innerHTML = startVal3;
				if(startVal3>=endVal3){
					clearInterval(inter3);
					document.getElementById('timer3').innerHTML = endVal3;
				}
				

			}
			var inter3 = setInterval(counter3,t);
			
			
			/* timmer 4 */
			var startVal4 = parseInt(document.getElementById('timer4').getAttribute("to")) ;
			var endVal4 = parseInt(document.getElementById('timer4').getAttribute("from"));
			var incr4 = parseInt(endVal4/20);
			function counter4(){
				startVal4 = startVal4 + incr4;
				document.getElementById('timer4').innerHTML = startVal4;
				if(startVal4>=endVal4){
					clearInterval(inter4);
					document.getElementById('timer4').innerHTML = endVal4;
				}				

			}
			var inter4 = setInterval(counter4,t);
			
			
		</script>
@endsection