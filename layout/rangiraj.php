<div class="mainwwrang">
<div  class="main">

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
			<div class="jumbotron" id="jumbo1">  Во овој дел може да го рангирате кампусот според Хигиената, Локацијата во однос на живеалиштата и воопшто какви се условите за студирање во истиот од аспект на опрема, простории итн.  </div>
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
					
					<form action="star/insert_indb.php" id="form1_validation"method="post" >
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
						<textarea rows="4" cols="60" name="fax_kom" id="resizeboxdisable1" placeholder="Внеси коментар"></textarea>
						<br>
						
						<button type="submit" class="btn btn-sm btn-primary sharp" id="button1_val" name="form1" onclick="check()" ><div id="txt" > Потврди</div> </button>
						</form>
						<a class="close-reveal-modal">&#215;</a>
						
						<!-- Zavrsuva zvezdi kampus -->
				</div>
	
				
								
	
				<div id="myModal2" class="reveal-modal modalbg revealpaddig">
						<h2 id="txt3">Кампусот може да го рангирате според:</h2>
						<ul>
						
						<!-- Zvezdi kampus -->
						<form action="star/insert_indb.php" id="form2_validation" method="post">
				    <li>	Хигиена:	
					<br>
     <input class="star" type="radio" name="test4" id="16" value="1"/>
    <input class="star" type="radio" name="test4" id="17"value="2"/>
    <input class="star" type="radio" name="test4" id="18"value="3"/>
    <input class="star" type="radio" name="test4" id="19"value="4"/>
    <input class="star" type="radio" name="test4" id="20"value="5"/>
	
					</li><br>
					<li>Локација:
					<br>
     <input class="star" type="radio" name="test5" id="21"value="1"/>
    <input class="star" type="radio" name="test5" id="22"value="2"/>
    <input class="star" type="radio" name="test5" id="23"value="3"/>
    <input class="star" type="radio" name="test5" id="24"value="4"/>
    <input class="star" type="radio" name="test5" id="25"value="5"/>
	
				    </li><br>
					<li>Услови: 
					<br>
    <input class="star" type="radio" name="test6" id="26" value="1"/>
    <input class="star" type="radio" name="test6" id="27" value="2"/>
    <input class="star" type="radio" name="test6" id="28" value="3"/>
    <input class="star" type="radio" name="test6" id="29" value="4"/>
    <input class="star" type="radio" name="test6" id="30" value="5"/>
	
	
			        </li>
					
					
					
                    </ul>
                    <br>
						<textarea rows="4" cols="60" name="kam_kom" id="resizeboxdisable2" placeholder="Внеси коментар"></textarea>
						<br>
						<button type="submit" class="btn btn-sm btn-primary sharp" name="form2" id="button2_val"onclick="check2()"><div id="txt"> Потврди</div></button>
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
   var one2= document.getElementById("16");
   var two2= document.getElementById("17");
   var three2= document.getElementById("18");
   var four2= document.getElementById("19");
   var five2= document.getElementById("20");
   var six2= document.getElementById("21");
   var seven2= document.getElementById("22");
   var eight2= document.getElementById("23");
   var nine2= document.getElementById("24");
   var ten2= document.getElementById("25");
   var eleven2= document.getElementById("26");
   var twelve2= document.getElementById("27");
   var thirteen2= document.getElementById("28");
   var fourteen2= document.getElementById("29");
   var fifteen2= document.getElementById("30");
   var kom1=document.getElementById("resizeboxdisable1");
   var kom2=document.getElementById("resizeboxdisable2");
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
   
if(kom1.value=="")
	{
    alert("Внесете коментар");
	}
	}
function check2(){
 if((one2.checked == false) && (two2.checked == false) && (three2.checked == false) && (four2.checked == false) && (five2.checked == false))
   {
   alert("Рангирајте го полето хигиена");
   }
 if((six2.checked == false) && (seven2.checked == false) && (eight2.checked == false) && (nine2.checked == false) && (ten2.checked == false))
   {
    alert("Рангирајте го полето локација");
   }
 if((eleven2.checked == false) && (twelve2.checked == false) && (thirteen2.checked == false) && (fourteen2.checked == false) && (fifteen2.checked == false))
   {
    alert("Рангирајте го полето услови");
   }
  if(kom2.value=="")
	{
    alert("Внесете коментар");
	}
}
</script>



<!-- FALE EVENT KOA KE SE IZGLASA SE DA VIKA " VI BLAGODARIME ZA GLASANJETO " -->
<!-- ZAVRSUVA SKRIPTA ZA VALIDACIJA ZA DZVEZDITE KAJ FAKULTET I KAMPUS -->

				
				</div>
</div>


<script type="text/javascript">

                        $(document).ready(function() {
                            $(".main").css("display", "none");

                            $(".main").slideDown(1000);

                            $("a.transition").click(function(event){
                                event.preventDefault();
                                linkLocation = this.href;

                            });

                            function redirectPage() {
                                window.location = linkLocation;
                            }
                        });

    </script>

    
      <script type="text/javascript">

                        $(document).ready(function() {
                            $(".mainwwrang").css("display", "none");

                            $(".mainwwrang").fadeIn(1000);

                            $("a.transition").click(function(event){
                                event.preventDefault();
                                linkLocation = this.href;

                            });

                            function redirectPage() {
                                window.location = linkLocation;
                            }
                        });

        </script>
