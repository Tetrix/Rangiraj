<?php
$connection=mysqli_connect('127.0.0.1','root','','baza');

 
 //  Rejting za faks

if(!empty($_POST['test1']) && !empty($_POST['test2']) && !empty($_POST['test3']) )
 {
  $praksa=floatval($_POST['test1']);
 $kadar=floatval($_POST['test2']);
 $uslovi_fax=floatval($_POST['test3']);
<<<<<<< HEAD
$fax_kom= mysqli_real_escape_string($connection,$_POST['fax_kom']);

=======
>>>>>>> 84375c12d61e79c84b897eb5d983b14b9667ed67
 
$get_all1 = mysqli_query($connection, "SELECT * FROM fakultet_rang WHERE id_fakultet='8' ");
$num_rows1=mysqli_num_rows($get_all1)+1;

<<<<<<< HEAD
$input_fax=" INSERT INTO fakultet_rang (id_fakultet,id_korisnik,praksa,kadar,uslovi,komentar_fak) VALUES ('8','1','$praksa','$kadar','$uslovi_fax','$fax_kom') "; 
=======
$input_fax=" INSERT INTO fakultet_rang (id_fakultet,id_korisnik,praksa,kadar,uslovi) VALUES ('8','1',$praksa,$kadar,$uslovi_fax) "; 
>>>>>>> 84375c12d61e79c84b897eb5d983b14b9667ed67
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
<<<<<<< HEAD
 //$kam_kom= mysqli_real_escape_string($connection,$_POST['kam_kom']);
=======
>>>>>>> 84375c12d61e79c84b897eb5d983b14b9667ed67

 $get_all2 = mysqli_query($connection, "SELECT * FROM kampus_rang WHERE id_kampus='4' ");
$num_rows2=mysqli_num_rows($get_all2)+1;

 $input_kamp=" INSERT INTO kampus_rang (id_kampus,id_korisnik,higiena,lokacija,uslovi) VALUES ('4','1',$higiena,$lokacija,$uslovi_kampus) ";
 mysqli_query($connection,$input_kamp);
 $vote2=($higiena+$lokacija+$uslovi_kampus)/3;
 $input_rejting_kamp=" UPDATE kampus SET rejting_na_kampus=(rejting_na_kampus*($num_rows2-1)+$vote2)/$num_rows2 WHERE id_kampus='4' ";
 mysqli_query($connection,$input_rejting_kamp);
}
 
<<<<<<< HEAD
 if(!empty($_POST['test7']) && !empty($_POST['test8']) && !empty($_POST['test9']) )
 {
 //Rejting za profesor
 $odg=floatval($_POST['test7']);
 $pred=floatval($_POST['test8']);
 $lit=floatval($_POST['test9']);
	
$get_all3 = mysqli_query($connection, "SELECT * FROM prof_rang WHERE id_prof='39' ");
$num_rows3=mysqli_num_rows($get_all3)+1;
 
 $input_prof=" INSERT INTO prof_rang (id_prof,id_korisnik,odgovornost,predavanja,literatura) VALUES ('39','1',$odg,$pred,$lit) ";
 mysqli_query($connection,$input_prof);
 $vote3=($odg+$pred+$lit)/3;
 $input_rejting_prof=" UPDATE profesori SET rejting_na_profesori=(rejting_na_profesori*($num_rows3-1)+$vote3)/$num_rows3 WHERE id_profesor='1' ";
 mysqli_query($connection,$input_rejting_prof);
 }
=======
 //Rejting za profesor
 $odgovornost=$_POST['test7'];
 $predavanja=$_POST['test8'];
 $literatura=$_POST['test9'];
 
 $input_prof=" INSERT INTO prof_rang (id_prof,id_korisnik,odgovornost,predavanja,literatura) VALUES ('39','1',$odgovornost,$predavanja,$literatura) ";
 mysqli_query($connection,$input_prof);
 
 
>>>>>>> 84375c12d61e79c84b897eb5d983b14b9667ed67
 ?>