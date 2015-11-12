<div  class="main">

	<head>
		<link rel="stylesheet" href="styles\pocetnastyle.css">			
	</head>

  <div class="row">	
		<div class="col-sm-12"> 			
		  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2500" id="bs-carousel">
  <!-- Overlay -->
        <div class="overlay"></div>

  <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0"> </li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
          </ol>
  
  <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item slides active">
              <div class="slide-1"></div>
              <div class="hero">

                <hgroup>
                  <h1>Информирај се</h1>        
                  <h3>Стекни се со објективно мислење за околината во која ќе студираш</h3>
                </hgroup>
              </div>
            </div>

            <div class="item slides">
              <div class="slide-2"></div>
              <div class="hero">

                <hgroup>
                  <h1>Гласај анонимно, остави мислење</h1>        
                  <h3>Зголеми ја конкурентноста помегу универзитетските професори</h3>
                </hgroup>             
              </div>	
            </div>

            <div class="item slides">
              <div class="slide-3"></div>
              <div class="hero"> 

                <hgroup>
                  <h1>Подобри ја својата иднина</h1>        
                  <h3>Не - за статус кво кон високо образовните институти</h3>
                </hgroup>
        
              </div>
            </div>
          </div> 
      </div>
		</div>
	</div>
</div>

<script>
	$(function() {
	$("#pocetna a:contains('Почетна')").parent().addClass('active');
	});
</script>
