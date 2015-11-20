

<div class="main2">
<br>
	<div class="row">
			<div class="col-xs-2"></div>
			
			<div class="col-xs-8">
			<?php 
require 'connect.php';


if(isset($_POST["ime_kampus"]))
$name_kampus=$_POST["ime_kampus"];


if($result = $rangiraj->query("SELECT * FROM kampus WHERE ime_kampus='$name_kampus' "))
{

while ($row = $result->fetch_assoc())
{

?>

				<h2 class="rezultaticol2"> <?php echo $row['ime_kampus']; ?> </h2>
				<center> 
				<h3 id="avg_ocena">
				<?php
				$row['rejting_na_kampus']=substr($row['rejting_na_kampus'],0,3);
				echo $row['rejting_na_kampus']; ?>              
				</h3> 
				</center>

			</div>
			
			<div class="col-xs-2"></div>
	</div>
	
	<div class="row">
	<div class="col-xs-1"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol">Хигиена
				<h5>
			</div>
		<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol">Локација<h5>
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
				$row['prosek_higiena']=substr($row['prosek_higiena'],0,3);
				echo $row['prosek_higiena'];?>  
				 
				  &nbsp&nbsp<img src="pictures/zvez.png" height="25px" width="25px"><h5>
			</div>
				<div class="col-xs-2"></div>
			<div class="col-xs-2">
				<h5  class="rezultaticol"><?php 
				$row['prosek_lokacija']=substr($row['prosek_lokacija'],0,3);
				echo $row['prosek_lokacija'];?>  
				 
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
			

			if($result2 = $rangiraj->query("SELECT * FROM kampus_rang,kampus WHERE (kampus.ime_kampus='$name_kampus' AND kampus_rang.id_kampus=kampus.id_kampus) "))
			{
				while ($row2 = $result2->fetch_assoc())
				
				{
			?>
	<hr>
	
	
	
	
	
		<div class="row">
			
			
			<div class="col-xs-6">
			
			<div class="row">
			
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Хигиена<h5><center><?php echo $row2['higiena']; ?></center>
				</div>
				
				<div class="col-xs-2"> </div>
				
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Локација<h5><center><?php echo $row2['lokacija']; ?></center>
				</div>
			
				<div class="col-xs-2"> </div>
			
				<div class="col-xs-2">
				<h5  class="rezultaticol1">Услови<h5><center><?php echo $row2['uslovi']; ?></center>
				</div>
			
			</div>
			
			</div>
			
	
			<div class="col-xs-4">
			
					<textarea disabled id="resizeboxdisable" rows="3" cols="62"> <?php echo $row2['kam_komentar']; ?> </textarea>
				
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
	
	
	