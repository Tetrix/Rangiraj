	if($id==1)
		{
		$praksa="SELECT praksa FROM `fakultet_rang` WHERE id_fakultet=9 AND id_korisnik=1";
		if($praksa==NULL)
		{
		$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,praksa) VALUES ('9','1',$rate)  ";
		mysqli_query($rangiraj,$sql);
	    }
		else
		{
		
		$sql="UPDATE fakultet_rang SET praksa=$rate " ;
	   /*$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,kadar) VALUES ('1','1',$rate)  ";*/
		mysqli_query($rangiraj,$sql);
		}
		}
		if($id==2)
		{
		$kadar="SELECT kadar FROM `fakultet_rang` WHERE id_fakultet=9 AND id_korisnik=1";
		if($kadar==NULL)
		{
		$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,kadar) VALUES ('9','1',$rate)  ";
		mysqli_query($rangiraj,$sql);
		}
		else 
		{
		$sql="UPDATE fakultet_rang SET kadar=$rate " ;
	   /*$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,kadar) VALUES ('1','1',$rate)  ";*/
		mysqli_query($rangiraj,$sql);
		}
		}
		if($id==3)
		{
		$uslovi="SELECT uslovi FROM `fakultet_rang` WHERE id_fakultet=9 AND id_korisnik=1";
		if($uslovi==NULL)
		{
		$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,uslovi) VALUES ('9','1',$rate)  ";
		mysqli_query($rangiraj,$sql);
		}
		else
		{
		$sql="UPDATE fakultet_rang SET uslovi=$rate " ;
	   /*$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,kadar) VALUES ('1','1',$rate)  ";*/
		mysqli_query($rangiraj,$sql);
		}
		}