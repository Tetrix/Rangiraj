<div class="main">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Plugin jRating : Ajax rating system with jQuery</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="stars/rang_fax/jquery/jRating.jquery.css" type="text/css" />
   
	
</head>




<br>
<p class="t" align=center>РАНГИРАЈ ФАКУЛТЕТ</p>



<div  class="exemple">
<h1>Кадар</h1> <div class="basic"  data-id="1"></div><br>
</div>
<div class="exemple">
<h1>Услови</h1><div class="basic" data-id="2"></div><br>
</div>
<div class="exemple">
<h1>Пракса</h1><div class="basic" data-id="3"></div>
</div>

<script type="text/javascript" src="stars/rang_fax/jquery/jquery.js"></script>
<script type="text/javascript" src="stars/rang_fax/jquery/jRating.jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
			$('.basic').jRating();

		});
	</script>

</html>
</div>