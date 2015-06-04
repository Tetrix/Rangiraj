<!--This is the header-->
<!doctype HTML>


<head>
					<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
					 <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'  type='text/css'>
					<!-- CSS link -->
					<link rel="stylesheet" href="styles\headerstyle.css">
					<!--Main CSS's -->
					<link rel="stylesheet" href="styles\main_class.css">
		
					
					<!-- Latest compiled and minified CSS -->
					<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

					<!-- jQuery library -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

					<!-- Latest compiled JavaScript -->
					<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

					
					<!-- Skripti za zvezdi -->
<<<<<<< HEAD
					 	<script src='star/jquery.js' type="text/javascript"></script>
						<script src='star/jquery.rating.js' type="text/javascript" language="javascript"></script>
					    <link href='star/jquery.rating.css' type="text/css" rel="stylesheet"/>
						<!-- Zavrsuva Skripti za zvezdi -->
						
						<!-- Hover.CSS document -->
						<link rel="stylesheet" href="styles\hover.css" media="all">
						
								<style>
									
											.active 
											{ 
												background:#2D3E52;
												top:0px;
												left:0px;
												right:0px;
												botton:0px;
												padding-bottom:1%;
											}
								
=======
					 <script src='star/jquery.js' type="text/javascript"></script>
	<script src='star/jquery.rating.js' type="text/javascript" language="javascript"></script>
    <link href='star/jquery.rating.css' type="text/css" rel="stylesheet"/>
	<!-- Zavrsuva Skripti za zvezdi -->
								<style>
									a.ex3:hover{
										
											background:#2D3E52;
											top:0px;
											left:0px;
											right:0px;
											botton:0px;
											padding:10%;
										
										
										}
											
											.active { 
											background:#2D3E52;
											top:0px;
											left:0px;
											right:0px;
											botton:0px;
										
											padding-bottom:5%;
														 }
>>>>>>> 84375c12d61e79c84b897eb5d983b14b9667ed67
								</style>
								
</head>



<div class="header">
	<!--Header-->
		<div class="row">

				<div class="col-xs-3"> 
				
					<a href="index.php?page=pocetna">	
							<img src="pictures\Logo.png"  height="100" width="180"  >  
					</a>
					
				</div>
				
				<div class="col-xs-4"> </div>
				
				
				<div class="col-xs-2">
				
					<br>
					
					<a href="index.php?page=najavise"  class="nounderline">
							<button id="d3" type="button" class="btn btn-md btn-default btn-block sharp"><span class="glyphicon glyphicon-log-in"></span> Најави се </button>
					</a>
					
							<!--ЛогиранТЕКСТ-->
							<button id="l1" type="button"  class="btn btn-lg btn-link disabled pull-right sharp"><span class="glyphicon glyphicon-user"></span> Логиран </button>
					
					
				</div>
				
				
				<div class="col-xs-2">
						
						<br>
						
						<a href="index.php?page=registrirajse" class="nounderline">
							<button id="d4" type="button" class="btn btn-md btn-default btn-block sharp"><span class="glyphicon glyphicon-plus"></span> Регистрирај се </button>
						</a>
						
						<!--LogoutKopce-->
						<a  class="nounderline">
							<button id="button1" type="button" onclick="showMore()" class="btn btn-md btn-default btn-block sharp"><span class="glyphicon glyphicon-log-out"></span> Одјави се </button>
						</a>
						
				</div>

				<br><br>
						
							
		
				
				<div class="col-sm-1"></div>
				
				
		</div>
		
		<!--NavigationBar-->
					<div class="navigationbar">
						<nav class="navbar navbar-custom ">
		
							
																		
									  <div class="row">
												 
													  <ul  class="nav nav-justified bg" >
																<div class="col-xs-2">
																	<li></li>
																</div>
																	
<<<<<<< HEAD
																<div class=" col-xs-2 hvr-float-shadow">
																	<li id="pocetna"><a class="nounderline" href="index.php?page=pocetna" >           <p class="navbar_text "><span class="glyphicon glyphicon-home"></span> Почетна        </p></a></li>
																</div>
																
																<div class="col-xs-2 hvr-float-shadow">
																	<li id="rangiraj"><a class="nounderline "  href="index.php?page=rangiraj">      	  <p class="navbar_text"><span class="glyphicon glyphicon-star"></span> Рангирај       </p></a></li>
																</div>
																
																<div class=" col-xs-2 hvr-float-shadow">
																	<li id="rezultati"><a class="nounderline" href="index.php?page=rezultati" >     	     	<p class="navbar_text"><span class="glyphicon glyphicon-list"></span> &nbspРезултати      </p></a></li>
																</div>
																
																<div class=" col-xs-2 hvr-float-shadow">
																	<li id="zanas"><a class="nounderline" href="index.php?page=zanas" >     	     	<p class="navbar_text"><span class="glyphicon glyphicon-info-sign"></span> &nbspИнфо      </p></a></li>
=======
																<div class=" col-xs-2 ">
																	<li id="pocetna"><a class="nounderline" href="index.php?page=pocetna" >           <p class="navbar_text "><span class="glyphicon glyphicon-home"></span> Почетна        </p></a></li>
																</div>
																
																<div class="col-xs-2">
																	<li id="rangiraj"><a class="nounderline" href="index.php?page=rangiraj">      	  <p class="navbar_text"><span class="glyphicon glyphicon-star"></span> Рангирај       </p></a></li>
																</div>
																
																<div class=" col-xs-2">
																	<li id="rezultati"><a class="nounderline" href="index.php?page=rezultati" >     	     	<p class="navbar_text"><span class="glyphicon glyphicon-list"></span> &nbspРезултати      </p></a></li>
																</div>
																
																<div class="col-xs-2">
																	<li id="zanas"><div class="navbar_text"><a class="ex3 nounderline" href="index.php?page=zanas ">       				<span class="glyphicon glyphicon-info-sign"></span> За Нас 			</a></div></li>
>>>>>>> 84375c12d61e79c84b897eb5d983b14b9667ed67
																</div>
																
																<div class="col-xs-2">
																
																</div>
														</ul>		
												 
										</div>	
										</div>
					
	
		

</div>


