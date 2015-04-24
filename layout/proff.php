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
		 <script src='star/jquery.js' type="text/javascript"></script>
	<script src='star/jquery.rating.js' type="text/javascript" language="javascript"></script>
    <link href='star/jquery.rating.css' type="text/css" rel="stylesheet"/>
	<script src="star/star_validation.js" type="text/javascript"></script>
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


	<div id="myModal5" class="reveal-modal modalbg revealpaddig">
						<h3 id="txt3">Професорот може да го рангирате според:</h3>
						<ul>
						
						
						<!-- Zvezdi prof -->
				    <form action="star/star_validation.php" id="form3_validation" method="post">
					
				    <li>	Предавања:	
					<br>
     <input class="star" type="radio" name="test1" id="1" value="1"/>
    <input class="star" type="radio" name="test1" id="2"value="2"/>
    <input class="star" type="radio" name="test1" id="3"value="3"/>
    <input class="star" type="radio" name="test1" id="4"value="4"/>
    <input class="star" type="radio" name="test1" id="5"value="5"/>
	
					</li><br>
					
					<li>Литература:
					<br>
    <input class="star" type="radio" name="test2" id="6"value="1"/>
    <input class="star" type="radio" name="test2" id="7"value="2"/>
    <input class="star" type="radio" name="test2" id="8"value="3"/>
    <input class="star" type="radio" name="test2" id="9"value="4"/>
    <input class="star" type="radio" name="test2" id="10"value="5"/>
	
				    </li><br>
					
					<li>Оцена: 
					<br>
    <input class="star" type="radio" name="test3" id="11" value="1"/>
    <input class="star" type="radio" name="test3" id="12" value="2"/>
    <input class="star" type="radio" name="test3" id="13" value="3"/>
    <input class="star" type="radio" name="test3" id="14" value="4"/>
    <input class="star" type="radio" name="test3" id="15" value="5"/>
	
			        </li>
					
					
					
                    </ul>
						<br>
						<textarea rows="4" cols="60" placeholder="Внеси коментар"></textarea>
						<br>
						<button type="submit" name="potvrdi3" class="btn btn-sm btn-primary sharp" id="button3_val" onclick="form_star_validation"><div id="txt"> Потврди</div></button>
						<a class="close-reveal-modal">&#215;</a>
						</form>
						<!-- Zavrsuva zvezdi kampus -->
				</div>

</div>

