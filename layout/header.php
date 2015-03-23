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

					
								<style>
											ul.nav a:hover  { background:#2D3E52; !important}
											ul.nav a:focus { background:#2D3E52;  }
											.active { background:#2D3E52;  }
								</style>
								
</head>



<div class="header">
	<!--Header-->
		<div class="row">

				<div class="col-sm-3"> 
				
					<a href="index.php?page=pocetna">	
							<img src="pictures\Logo.png"  height="130" width="250"  >  
					</a>
					
				</div>
				
				<div class="col-sm-4"> </div>
				
				
				<div class="col-sm-2">
				
					<br><br>
					
					<a href="index.php?page=najavise"  class="nounderline">
							<button id="d3" type="button" class="btn btn-lg btn-default btn-block sharp"><span class="glyphicon glyphicon-log-in"></span> Најави се </button>
					</a>
					
							<!--ЛогиранТЕКСТ-->
							<button id="l1" type="button"  class="btn btn-lg btn-link disabled pull-right sharp"><span class="glyphicon glyphicon-user"></span> Логиран </button>
					
					
				</div>
				
				
				<div class="col-sm-2">
						
						<br><br>
						
						<a href="index.php?page=registrirajse" class="nounderline">
							<button id="d4" type="button" class="btn btn-lg btn-default btn-block sharp"><span class="glyphicon glyphicon-plus"></span> Регистрирај се </button>
						</a>
						
						<!--LogoutKopce-->
						<a  class="nounderline">
							<button id="button1" type="button" onclick="showMore()" class="btn btn-lg btn-default btn-block sharp"><span class="glyphicon glyphicon-log-out"></span> Одјави се </button>
						</a>
						
				</div>

				<br><br>
						
							
		
				
				<div class="col-sm-1"></div>
				
				
		</div>
		
		<!--NavigationBar-->
		<div class="row">
			<div class="col-sm-12">
					<div class="navigationbar">
						<nav class="navbar navbar-custom ">
								<div class="container-fluid"> 
										<div class="navbar-header">
									
												  <ul  class="nav nav-justified bg" >
																	<li></li>
																	<li id="pocetna"><a href="index.php?page=pocetna" >           <p class="navbar_text "><span class="glyphicon glyphicon-home"></span> Почетна        </p></a></li>
																	<li id="rangiraj"><a href="index.php?page=rangiraj" >      	  <p class="navbar_text"><span class="glyphicon glyphicon-star"></span> Рангирај       </p></a></li>
																	<li id="rezultati"><a href="index.php?page=rezultati" >     	     	<p class="navbar_text"><span class="glyphicon glyphicon-list"></span> Резултати      </p></a></li>
																	<li id="zanas"><a href="index.php?page=zanas ">       				<p class="navbar_text"><span class="glyphicon glyphicon-info-sign"></span> За Нас 			</p></a></li>
																	<li></li>
												  </ul>
							 
										</div>
								</div>
						</nav>
					</div>
			</div>
		</div>

</div>


