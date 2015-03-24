<div class="main" id="pozadina">

<head>
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="styles\headerstyle.css">	
		
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="revealcinema\reveal.css">	
	  
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="revealcinema\jquery.reveal.js"></script>
			<!-- Skripta za dzvezdite + css -->
		<link rel="stylesheet" href="stars/rang/jquery/jRating.jquery.css" type="text/css" />
		<script type="text/javascript" src="stars/rang/jquery/jquery.js"></script>
<script type="text/javascript" src="stars/rang/jquery/jRating.jquery.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
			$('.basic').jRating();
	
});
	</script>
<!--- Zavrsuva skripta za dzvezdite + css -->
	
		
		
</head>
<br><br><br>
<div class="row">

<div class="col-sm-3"> </div>

			<div class="col-sm-6">
			
					<div class="jumbotron" id="jumboproff">
						
							<ul>
								<li><a href="#" data-reveal-id="myModal5"  class="nounderline"> Професор 1 </a> </li>
							</ul>
						
					</div>
				
			</div>
	
<div class="col-sm-3"> </div>

</div>


	<div id="myModal5" class="reveal-modal modalbg">
						<h3 id="txt3">Професорот може да го рангирате според:</h3>
						<ul>
						
						<!-- Zvezdi prof -->
				    <li>	Одговорност:	<div class="basic" data-id="7"></div>
					</li>
					<li>Предавања:<div class="basic" data-id="8"></div>
				    </li>
					<li>Литература: <div class="basic" data-id="9"></div> 
			        </li>
					<!-- Zavrsuva zvezdi prof -->
					
					
                    </ul>
						<br>
						<textarea rows="4" cols="60" placeholder="Внеси коментар"></textarea>
						<br>
						<button type="button" class="btn btn-sm btn-primary sharp pull-right"><div id="txt"> Потврди</div></button>
						<a class="close-reveal-modal">&#215;</a>
				</div>

</div>
