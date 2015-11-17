<?php

$connection=mysqli_connect('127.0.0.1','root','','baza');
$utf8="SET NAMES UTF8";
mysqli_query($connection,$utf8);


 //  Rejting za faks

if(($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST["form1"]))
{
if(!empty($_POST['test1']) && !empty($_POST['test2']) && !empty($_POST['test3']) && !empty($_POST['fax_kom']))
 {
$praksa=floatval($_POST['test1']);
$kadar=floatval($_POST['test2']);
$uslovi_fax=floatval($_POST['test3']);
$fax_kom= mysqli_real_escape_string($connection,$_POST['fax_kom']);

 
$get_all1 = mysqli_query($connection, "SELECT * FROM fakultet_rang WHERE id_fakultet='8' ");
$num_rows1=mysqli_num_rows($get_all1)+1;

$input_fax=" INSERT INTO fakultet_rang (id_fakultet,id_korisnik,praksa,kadar,uslovi,fax_kom) VALUES ('8','1','$praksa','$kadar','$uslovi_fax','$fax_kom') "; 
mysqli_query($connection,$input_fax);
$vote1=($praksa+$kadar+$uslovi_fax)/3;
$input_rejting_fax=" UPDATE fakulteti SET rejting_na_fakultet=(rejting_na_fakultet*($num_rows1-1)+$vote1)/$num_rows1 WHERE id_fakultet='8' ";
mysqli_query($connection,$input_rejting_fax);
header("Location: ../index.php?page=pocetna");
exit();
}
}


//Rejting za kampus 
 if(($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST["form2"]))
 {
  if(!empty($_POST['test4']) && !empty($_POST['test5']) && !empty($_POST['test6']) && !empty($_POST['kam_kom']) )
 {
  $higiena=floatval($_POST['test4']);
 $lokacija=floatval($_POST['test5']);
 $uslovi_kampus=floatval($_POST['test6']);
 $kam_kom= mysqli_real_escape_string($connection,$_POST['kam_kom']);

 $get_all2 = mysqli_query($connection, "SELECT * FROM kampus_rang WHERE id_kampus='5' ");
 $num_rows2=mysqli_num_rows($get_all2)+1;

 $input_kamp=" INSERT INTO kampus_rang (id_kampus,id_korisnik,higiena,lokacija,uslovi,kam_komentar) VALUES ('4','1','$higiena','$lokacija','$uslovi_kampus','$kam_kom') ";
 mysqli_query($connection,$input_kamp);
 $vote2=($higiena+$lokacija+$uslovi_kampus)/3;
 $input_rejting_kamp=" UPDATE kampus SET rejting_na_kampus=(rejting_na_kampus*($num_rows2-1)+$vote2)/$num_rows2 WHERE id_kampus='5' ";
 mysqli_query($connection,$input_rejting_kamp);
 header("Location: ../index.php?page=pocetna");
 exit();
}
}



// Rejting za profesori
 
if(($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST["form3"]))
 {
 if(!empty($_POST['test7']) && !empty($_POST['test8']) && !empty($_POST['test9']) && !empty($_POST['prof_kom']))
 {

 $odg=floatval($_POST['test7']);
 $pred=floatval($_POST['test8']);
 $lit=floatval($_POST['test9']);
 $prof_kom= mysqli_real_escape_string($connection,$_POST['prof_kom']);
$get_all3 = mysqli_query($connection, "SELECT * FROM prof_rang WHERE id_prof='39' ");
$num_rows3=mysqli_num_rows($get_all3)+1;
 
 $input_prof=" INSERT INTO prof_rang (id_prof,id_korisnik,odgovornost,predavanja,literatura,prof_kom) VALUES ('39','1','$odg','$pred','$lit','$prof_kom') ";
 mysqli_query($connection,$input_prof);
 $vote3=($odg+$pred+$lit)/3;
 $input_rejting_prof=" UPDATE profesori SET rejting_na_profesori=(rejting_na_profesori*($num_rows3-1)+$vote3)/$num_rows3 WHERE id_profesor='39' ";
 mysqli_query($connection,$input_rejting_prof);
 header("Location: ../index.php?page=pocetna");
 exit();
 }
}


 ?>