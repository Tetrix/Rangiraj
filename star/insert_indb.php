<?php
$connection=mysqli_connect('127.0.0.1','root','','baza');
 $star1=$_POST['test1'];
 $star2=$_POST['test2'];
 $star3=$_POST['test3'];

 $input_fax=" INSERT INTO fakultet_rang (id_fakultet,id_korisnik,praksa,kadar,uslovi) VALUES ('8','1',$star1,$star2,$star3)  ";
 mysqli_query($connection,$input_fax);

 $star4=$_POST['test4'];
 $star5=$_POST['test5'];
 $star6=$_POST['test6'];

 $input_kamp=" INSERT INTO kampus_rang (id_kampus,id_korisnik,higiena,lokacija,uslovi) VALUES ('4','1',$star4,$star5,$star6)  ";
 mysqli_query($connection,$input_kamp);

 
 
 ?>