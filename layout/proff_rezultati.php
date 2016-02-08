<div class="main2">
    <br>

    <form action="" method="post">
        <div class="row">
            <div class="col-xs-6">
                <center>
                    <label class="rezguidetxt">Одберете Професор:</label>
                </center>
                <select class="form-control" name="ime_fax" id="sel1">



                    <?php 
require 'connect.php';

if(isset($_POST["ime_fax"]))
{

$var=$_POST["ime_fax"];
?>
                        <option>
                            <?php echo $_POST["ime_fax"] ;  ?>
                        </option>
                        <?php 
if($result = $rangiraj->query("SELECT ime_fakultet FROM fakulteti WHERE ime_fakultet!='$var' "))
{
while ($row = $result->fetch_assoc())
{
?>
                            <option>
                                <?php echo $row['ime_fakultet'] ;  ?>
                            </option>

                            <?php

}}}
else if($result = $rangiraj->query("SELECT ime_fakultet FROM fakulteti "))
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

    <p>

        <form action="index.php?page=lenta-profesori" method="post">
            <div class="row">
                <div class="col-xs-6">

                    <select class="form-control" name="ime_prof" id="sel1">


                        <?php 
require 'connect.php';

if(isset($_POST["ime_fax"]))
$name_fax=$_POST["ime_fax"];

if($result = $rangiraj->query("SELECT ime_prezime_prof FROM profesori,fakulteti,fakultet_profesor 
WHERE fakulteti.ime_fakultet = '$name_fax' AND fakulteti.id_fakultet=fakultet_profesor.id_fakultet 
AND profesori.id_profesor = fakultet_profesor.id_profesor "))
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
                </div>


                <div class="col-xs-6">
                    <button id="button" type="submit" class="btn btn-primary btn-md pull-left sharp">Потврди</button>

                </div>
            </div>
        </form>