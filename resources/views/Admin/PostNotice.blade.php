@extends('Admin.AdminParent')
@section('PostNotice')		
		<!-- MAIN -->
		<title>Post Notice | SulabhNaukari -  </title>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Post Notice</h3>
					<div class="row">
						<div class="">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-body">
									<div id="sample">

										<div class="row">
											<div class="col-sm-12">
												<form id = "textarea_div">
													<textarea id = "area2" name="area2" placeholder="" style="width: 100%; height: 50%"></textarea>
												</form>
											</div>
										</div><br>

										<div class="row">
											<div class="col-sm-12">
												<button id="post" class="btn btn-success btn-lg">Post</button>
											</div>
										</div>

									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		<script type="text/javascript" src="embeded_editor_admin/nicEdit-latest.js"></script> 
	    <script type="text/javascript">
			//<![CDATA[
			  bkLib.onDomLoaded(function() {
				new nicEditor({fullPanel : true}).panelInstance('area2');			        
			  });
			  //]]>
		</script>
		<script>
			
			$('#post').click(function(){
				var data = $("div.nicEdit-main").html();
      			alert(data);
			});
			
		</script>
								
@endsection