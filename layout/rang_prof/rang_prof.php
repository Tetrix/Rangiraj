<div class="main">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Plugin jRating : Ajax rating system with jQuery</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css" />

	<style type="text/css">
		html {overflow-x:hidden;}
		body {margin:15px;}
		a img{border:0}
		.datasSent, .serverResponse{margin-top:20px;width:470px;height:73px;border:1px solid #F0F0F0;background-color:#F8F8F8;padding:10px;float:left;margin-right:10px}
		.datasSent{width:200px;position:fixed;left:680px;top:0}
		.serverResponse{position:fixed;left:680px;top:100px}
		.datasSent p, .serverResponse p {font-style:italic;font-size:12px}
		.exemple{margin-top:0px;position:relative;font-family:Arial;
		top:30px;
		left:580px;
		}
		.clr{clear:both}
		pre {margin:0;padding:0}
		.notice {background-color:#F4F4F4;color:#666;border:1px solid #CECECE;padding:10px;font-weight:bold;width:600px;font-size:12px;margin-top:10px}

				.gorendel
						{
							
							width:1000px;
							height:200px;
							
				
						}
						.t{
							font-size:40px;
							font-family:Arial;
						}
		</style>
</head>
<body>



<br>
<p class="t" align=center>РАНГИРАЈ ПРОФЕСОР</p>



<div class="exemple">
<h1>Предавања</h1> <div class="basic" data-average="12" data-id="1"></div><br>
</div>
<div class="exemple">
<h1>Литература</h1><div class="basic" data-average="12" data-id="2"></div><br>
</div>
<div class="exemple">
<h1>Одговорност</h1><div class="basic" data-average="12" data-id="3"></div>
</div>






	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.basic').jRating();

			$('.exemple2').jRating({
				type:'small',
				length : 40,
				decimalLength : 1,
			});

			$('.exemple3').jRating({
				step:true,
				length : 20
			});

			$('.exemple4').jRating({
				isDisabled : true
			});

			$('.exemple5').jRating({
				length:10,
				decimalLength:1,
				onSuccess : function(){
					alert('Success : your rate has been saved :)');
				},
				onError : function(){
					alert('Error : please retry');
				}
			});

			$(".exemple6").jRating({
			  length:10,
			  decimalLength:1,
			  showRateInfo:false
			});

			$('.exemple7').jRating({
				step:true,
				length : 20,
				canRateAgain : true,
				nbRates : 3
			});
		});
	</script>

</html>
</div>