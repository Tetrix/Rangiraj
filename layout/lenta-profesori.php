

<div class="main2">
<br>
	<div class="row">
			<div class="col-xs-2"></div>
			
			<div class="col-xs-8">
			<?php 
require 'connect.php';


if(isset($_POST["ime_prof"]))
$name_prof=$_POST["ime_prof"];


if($result = $rangiraj->query("SELECT * FROM profesori WHERE ime_prezime_prof='$name_prof' "))
{

while ($row = $result->fetch_assoc())
{

?>

				<h2 class="rezultaticol2"> <?php echo $row['ime_prezime_prof']; ?> </h2>
				<center> 
				<h3 id="avg_ocena">
				<?php
				$row['rejting_na_profesori']=substr($row['rejting_na_profesori'],0,3);
				echo $row['rejting_na_profesori'];?>              
				</h3> 
				</center>
				

			</div>
			
			<div class="col-xs-2"></div>
	</div>
	
	<div class="row">
	<div class="col-xs-1"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol">Одговорност<h5>
			</div>
		<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol">Литература<h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5 class="rezultaticol">Предавања<h5>
			</div>
			<div class="col-xs-1"></div>
	</div>
	<div class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_odgovornost']=substr($row['prosek_odgovornost'],0,3);
				echo $row['prosek_odgovornost'];?>  
				 
				  &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_predavanja']=substr($row['prosek_predavanja'],0,3);
				echo $row['prosek_predavanja'];?>  
				 
				  &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_literatura']=substr($row['prosek_literatura'],0,3);
				echo $row['prosek_literatura']; }}?>  
				   &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
			<div class="col-xs-1"></div>
	</div>
	<?php 
			

			if($result2 = $rangiraj->query("SELECT * FROM prof_rang,profesori WHERE (profesori.ime_prezime_prof='$name_prof' AND prof_rang.id_prof=profesori.id_profesor) "))
			{
				while ($row2 = $result2->fetch_assoc())
				
				{
			?>
	<hr>
	
	
	
	
	
		<div class="row">
			
			
			<div class="col-xs-6">
			
			<div class="row">
			
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Одговорност<h5><center><?php echo $row2['odgovornost']; ?></center>
				</div>
				
				<div class="col-xs-2"> </div>
				
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Литература<h5><center><?php echo $row2['predavanja']; ?></center>
				</div>
			
				<div class="col-xs-2"> </div>
			
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Предавања<h5><center><?php echo $row2['literatura']; ?></center>
				</div>
			
			</div>
			
			</div>
			
	
			<div class="col-xs-4">
			
					<textarea disabled id="resizeboxdisable" rows="3" cols="62"> 
					<?php echo $row2['prof_kom']; ?>
					</textarea>

			</div>
			
			<div class="col-xs-2">
			
			</div>

			
		
	</div>
	<?php }} ?>
	<hr>

	</div>
	</div>

	<script type="text/javascript">
 	
 	 // var objVal = parseInt(document.getElementById('avg_ocena').val());
 	 // if (objVal<3)
 	 // {
 	 	
 	 	var obj=document.getElementById("avg_ocena");
 	 	var val=obj.textContent;
 	 	val=parseFloat(val);

 	 	if(val<2.5)
 	 	{
 	 	obj.style.color="red";
 	 	}
 	 	else if (val>=2.5 && val<4)
 	 	{
 	 	obj.style.color="yellow";
 	 	}
 	 	else if (val>=4)
 	 	{
 	 		obj.style.color="#33ff33";
 	 	}

 	 



 	

	</script>
	
	
	