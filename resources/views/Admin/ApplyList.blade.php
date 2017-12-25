@extends('Admin.AdminParent')
@section('ApplyList')		
		<!-- MAIN -->
		<title>Apply List | sarkariformbharo - Free Bootstrap Form Apply Template</title>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Apply List</h3>
					<div class="row">
						<div class="">
							<!-- TABLE STRIPED -->
							<div class="panel">
									<div class="panel-body">

										<!-- filter-->

										<div class="row"><p><h4>Filter:</h4></p></div>
										<div class="row">
											<div class="col-sm-6">
												<div>Select Form Name: </div>
												<select class="form-control">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
											<div class="col-sm-6">
												<div>Username: </div>
												<select class="form-control">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</div>




							



										<div class="row"><p></p></div>
							
										<div class="row">
										<table class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Sl.No.</th>
													<th>Form Name</th>
													<th>Username</th>
													<th>Last Date to Apply</th>
													<th>Days Remaning to Apply</th>
													<th>Current Status</th>
													<th>Edit Stauts</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@php
													$i=0;

												@endphp
												@foreach($msg as $value)
													
												<tr>
													<td>{{$i++}}</td>
													<td>{{$value->form_name}}</td>
													<td>{{$value->name}}</td>
													<td class="end__date">{{$value->end_date}}</td>
													<td class="remaing_days">days of remaing pending</td>
													<td>
														<button type="button" class="btn btn-success">
														<i class="fa fa-check-circle"></i>{{$value->apply_status}}   
														</button>
													</td>
													<td>
														<button data-toggle="modal" 
														id = "{{$value->status_id}}"
														data-target="#myModal{{$value->status_id}}" onclick="makemodal()" type="button" class="btn btn-default">
															<i class="fa fa-plus-square"></i> Edit Status {{$value->status_id}}
														</button>
													</td>
													<td>
														<button class="btn btn-success ApplyLink" id="ApplyLink/{{$value->status_id}}" title="Click to Apply">
															<i class="fa fa-rocket"></i> Apply
														</button>
													</td>
												</tr>
												@endforeach
												
												
											</tbody>
										</table>
									</div>
										
									</div>
							</div>
								<!-- END TABLE STRIPED -->
						</div>
					<!-- END MAIN CONTENT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		<!-- Modal HTML -->
		<!-- creating multiple modal code 
		-->
      	
		@foreach($msg as $value)
				<div id="createmodal">
					<div id="myModal{{$value->status_id}}" class="modal">
						<div class="modal-dialog modal-lg">		
							<div class="modal-content">		
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>							
									<h4 class="modal-title">Edit Status</h4>			
								</div>
								<div class="modal-body">				
									<div class="row">								
										<div class="col-sm-6">									
											<div class="panel panel-primary">										
													<div class="panel-heading">	For Details	</div>										
													<div class="panel-body">									
														<h4><div>Form Name:{{$value->form_name}}</div></h4>							
														<h4><div>User Name:{{$value->name}}</div></h4>							
														<h4><div>Last Date to Apply:{{$value->end_date}} </div></h4>
														<h4><div class="remaing_days">Days Remaning:</div></h4>					
														<br>											
														<br>										
														<br>	
													</div>									
											</div>								
										</div>								
										<div class="col-sm-6">									
												<div class="panel panel-success">										
													<div class="panel-heading">	Add Status											</div>												
													<div class="panel-body">
														<div>For Status:
															<select class="form-control input-sm">
																<option value="cheese">Applied</option>	
																<option value="tomatoes">Started </option>
																<option value="mozarella">In Progress</option>

																<option value="mushrooms">Completed</option>										
															</select>											
														</div><br>
														<div> Details Description </div>											
														<textarea class="form-control" row="4" placeholder="Add the Description Here"></textarea>										
														<button id="addbutton{{$value->status_id}}" class="btn btn-primary add">Add</button>	
													</div>									
												</div>								
										</div>							
									</div>							
											<table  class = "table  table-bordered">									
												<thead>										
													<tr>											
														<th>Sl.No</th>
														<th>Form Status</th>
														<th>Details Desc.</th>
														<th>Message Date</th>										
													</tr>									
												</thead>									
												<tbody id = "EditStatus_Table{{$value->status_id}}">										
													<tr>											
														<td>1</td>											
														<td>Applied by Student</td>											
														<td>This is Description section</td>											
														<td>11-jan-1999</td>										
													</tr>																			
												</tbody>								
											</table>						
								</div>					
								<div class="modal-footer">							
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>						
								</div>					
							</div>				
						</div>			
					</div>
				</div>
		@endforeach
		
		<!-- End Modal -->
			<script>
				function makemodal(){
						$(document).ready(function(){
							$("createmodal").append('');
						});
				}

				$(document).ready(function(){
					$(".add").click(function(){


						
							/*  this is append section after click on add button on edit status 
								in apply list */
							$idaddbutton = $(this).attr("id");
							$addbuttonID = $idaddbutton.substring(9,$idaddbutton.length);
							alert($addbuttonID);
							$divAddingID = "EditStatus_Table"+ $addbuttonID;

							$("#"+$divAddingID).append("<tr><td>1</td><td>Applied by Student</td><td>This is Description section</td><td>11-jan-1999</td></tr>");
							alert("kk");
						
					});
					$(".ApplyLink").click(function(){
					 	var id = $(this).attr("id");
						
						var google =  window.open(id, "_blank", "top=0,left=0,width=1360,height=300");
						var school =  window.open("https://www.w3schools.com", "_blank", "top=370,left=0,width=1360,height=285");
				 	});
				 	/* for date setting the remaning date */
				 	var aarayEndDate = document.getElementsByClassName("end__date");
				 	var aarayDays = document.getElementsByClassName("remaing_days");
				 	var oneDay = 24*60*60*1000; 

				 	for (var i = 0; i < aarayEndDate.length; i++) {
				 		/* end date calculation */
				 		var firstDateDiv = aarayEndDate[i].innerHTML;

				 		/* for current date calcultaion */
				 		var d = new Date();

				 		
				 		/* usign function to spliting the date month and year from the Date() object */
				 		var firstDate = new Date(d.getFullYear(),d.getMonth()+1,d.getDate());
				 		

						
				 		/* usign substring method to diffrentiate the moth year and date */
						var secondDate = new Date(firstDateDiv.substring(0,4),firstDateDiv.substring(5,7),firstDateDiv.substring(8,10));
						 //secondDate = new Date(firstDate.getFullYear(),firstDate.getMonth()+1,firstDate.getDate());
						/* finding the diffrence between both the date */
						var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
						aarayDays[i].innerHTML = diffDays;
				 	}
					

					

				});
				
				

			</script>
								
@endsection