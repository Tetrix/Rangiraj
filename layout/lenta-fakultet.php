

<div class="main2">
<br>
	<div class="row">
			<div class="col-xs-2"></div>
			
			<div class="col-xs-8">
				<?php 
require 'connect.php';


if(isset($_POST["ime_fax"]))
$name_fax=$_POST["ime_fax"];


if($result = $rangiraj->query("SELECT * FROM fakulteti WHERE ime_fakultet='$name_fax' "))
{

while ($row = $result->fetch_assoc())
{

?>

				<h2 class="rezultaticol2"> <?php echo $row['ime_fakultet']; ?></h2>

				<center> 
				<h3 id="avg_ocena">
				<?php
				$row['rejting_na_fakultet']=substr($row['rejting_na_fakultet'],0,3);
				echo $row['rejting_na_fakultet'];?>              
				</h3> 
				</center>
				

			</div>
			
			<div class="col-xs-2"></div>
	</div>
	
	<div class="row">
	<div class="col-xs-1"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol">Пракса
				<h5>
			</div>
		<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol">Кадар<h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5 class="rezultaticol">Услови<h5>
			</div>
			<div class="col-xs-1"></div>
	</div>
	<div class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_praksa']=substr($row['prosek_praksa'],0,3);
				echo $row['prosek_praksa'];?>  
				 
				  &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_kadar']=substr($row['prosek_kadar'],0,3);
				echo $row['prosek_kadar'];?>  
				 
				  &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_uslovi']=substr($row['prosek_uslovi'],0,3);
				echo $row['prosek_uslovi']; }}?>  
				   &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
			<div class="col-xs-1"></div>
	</div>
	
	
	
	
	
			<?php 
			

			if($result2 = $rangiraj->query("SELECT * FROM fakultet_rang,fakulteti WHERE (fakulteti.ime_fakultet='$name_fax' AND fakultet_rang.id_fakultet=fakulteti.id_fakultet) "))
			{
				while ($row2 = $result2->fetch_assoc())
				
				{
			?>


		<hr>
		<div class="row">
			
			
			<div class="col-xs-6">
			
			<div class="row">
			
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Пракса</h5><center><?php echo $row2['praksa']; ?></center>
				</div>
				
				<div class="col-xs-2"> </div>
				
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Кадар</h5><center><?php echo $row2['kadar']; ?></center>
				</div>
			
				<div class="col-xs-2"> </div>
			
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Услови</h5><center><?php echo $row2['uslovi']; ?></center>
				</div>
			
			</div>
			
			</div>
			
			


			<div class="col-xs-4">
		
					<textarea disabled id="resizeboxdisable" rows="3" cols="62"> 
					<?php echo $row2['fax_kom']; ?>
					</textarea>
				
			</div>
			
			<div class="col-xs-2">

			
			</div>

			
		
	</div>
	<?php }} ?>
	<hr>

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