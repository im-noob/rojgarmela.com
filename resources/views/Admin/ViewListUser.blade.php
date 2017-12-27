@extends('Admin.AdminParent')
@section('ViewListUser')
	
		<style>
		 
		 
		</style>
		<title>View List User | SulabhNaukari </title>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">View List User </h3>
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
										<!--body of the table-->
										<div class="row">
										<table class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Sl.No.</th>
													<th>Form Name</th>
													<th>Username</th>
													<th>status</th>
													<th>Date Finalised</th>
													<th>view</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>SSC</td>
													<td>Don</td>
													<td>
														<button type="button" class="btn btn-success">
															<i class="fa fa-check 5x" aria-hidden="true"></i>In Progress...
														</button>
													</td>
													<td>11-11-2018</td>
													<td>
														<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">
															<i class="fa fa-eye"></i> view 
														</button>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Bank OP</td>
													<td>Don2</td>
													 
													<td>11-11-2018</td>
													<td>
														<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">
															<i class="fa fa-eye"></i> view 
														</button>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>SSC</td>
													<td>Don</td>
													 
													<td>11-11-2018</td>
													<td>
														<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">
															<i class="fa fa-eye"></i> view 
														</button>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>SSC</td>
													<td>Don</td>
													 
													<td>11-11-2018</td>
													<td>
														<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">
															<i class="fa fa-eye"></i> view 
														</button>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>SSC</td>
													<td>Don</td>
													 
													<td>11-11-2018</td>
													<td>
														<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">
															<i class="fa fa-eye"></i> view 
														</button>
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>SSC</td>
													<td>Don</td>
													 
													<td>11-11-2018</td>
													<td>
														<button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default">
															<i class="fa fa-eye"></i> view 
														</button>
													</td>
												</tr>
												
											</tbody>
										</table>
										</div>
									</div>
								</div>
								<!-- END TABLE STRIPED -->
						</div>
						</div>
					<!-- END MAIN CONTENT -->


					<!-- Modal HTML -->
						 <!-- Modal HTML -->
						<div id="myModal" class="modal">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Confirmation</h4>
									</div>
									<div class="modal-body">
										<p>Data Of Apply by student: 14-jan-1999 </p>
										<p>Data Of Apply by Admin: 28-june-1997</p>
										<p>Data Of Finishind: 11-june-2000</p>
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
		<!-- END MAIN -->	
@endsection