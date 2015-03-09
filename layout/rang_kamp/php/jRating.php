<?php

$aResponse['error'] = false;
$aResponse['message'] = '';

// ONLY FOR THE DEMO, YOU CAN REMOVE THIS VAR
	$aResponse['server'] = ''; 
// END ONLY FOR DEMO
	
	
if(isset($_POST['action']))
{
	if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'rating')
	{
		/*
		* vars
		*/
		$id = intval($_POST['idBox']);
		$rate = floatval($_POST['rate']);
		
		
		if($id==1)
		{
		$rangiraj=mysqli_connect('127.0.0.1','root','','proba');
		$sql="INSERT INTO kampus_rang (id_kampus,id_korisnik,higiena) VALUES ('4','1',$rate)  ";
		mysqli_query($rangiraj,$sql);
		$rangiraj=mysqli_connect('127.0.0.1','root','','proba');
	    $sqll=" UPDATE kampus SET rejting_na_kampus=rejting_na_kampus+$rate WHERE id_kampus=4";
		mysqli_query($rangiraj,$sqll);
		}
		else if($id==2)
		{
		$rangiraj=mysqli_connect('127.0.0.1','root','','proba');
		$sql="UPDATE kampus_rang SET lokacija=$rate";
	   /*$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,kadar) VALUES ('1','1',$rate)  ";*/
		mysqli_query($rangiraj,$sql);
		$rangiraj=mysqli_connect('127.0.0.1','root','','proba');
	    $sqll=" UPDATE kampus SET rejting_na_kampus=rejting_na_kampus+$rate WHERE id_kampus=4";
		mysqli_query($rangiraj,$sqll);
		}
		else if($id==3)
		{
		$rangiraj=mysqli_connect('127.0.0.1','root','','proba');
		$sql="UPDATE kampus_rang SET uslovi=$rate";
	   /*$sql="INSERT INTO fakultet_rang (id_fakultet,id_korisnik,kadar) VALUES ('1','1',$rate)  ";*/
		mysqli_query($rangiraj,$sql);
		$rangiraj=mysqli_connect('127.0.0.1','root','','proba');
	    $sqll=" UPDATE kampus SET rejting_na_kampus=rejting_na_kampus+$rate WHERE id_kampus=4";
		mysqli_query($rangiraj,$sqll);
		}
		
		
		
		/*$sql=" SELECT uslovi FROM fakultet_rang  WHERE id_fak_rang=1";
		$result=mysqli_query($db,$sql);
		$result=$result+$rate;
		$sqll=" UPDATE fakultet_rang SET uslovi=$result WHERE id_fak_rang=1";
		mysqli_query($db,$sqll); */
		
		
		// YOUR MYSQL REQUEST HERE or other thing :)
		/*
		*
		*/
		
		// if request successful
		$success = true;
		// else $success = false;
		$sum=$sum+$rate;
		
		// json datas send to the js file
		if($success)
		{
		
			$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';
			
			// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
				$aResponse['server'] = '<strong>Success answer :</strong> Success : Your rate has been recorded. Thanks for your rate :)<br />';
				$aResponse['server'] .= '<strong>Rate received :</strong> '.$rate.'<br />';
				$aResponse['server'] .= '<strong>ID to update :</strong> '.$id;
			// END ONLY FOR DEMO
			
			echo json_encode($aResponse); 
		}
		else
		{
			$aResponse['error'] = true;
			$aResponse['message'] = 'An error occured during the request. Please retry';
			
			// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
				$aResponse['server'] = '<strong>ERROR :</strong> Your error if the request crash !';
			// END ONLY FOR DEMO
			
			
			echo json_encode($aResponse);
		}
	}
	else
	{
		$aResponse['error'] = true;
		$aResponse['message'] = '"action" post data not equal to \'rating\'';
		
		// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
			$aResponse['server'] = '<strong>ERROR :</strong> "action" post data not equal to \'rating\'';
		// END ONLY FOR DEMO
			
		
		echo json_encode($aResponse);
	}
}
else
{
	$aResponse['error'] = true;
	$aResponse['message'] = '$_POST[\'action\'] not found';
	
	// ONLY FOR THE DEMO, YOU CAN REMOVE THE CODE UNDER
		$aResponse['server'] = '<strong>ERROR :</strong> $_POST[\'action\'] not found';
	// END ONLY FOR DEMO
	
	
	echo json_encode($aResponse);
}