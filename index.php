<?php
// if(isset($_SESSION['username'])){
	include("layout/header2.php");
//}
// else{
// 	include("layout/header.php");
// }



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

else if( $_GET['page'] ==  "profesori-rezultati")
	{
	include("layout/sidepanelrezultati.php");
    include("layout/proff_rezultati.php");
	}

else if( $_GET['page'] ==  "fakultet-rezultati")
	{
	include("layout/sidepanelrezultati.php");
    include("layout/fakultet-rezultati.php");
	}

else if( $_GET['page'] ==  "kampus-rezultati")
	{
	include("layout/sidepanelrezultati.php");
    include("layout/kampus-rezultati.php");
	}
	
else if( $_GET['page'] ==  "lenta-fakultet")
	{
	include("layout/sidepanelrezultati.php");
    include("layout/lenta-fakultet.php");
	}

else if( $_GET['page'] ==  "lenta-profesori")
	{
	include("layout/sidepanelrezultati.php");
    include("layout/lenta-profesori.php");
	}

else if( $_GET['page'] ==  "lenta-kampus")
	{
	include("layout/sidepanelrezultati.php");
    include("layout/lenta-kampus.php");
	}

#else 
#{
#include("layout/pocetna.php");
#}	
	
?>

