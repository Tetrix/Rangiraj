<div class="main" id="pozadinalogin">
	
			<BR><br>
			
<div class ="row">
		
			<div class="col-sm-4"></div>
				
			<div class="col-sm-4">
									<div class="jumbotron" id="jumbologin">
										
												<center>
															<img src="pictures\lock.png" height="120" width="120">
															<div  Id="txtlogin"> Најавете  се </div>
												</center>
												
													<form role="form">
														<div class="form-group">
																			
															<div class="form-group has-feedback">
																	<label class="control-label" id="txt">Мејл:</label>
																	<input type="text" name="najava_username" class="form-control" placeholder="Внесете го регистрираниот студентски мејл" />
																	<i class="glyphicon glyphicon-user form-control-feedback"></i>
															</div>
																	
															<div class="form-group has-feedback">
																	<label class="control-label" id="txt">Лозинка:</label>
																	<input type="password" name="najava_passoword" class="form-control" placeholder="Внесете ја регистрираната лозинка" />
																	<i class="glyphicon glyphicon-lock form-control-feedback"></i>
															</div>
																			
														</div>
													</form>
											
													<form role="form">
														
														
															<a href="#">Забравена Лозинка</a>
															
														
															<button id="button" onclick="showLess()" type="button" class="btn btn-primary btn-md pull-right sharp">Потврди</button>
															
															<div class="checkbox">
																	<label>
																			<input type="checkbox" "> <div id="txt">Остани најавен</div>
																	</label>
																											
													</form>
							
									</div>
			</div>
			
			<div class="col-sm-4"></div>
</div>
			
				
<script type="text/javascript">
			
			var button = document.getElementById("button");
			var d3 = document.getElementById("d3");

			function showMore() 
					{
						button1.style.display="none";
						l1.style.display="none";
						d3.style.display="block";
						d4.style.display="block";
					}

			function showLess() 
					{
						button1.style.display="inline-block";
						l1.style.display="inline-block";
						button.style.display="inline-block";
						d3.style.display="none";
						d4.style.display="none";
					}
</script>
			
 
</div>



