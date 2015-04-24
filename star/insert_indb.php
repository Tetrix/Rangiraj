<?php
$connection=mysqli_connect('127.0.0.1','root','','baza');

 
 //  Rejting za faks

if(!empty($_POST['test1']) && !empty($_POST['test2']) && !empty($_POST['test3']) )
 {
  $praksa=floatval($_POST['test1']);
 $kadar=floatval($_POST['test2']);
 $uslovi_fax=floatval($_POST['test3']);
 
$get_all1 = mysqli_query($connection, "SELECT * FROM fakultet_rang WHERE id_fakultet='8' ");
$num_rows1=mysqli_num_rows($get_all1)+1;

$input_fax=" INSERT INTO fakultet_rang (id_fakultet,id_korisnik,praksa,kadar,uslovi) VALUES ('8','1',$praksa,$kadar,$uslovi_fax) "; 
mysqli_query($connection,$input_fax);
$vote1=($praksa+$kadar+$uslovi_fax)/3;
$input_rejting_fax=" UPDATE fakulteti SET rejting_na_fakultet=(rejting_na_fakultet*($num_rows1-1)+$vote1)/$num_rows1 WHERE id_fakultet='8' ";
 mysqli_query($connection,$input_rejting_fax);
}


//Rejting za kampus 
  
  if(!empty($_POST['test4']) && !empty($_POST['test5']) && !empty($_POST['test6']) )
 {
  $higiena=floatval($_POST['test4']);
 $lokacija=floatval($_POST['test5']);
 $uslovi_kampus=floatval($_POST['test6']);

 $get_all2 = mysqli_query($connection, "SELECT * FROM kampus_rang WHERE id_kampus='4' ");
$num_rows2=mysqli_num_rows($get_all2)+1;

 $input_kamp=" INSERT INTO kampus_rang (id_kampus,id_korisnik,higiena,lokacija,uslovi) VALUES ('4','1',$higiena,$lokacija,$uslovi_kampus) ";
 mysqli_query($connection,$input_kamp);
 $vote2=($higiena+$lokacija+$uslovi_kampus)/3;
 $input_rejting_kamp=" UPDATE kampus SET rejting_na_kampus=(rejting_na_kampus*($num_rows2-1)+$vote2)/$num_rows2 WHERE id_kampus='4' ";
 mysqli_query($connection,$input_rejting_kamp);
}
 
 //Rejting za profesor
 $odgovornost=$_POST['test7'];
 $predavanja=$_POST['test8'];
 $literatura=$_POST['test9'];
 
 $input_prof=" INSERT INTO prof_rang (id_prof,id_korisnik,odgovornost,predavanja,literatura) VALUES ('39','1',$odgovornost,$predavanja,$literatura) ";
 mysqli_query($connection,$input_prof);
 
 
 ?>