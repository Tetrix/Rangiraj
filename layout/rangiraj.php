<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf16_unicode_ci"/>
	
	<title> RangirajME </title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
		
/* Attach the Reveal CSS */
<link rel="stylesheet" href="C:\wamp\www\odeleni\layout\reveal.css">

<style>
/*	--------------------------------------------------
	Reveal Modals
	-------------------------------------------------- */
		
	.reveal-modal-bg { 
		position: fixed; 
		height: 100%;
		width: 100%;
		background: #000;
		z-index: 100;
		display: none;
		top: 0;
		left: 0; 
		}
	
	.reveal-modal {
		visibility: hidden;
		top: 100px; 
		left: 50%;
		margin-left: -300px;
		width: 520px;
		background: #eee url(modal-gloss.png) no-repeat -200px -80px;
		position: absolute;
		z-index: 101;
		padding: 30px 40px 34px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-moz-box-shadow: 0 0 10px rgba(0,0,0,.4);
		-webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);
		box-shadow: 0 0 10px rgba(0,0,0,.4);
		}
		
	.reveal-modal.small 		{ width: 200px; margin-left: -140px;}
	.reveal-modal.medium 		{ width: 400px; margin-left: -240px;}
	.reveal-modal.large 		{ width: 600px; margin-left: -340px;}
	.reveal-modal.xlarge 		{ width: 800px; margin-left: -440px;}
	
	.reveal-modal .close-reveal-modal {
		font-size: 22px;
		line-height: .5;
		position: absolute;
		top: 8px;
		right: 11px;
		color: #aaa;
		text-shadow: 0 -1px 1px rbga(0,0,0,.6);
		font-weight: bold;
		cursor: pointer;
		} 
	/*
		
	NOTES
	
	Close button entity is &#215;
	
	Example markup
	
	<div id="myModal" class="reveal-modal">
		<h2>Awesome. I have it.</h2>
		<p class="lead">Your couch.  I it's mine.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices aliquet placerat. Duis pulvinar orci et nisi euismod vitae tempus lorem consectetur. Duis at magna quis turpis mattis venenatis eget id diam. </p>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	
	*/
</style>
/* jQuery needs to be attached */
<script src="C:\wamp\www\odeleni\layout\jquery.js" type="text/javascript"></script>

/* Then just attach the Reveal plugin */
<script src="C:\wamp\www\odeleni\layout\jquery.reveal.js" type="text/javascript"></script>
	
	
	<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css" />


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles\stylerang.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <style>
.raf{
	top:100px;
	left:15px;
}
</style>
  </head>
  

<div class="main">
		
			
	

<div class="jumbotron row1" style="padding-top:10px;">
	<div class="row">
	
							<div class="col-md-4"> </div>
		
		<div class="col-md-4"> 
						
		
			<div >
			<?php 
				require 'connect.php';
				
				$ugd="SELECT ime_univerzitet FROM univerzitet WHERE id_univerzitet=4";
				$result_ugd=mysqli_query($rangiraj,$ugd) ;
				
					$mail="SELECT username FROM korisnici WHERE id_korisnik=1";
					if($mail_result=mysqli_query($rangiraj,$mail)){
						if(mysqli_num_rows($mail_result)){
							$rows=mysqli_fetch_all($mail_result,MYSQL_ASSOC);
							foreach($rows as $row){
								$substr=substr($row['username'],-19);
								if($substr=="students.ugd.edu.mk"){ 
								
								?>
									<button class="btn btn-default btn-block" type="button" name="dd" id="menu1"  >Универзитет „Гоце Делчев“</div>
							<?php	}
							}
						}
						
					}
										
					?>
					
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" name="first" id="first">
					  
	
				
				
				
			
				
				
				</ul>				
			</div>
		</div>
							<div class="col-md-4"> </div>
	</div>	



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  
  
  
	
	
	
	

<div class="navigationbar navigationbar1" >
	<nav class="navbar navbar-custom navbar_style1">
   
        <div class="navbar-header"></div>
		<div class="navbar-collapse collapse">
		
		   
<div class="row" >

	<ul class="nav nav-justified">
	<div class="col-md-3"> </div>
		   
			<div class="col-md-2">

				<li class="container">
                  <div class="btn-group navbar-btn ">
                    <button class="btn btn-info btn-lg" id="fax" >Fakultet</button>
					
                    <button data-toggle="dropdown"  class="btn btn-info dropdown-toggle btn-lg btn-link "><span class="caret"></span></button>
                    <ul class="dropdown-menu scrolling " id="lista">
					
					
	  
		<?php
		require 'connect.php';
		$query2="SELECT ime_fakultet FROM fakulteti,univerzitet WHERE id_univerzitet=4;";
		if($result2=mysqli_query($rangiraj,$query2)){
			if(mysqli_num_rows($result2)){
				$rows2=mysqli_fetch_all($result2,MYSQL_ASSOC);
				
				foreach($rows2 as $row2){ ?>
					 <li role="presentation"><a role="menuitem" href="layout/rang_fax/rang_fax.php" target="_blank" id="var" tabindex="-1" >
					 
					 <?php echo $row2['ime_fakultet'];
					 
                            					 
					 ?>  
					 </a></li>
					
			<?php	}
			}
		}  
			?>
	 
					</ul>
			     </div>
                
				</li>
				
			</div>
		
			<div class="col-md-2">
			
				<li class="container">
				
                  <div class="btn-group navbar-btn nav-justified">
                    <button class="btn btn-info btn-lg">Kampus</button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle btn-lg btn-link"><span class="caret"></span></button>
                    <ul class="dropdown-menu scrolling">
					
					<?php
		require 'connect.php';
		$query4="SELECT ime_kampus FROM kampus,univerzitet WHERE id_univerzitet=4;";
		if($result4=mysqli_query($rangiraj,$query4)){
			if(mysqli_num_rows($result4)){
				$rows4=mysqli_fetch_all($result4,MYSQL_ASSOC);
				
				foreach($rows4 as $row4){ ?>
					 <li role="presentation"><a role="menuitem" href="layout/rang_kamp/rang_kamp.php" target="_blank" id="var" tabindex="-1" >
					 
					 <?php echo $row4['ime_kampus']; ?>  
					 
                            					 
					 
					 </a></li>
					
			<?php	}
			}
		}  
			?>
					
					
						
                    </ul>
			     </div>
                </li>
			
			</div>
				 
			<div class="col-md-2">
			
				<li class="container">
					<div class="btn-group navbar-btn ">
						<button class="btn btn-info btn-lg "><div class="btntext">Profesor</div></button>
						<button data-toggle="dropdown" class="btn btn-info btn-lg dropdown-toggle btn-link"><span class="caret"></span></button>
						<ul class="dropdown-menu scrolling" >
						
						 
		<?php
		require 'connect.php';
		$query3="SELECT ime_prezime_prof FROM profesori,univerzitet WHERE id_univerzitet=4";
		if($result3=mysqli_query($rangiraj,$query3)){
			if(mysqli_num_rows($result3)){
				$rows3=mysqli_fetch_all($result3,MYSQL_ASSOC);
				
				foreach($rows3 as $row3){ ?>
					 <li role="presentation"><a role="menuitem" href="layout/rang_prof/rang_prof.php" target="_blank" id="var" tabindex="-1" >
					 
					 <?php echo $row3['ime_prezime_prof'];
					 
                            					 
					 ?>  
					 </a></li>
					
			<?php	}
			}
		}  
			?>
						
						
					
			</ul>
					</div>
                </li>
			
			</div>
            
		</ul>
     <div class="col-md-3"></div>   
	</div>
    </div>

	
	
	
	
	<div id="myModal3" class="reveal-modal">
			<h1>Reveal Modal Goodness</h1>
			<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	
	
	
	

 <script src="js/app.js"></script>
<script>
	$(function(){

    $("#lista li a").click(function(){
       
      $("#lav").text($(this).text());
      $("#lav").val($(this).text());

   });

});
  </script>
 </div>
 <div id="white">
		<input type="hidden" value="lav" id="lav" name="la"/>
	<div class="raf">
 
 </div>	
 <?php 
 
 if (isset($_POST["lav"]))
 {
     
	 $zz=$_POST["lav"];
 }  
 require 'connect.php';
 if(isset($zz)){
 $vazno="UPDATE fakulteti SET ime_fakultet=$zz WHERE id_fakultet =8";
 $vazno_query=mysqli_query($rangiraj,$vazno);
 
 }
 ?>
 
 </div>
 