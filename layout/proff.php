<div class="main" id="pozadina">

<br><br><br>

<div class="row">

<div class="col-sm-3"> </div>

			<div class="col-sm-6">
			
					<div class="jumbotron" id="jumboproff">
						



<form action = "star/insert_indb.php" method = "post">

<select class="form-control" id="sel1" name="ime_profesor">
<?php
 
require 'connect.php';


session_start();

$id_fax = $_SESSION['id_fakultet'];


if($result = $rangiraj->query("SELECT ime_prezime_prof FROM profesori WHERE id_fakultet = $id_fax"))
{

while ($row = $result->fetch_assoc())
{

?>


                        <option>
                            <?php 
						
							  echo $row['ime_prezime_prof'] ;  }}
	                            
							?>
                        </option>

</select>

            <div class="col-xs-6">
            	

            	<div data-reveal-id="myModal5"  class="nounderline">
            	<!-- <a href="#" data-reveal-id="myModal5"  class="nounderline" > -->
                <button id="button" type="submit" class="btn btn-primary btn-md pull-left sharp" >Потврди</button>
                <!-- </a> -->


            	</div>
        </div>    



					</div>
				
			</div>
	
<div class="col-sm-3"> </div>

</div>
</form>




<!--- PROFESORI KRAJ  -->


	<div id="myModal5" class="reveal-modal modalbg revealpaddig">
						<h3 id="txt3">Професорот може да го рангирате според:</h3>
						<ul>
						
						
						<!-- Zvezdi prof -->
				    <form action="star/insert_indb.php" id="form3_validation" method="post">
					
				    <li>	Одговорност:
					<br> 
     <input class="star" type="radio" name="test7" id="1" value="1"/>
    <input class="star" type="radio" name="test7" id="2"value="2"/>
    <input class="star" type="radio" name="test7" id="3"value="3"/>
    <input class="star" type="radio" name="test7" id="4"value="4"/>
    <input class="star" type="radio" name="test7" id="5"value="5"/>
	
					</li><br>
					
					<li> Предавања:	
					<br>
    <input class="star" type="radio" name="test8" id="6"value="1"/>
    <input class="star" type="radio" name="test8" id="7"value="2"/>
    <input class="star" type="radio" name="test8" id="8"value="3"/>
    <input class="star" type="radio" name="test8" id="9"value="4"/>
    <input class="star" type="radio" name="test8" id="10"value="5"/>
	
				    </li><br>
					
					<li>Литература: 
					<br>
    <input class="star" type="radio" name="test9" id="11" value="1"/>
    <input class="star" type="radio" name="test9" id="12" value="2"/>
    <input class="star" type="radio" name="test9" id="13" value="3"/>
    <input class="star" type="radio" name="test9" id="14" value="4"/>
    <input class="star" type="radio" name="test9" id="15" value="5"/>
	
			        </li>
					
					
					
                    </ul>
						<br>
						<textarea rows="4" cols="60" name="prof_kom"  id="prof_kom" placeholder="Внеси коментар"></textarea>
						<br>
						<button type="submit" name="form3" class="btn btn-sm btn-primary sharp" id="button3_val" onclick="check()"><div id="txt"> Потврди</div></button>
						<a class="close-reveal-modal">&#215;</a>
						</form>
						<!-- Zavrsuva zvezdi kampus -->
				</div>

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
   var kom1=document.getElementById("prof_kom");

   function check() {
 if((one.checked == false) && (two.checked == false) && (three.checked == false) && (four.checked == false) && (five.checked == false))
   {
    alert("Рангирајте гo полет Одговорност");
   }
if((six.checked == false) && (seven.checked == false) && (eight.checked == false) && (nine.checked == false) && (ten.checked == false))
   {
   alert("Рангирајте го полето Предавања");
   }
if((eleven.checked == false) && (twelve.checked == false) && (thirteen.checked == false) && (fourteen.checked == false) && (fifteen.checked == false))
   {
    alert("Рангирајте го полето Литература");
   }
   
if(kom1.value=="")
	{
    alert("Внесете коментар");
	}
	}
</script>


</div>

