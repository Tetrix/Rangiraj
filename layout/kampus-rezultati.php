<div class="main2">
    <br>
    <form action="index.php?page=lenta-kampus" method="post">
        <div class="row">
            <div class="col-xs-6">

                <center><label class="rezguidetxt">Одберете Кампус:</label></center>
                <select class="form-control" id="sel1" name="ime_kampus">
                    <?php 
require 'connect.php';

if($result = $rangiraj->query("SELECT ime_kampus FROM kampus "))
{

while ($row = $result->fetch_assoc())
{

?>


                        <option>
                            <?php 
						
							  echo $row['ime_kampus'] ;  }}
	                            
?>
                        </option>

                </select>
            </div>


            <div class="col-xs-6">
            </br>
                <button id="button" type="submit" class="btn btn-primary btn-md pull-left sharp">Потврди</button>

            </div>






        </div>

</div>
    
      <script type="text/javascript">
        $(document).ready(function() {
            $(".main2").css("display", "none");

            $(".main2").slideDown(1000);

            $("a.transition").click(function(event) {
                event.preventDefault();
                linkLocation = this.href;

            });

            function redirectPage() {
                window.location = linkLocation;
            }
        });
    </script>