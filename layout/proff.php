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
				    <form action="star/test.php" method="post">
				    <li>	Предавања:	
					<br>
    <input class="star" type="radio" name="test1" value="1"/>
    <input class="star" type="radio" name="test1" value="2"/>
    <input class="star" type="radio" name="test1" value="3"/>
    <input class="star" type="radio" name="test1" value="4"/>
    <input class="star" type="radio" name="test1" value="5"/>
	
					</li><br>
					<li>Литература:
					<br>
    <input class="star" type="radio" name="test2" value="1"/>
    <input class="star" type="radio" name="test2" value="2"/>
    <input class="star" type="radio" name="test2" value="3"/>
    <input class="star" type="radio" name="test2" value="4"/>
    <input class="star" type="radio" name="test2" value="5"/>
	
				    </li><br>
					<li>Оцена: 
					<br>
    <input class="star" type="radio" name="test3" value="1"/>
    <input class="star" type="radio" name="test3" value="2"/>
    <input class="star" type="radio" name="test3" value="3"/>
    <input class="star" type="radio" name="test3" value="4"/>
    <input class="star" type="radio" name="test3" value="5"/>
	<input type="submit" value="Potvrdi" />
	
			        </li>
					<!-- Zavrsuva zvezdi kampus -->
					
					</form>
                    </ul>
						<br>
						<textarea rows="4" cols="60" placeholder="Внеси коментар"></textarea>
						<br>
						<button type="button" class="btn btn-sm btn-primary sharp"><div id="txt"> Потврди</div></button>
						<a class="close-reveal-modal">&#215;</a>
				</div>

</div>
