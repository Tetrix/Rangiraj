<div class=main>

<?php
require 'connect.php';

$rezultati1="SELECT ime_fakultet FROM fakulteti WHERE id_fakultet=8";
	if($rezultati_query1=mysqli_query($rangiraj,$rezultati1)){
		if(mysqli_num_rows($rezultati_query1)){
			$rows1=mysqli_fetch_all($rezultati_query1,MYSQL_ASSOC);
				foreach($rows1 as $row1){
					echo $row1['ime_fakultet'],'	';
				}
			
		}
	}
?>
		<br>
<?php	
	$rezultati="SELECT praksa,kadar,uslovi FROM fakultet_rang WHERE id_fakultet=8";
	if($rezultati_query=mysqli_query($rangiraj,$rezultati)){
		if(mysqli_num_rows($rezultati_query)){
			$rows=mysqli_fetch_all($rezultati_query,MYSQL_ASSOC);
				foreach($rows as $row){
					echo $row['praksa'],'		',$row['kadar'],'		',$row['uslovi'];
				}
			
		}
	}
	
?>
<br><br>
<?php
$rezultati2="SELECT ime_kampus FROM kampus WHERE id_kampus=4";
	if($rezultati_query2=mysqli_query($rangiraj,$rezultati2)){
		if(mysqli_num_rows($rezultati_query2)){
			$rows2=mysqli_fetch_all($rezultati_query2,MYSQL_ASSOC);
				foreach($rows2 as $row2){
					echo $row2['ime_kampus'],'	';
				}
			
		}
	}
?>
		<br>
<?php	
	$rezultati3="SELECT higiena,lokacija,uslovi FROM kampus_rang WHERE id_kampus=4";
	if($rezultati_query3=mysqli_query($rangiraj,$rezultati3)){
		if(mysqli_num_rows($rezultati_query3)){
			$rows3=mysqli_fetch_all($rezultati_query3,MYSQL_ASSOC);
				foreach($rows3 as $row3){
					echo $row3['higiena'],'		',$row3['lokacija'],'		',$row3['uslovi'];
				}
			
		}
	}
	
?>
<br><br>
<?php
$rezultati4="SELECT ime_prezime_prof FROM profesori WHERE id_profesor=39";
	if($rezultati_query4=mysqli_query($rangiraj,$rezultati4)){
		if(mysqli_num_rows($rezultati_query4)){
			$rows4=mysqli_fetch_all($rezultati_query4,MYSQL_ASSOC);
				foreach($rows4 as $row4){
					echo $row4['ime_prezime_prof'],'	';
				}
			
		}
	}
?>
		<br>
<?php	
	$rezultati5="SELECT odgovornost,predavanja,literatura FROM prof_rang WHERE id_prof=39";
	if($rezultati_query5=mysqli_query($rangiraj,$rezultati5)){
		if(mysqli_num_rows($rezultati_query5)){
			$rows5=mysqli_fetch_all($rezultati_query5,MYSQL_ASSOC);
				foreach($rows5 as $row5){
					echo $row5['odgovornost'],'		',$row5['predavanja'],'		',$row5['literatura'];
				}
			
		}
	}
	
?>

</div>