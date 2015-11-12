<div id="pozadinarezultati">
	<div class="main1">
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		  <title>Search Dropdown</title>
		  <link rel="stylesheet" href="styles\searchstyle.css">
		</head>
		<br><br>

		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 rezguidetxtbig">		
						Упатство
			</div>
		<div class="col-sm-1"></div>
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-10 rezguidetxt">
					<br>
					1) Одберете го посакуваниот факултет	
					<br>
					2) Ви се прикажува кампусот во кој истиот се студира
					<br>
					3) Станува достапна листа на професори кои предаваат на тој факултет.
				</div>

			<div class="col-sm-1"></div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm-1"> </div>
			<div class="col-sm-10">
				<a href="index.php?page=fakultet-rezultati"  class="nounderline">
					<button type="button" class="btn btn-md rangkopcinja2 btn-block " id="txt5s"> 1) Факултет </button>
				</a>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<br>
			<div class="row">
				<div class="col-sm-1"> </div>
					<div class="col-sm-10">
						<a href="index.php?page=kampus-rezultati"  class="nounderline">
							<button type="button" class="btn btn-md rangkopcinja2 btn-block sharp" id="txt5s"> 2) Кампус </button>
						</a>
					</div>
			<div class="col-sm-1"></div>
			</div>
			<br>
				<div class="row">
					<div class="col-sm-1"> </div>
				<div class="col-sm-10">		
					<a href="index.php?page=profesori-rezultati"  class="nounderline">
						<button type="button" class="btn btn-md rangkopcinja2 btn-block sharp" id="txt5s"> 3) Професор </button>
					</a>	
				</div>
				<div class="col-sm-1"></div>
				</div>

				<script>
						$(function() {
						$("#rezultati a:contains('Резултати')").parent().addClass('active');
						});
				</script>
	</div>
</div>	