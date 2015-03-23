<?php

include("layout/header.php");



if(isset($_GET['page']) && $_GET['page'] == "pocetna")
	{
	include("layout/pocetna.php");
	}

else if( $_GET['page'] == "rangiraj")
	{
	include("layout/rangiraj.php");
	
	}
	else if( $_GET['page'] == "proff")
	{
	include("layout/proff.php");
	}


	
else if( $_GET['page'] == "rezultati")
	{
	include("layout/sidepanelrezultati.php");
	include("layout/lenta.php");
	}
	
else if( $_GET['page'] == "zanas")
	{
	include("layout/zanas.php");
	}
	
else if( $_GET['page'] == "najavise")
	{
	include("layout/najavise.php");
	}
	
else if( $_GET['page'] == "registrirajse")
	{
	include("layout/registrirajse.php");
	}


	
	
?>

