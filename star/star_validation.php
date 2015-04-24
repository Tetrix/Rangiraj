
<?php
$star1=$_POST["test1"];
$star2=$_POST["test2"];
$star3=$_POST["test3"];


if(!isset($star1))
{
 echo "<script type=\"text/javascript\">window.alert('Vnesi vrednost za site zvezdi.');window.location.href = '/index.php?page=proff';</script>";
}
if(!isset($star2))
{
 echo "<script type=\"text/javascript\">window.alert('Vnesi vrednost za site zvezdi.');window.location.href = '/index.php?page=proff';</script>";
}
if(!isset($star3))
{
 echo "<script type=\"text/javascript\">
 window.location = '/rangiraj/Rangiraj/index.php?page=proff';
 window.alert('Vnesi vrednost za site zvezdi.');
 </script>";
}

/*
if(!isset($star2))
{
$e['star2'] = "<p><strong>Popolnete za vtoriot.</strong></p>";
}
if(!isset($star3))
{
$e['star3'] = "<p><strong>Popolnete za tretiot.</strong></p>";
}
}	
*/?>