<div class="mainfrezultati">
    <br>
    <form action="index.php?page=lenta-fakultet" method="post">
        <div class="row">
            <div class="col-xs-6">
               
                <center><label class="rezguidetxt">Одберете Факултет:</label></center>
                <select class="form-control" name="ime_fax" id="sel1">


                    <?php 
                   
require 'connect.php';

if($result = $rangiraj->query("SELECT ime_fakultet FROM fakulteti "))
{

while ($row = $result->fetch_assoc())
{

?>


                        <option>
                            <?php 
						
							  echo $row['ime_fakultet'] ;  }}
	                            
?>

                        </option>
                </select>
            </div>


            <div class="col-xs-6">
            </br>
                <button id="button" type="submit" class="btn btn-primary btn-md pull-left sharp">Потврди</button>

            </div>
        </div>
    </form>





</div>




 