<div  class="main" id="pozadina">
	<head>
	
		<meta charset="utf-8" />
	
		<link rel="stylesheet" href="styles\headerstyle.css">	
		
		<!-- Attach our CSS -->
	  	<link rel="stylesheet" href="revealcinema\reveal.css">	
	  
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="revealcinema\jquery.reveal.js"></script>
		
	

	
	</head>

<br><br><br>

<div class="row">

	<div class="col-sm-1"> </div>
		
		<div class="col-sm-10"> 
				
					
							<h1 id="textjumbo"> Рангирање </h1>
						
							<h4 id="textjumbo2"> Овде може да ги рангирате професорите, кампусите на вашиот факултет како и самиот факултет. <br> Тоа го правите со кликање на едно од копчињата подолу </h4>
							
							<p id="textjumbo3"> Напомена: Факултетот, кампусот и Професорите кои ќе ги оценувате се лимитирани на факултеот што сте го одбрале при регистрација. </p>
				
			
		</div>
		
		<div class="col-sm-1"> </div>
		
</div>	
	<br>
	<div class="row">
	
		<div class="col-sm-3"></div>
		
		<div class="col-sm-2">
												
			<a href="#" data-reveal-id="myModal"  class="nounderline">
				<button type="button" class="btn btn-md rangkopcinja btn-block sharp" id="txt2"> Факултет </button>
			</a>
			
			<br>
				
			<div class="jumbotron" id="jumbo1" id="txt"> Од аспект на кадaр, пракса и услови станува збор за тоа колку сте задоволни во однос на изборот на вработените во рамките на факултетот, какви се можностите за како и самата реализација на праксата и во општо колку сте задоволни од условите за студирање на факултетот.</div>
		</div>
										
		<div class="col-sm-2">
										
			<a href="#" data-reveal-id="myModal2"  class="nounderline">
				<button type="button" class="btn btn-md rangkopcinja btn-block sharp" id="txt2"> Кампус </button>
			</a>
				
			<br>				
			<div class="jumbotron" id="jumbo1">  Во  </div>
		</div>
										
		<div class="col-sm-2">
					
									
			<a href="index.php?page=proff"  class="nounderline">
				<button type="button" class="btn btn-md rangkopcinja btn-block sharp" id="txt2"> Професор </button>
			</a>	
								
			<br>
			<div class="jumbotron" id="jumbo1"> Во однос на тоа како професор ја спроведува наставата, оценете како ги спроведува предавањата и каква му е литературата што ја користи при истите и материјалот за учење,  а исто така и степенот на одговорноста (доцнење на час, начин на оценување)  </div>				
		</div>
	
		<div class="col-sm-3"></div>
		
	</div>
	
	
				<div id="myModal" class="reveal-modal modalbg revealpaddig">
						<h3 id="txt3">Факултетот може да го рангирате според:</h3>
						<ul>
						
						<!-- Zvezdi fax -->
					
					<form action="star/star_validation.php" id="form1_validation"method="post" >
				    <li>	Пракса:	
					<br>
					
	<input class="star" type="radio" name="test1" id="1" value="1"/>
    <input class="star" type="radio" name="test1" id="2"value="2"/>
    <input class="star" type="radio" name="test1" id="3"value="3"/>
    <input class="star" type="radio" name="test1" id="4"value="4"/>
    <input class="star" type="radio" name="test1" id="5"value="5"/>
	
					</li><br>
					<li>Кадар:
					<br>
    <input class="star" type="radio" name="test2" id="6"value="1"/>
    <input class="star" type="radio" name="test2" id="7"value="2"/>
    <input class="star" type="radio" name="test2" id="8"value="3"/>
    <input class="star" type="radio" name="test2" id="9"value="4"/>
    <input class="star" type="radio" name="test2" id="10"value="5"/>
	
				    </li><br>
					<li>Услови: 
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
						
						<button type="submit" class="btn btn-sm btn-primary sharp" id="button1_val" onclick="check()" ><div id="txt" > Потврди</div> </button>
						</form>
						<a class="close-reveal-modal">&#215;</a>
						
						<!-- Zavrsuva zvezdi kampus -->
				</div>
	
				
								
	
				<div id="myModal2" class="reveal-modal modalbg revealpaddig">
						<h2 id="txt3">Кампусот може да го рангирате според:</h2>
						<ul>
						
						<!-- Zvezdi kampus -->
						<form action="star/star_validation.php" id="form2_validation" method="post">
				    <li>	Хигиена:	
					<br>
     <input class="star" type="radio" name="test1" id="1" value="1"/>
    <input class="star" type="radio" name="test1" id="2"value="2"/>
    <input class="star" type="radio" name="test1" id="3"value="3"/>
    <input class="star" type="radio" name="test1" id="4"value="4"/>
    <input class="star" type="radio" name="test1" id="5"value="5"/>
	
					</li><br>
					<li>Локација:
					<br>
     <input class="star" type="radio" name="test2" id="6"value="1"/>
    <input class="star" type="radio" name="test2" id="7"value="2"/>
    <input class="star" type="radio" name="test2" id="8"value="3"/>
    <input class="star" type="radio" name="test2" id="9"value="4"/>
    <input class="star" type="radio" name="test2" id="10"value="5"/>
	
				    </li><br>
					<li>Услови: 
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
						<button type="submit" class="btn btn-sm btn-primary sharp" id="button2_val"onclick="check2()"><div id="txt"> Потврди</div></button>
						<a class="close-reveal-modal">&#215;</a>
						</form>
						<!-- Zavrsuva zvezdi kampus -->
				</div>
	
				<script>
						$(function() {
						$("#rangiraj a:contains('Рангирај')").parent().addClass('active');
						});
				</script>

				<!--- SKRIPTA ZA VALIDACIJA ZA DZVEZDITE KAJ FAKULTET I KAMPUS -->
			

			
				<script>
var button1_val= document.getElementById("button1_val");
   var button2_val= document.getElementById("button2_val");
   var button3_val= document.getElementById("button3_val"); 
   
   var one= document.getElementById("1");
   var two= document.getElementById("2");
   var three= document.getElementById("3");
   var four= document.getElementById("4");
   var five= document.getElementById("5");
   var six= document.getElementById("6");
   var seven= document.getElementById("7");
   var eight= document.getElementById("8");
   var nine= document.getElementById("9");
   var ten= document.getElementById("10");
   var eleven= document.getElementById("11");
   var twelve= document.getElementById("12");
   var thirteen= document.getElementById("13");
   var fourteen= document.getElementById("14");
   var fifteen= document.getElementById("15");
function check() {
 if((one.checked == false) && (two.checked == false) && (three.checked == false) && (four.checked == false) && (five.checked == false))
   {
    alert("Рангирајте гo полет Пракса");
   }
if((six.checked == false) && (seven.checked == false) && (eight.checked == false) && (nine.checked == false) && (ten.checked == false))
   {
   alert("Рангирајте го полето Кадар");
   }
if((eleven.checked == false) && (twelve.checked == false) && (thirteen.checked == false) && (fourteen.checked == false) && (fifteen.checked == false))
   {
    alert("Рангирајте го полето Услови");
   }
   }

function check2(){
 if((one.checked == false) && (two.checked == false) && (three.checked == false) && (four.checked == false) && (five.checked == false))
   {
   alert("Рангирајте го полето хигиена");
   }
 if((six.checked == false) && (seven.checked == false) && (eight.checked == false) && (nine.checked == false) && (ten.checked == false))
   {
    alert("Рангирајте го полето локација");
   }
 if((eleven.checked == false) && (twelve.checked == false) && (thirteen.checked == false) && (fourteen.checked == false) && (fifteen.checked == false))
   {
    alert("Рангирајте го полето услови");
   }
}
</script>




<!-- ZAVRSUVA SKRIPTA ZA VALIDACIJA ZA DZVEZDITE KAJ FAKULTET I KAMPUS -->

				
				</div>
