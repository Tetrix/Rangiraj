

<div class="main2">
<br>
<form action="index.php?page=lenta-kampus" method="post">
	<div class="row">
			<div class="col-xs-6">
				
			<select class="form-control" id="sel1" name="ime_kampus">
			<?php 
require 'connect.php';

if($result = $rangiraj->query("SELECT ime_kampus FROM kampus "))
{

while ($row = $result->fetch_assoc())
{

?>
					
							
							<option> <?php 
						
							  echo $row['ime_kampus'] ;  }}
	                            
?> </option>
					
							</select>	
			</div>
			
			
				<div class="col-xs-6">
				<button id="button" type="submit" class="btn btn-primary btn-md pull-left sharp">Потврди</button>
			
				</div>
					

			
			
			
			
	</div>
	

	
	
	
	
	


	</div>
	
	
	