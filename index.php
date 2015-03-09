<?php

include("layout/header.php");
include("layout/nav.php");
include("layout/pocetna.php");
if(isset($_GET['page']) && $_GET['page'] == "rezultati")
{
include("layout/rezultati.php");
}
else if( $_GET['page'] == "rangiraj")
{
include("layout/rangiraj.php");

}
else if( $_GET['page'] == "registriraj")
{
include("layout/registriraj.php");
}


include("layout/footer.php");

?>