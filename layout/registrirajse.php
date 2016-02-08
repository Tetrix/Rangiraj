
<div class="mainww">
    <div class="main">

        <head>

            <title>Register</title>

        </head>

        <BR>
        <BR>
        <BR>
        <BR>

        <div class="row">

            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <div class="jumbotron" id="jumbologin1">

                    <center>
                        <h2 align="center" Id="txtlogin"> Регистрирајте  се </h2>
                        <p id="txtwarn">Одберете го вашиот универзитет/факултет поради тоа што ќе можете да гласате само за истиот што се го одбрале, и тоа еднаш по семестар </p>
                    </center>

                    <form role="form" method = "POST" action='layout/register.php'>
                        <div class="form-group">

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Мејл:</label>
                                <input type="text" class="form-control" name="username" placeholder="Регистрирајте се со студентскиот мејл" />
                                <i class="glyphicon glyphicon-user form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Лозинка:</label>
                                <input type="password" name="password" class="form-control" placeholder="Внесете лозинка" />
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Потврдете ја лозинката:</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Потврдете ја лозинката" />
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>
                            <br>
                            <center>
                                <label id="txt">Одберете факултет:</label>
                                <div id="txtdrp" class="pull-center">
                                    <select name = 'fax'>
                                        
                                        <?php
                                            require('connect.php');

                                        $fak_query = mysqli_query($rangiraj, " SELECT * FROM fakulteti ");
                                        while ($row = mysqli_fetch_array($fak_query))
                                        {

                                        ?>            

                                        <option value="<?php echo $row['ime_fakultet']; ?>" >                                           
                                           

                                          <?php  echo $row['ime_fakultet'];  ?>

                                            

                                       </option>
                                        <?php
                                            }
                                        ?>    
                                    </select>
                                </div>

                                <small class="txtsmall"> НАПОМЕНА: Изборот ве лимитира при гласањето / коментирањето на ентитетите од избраниот факултет </small>
                            </center>
                            <br>



                        </div>


                        <button id="button" onclick="showLess()" type="submit" class="btn btn-primary btn-md pull-right sharp">Потврди</button>


                    </form>

                    <br>
                    <br>


                </div>
            </div>

            <div class="col-sm-4"></div>
        </div>
    </div>
</div>








<script type="text/javascript">
    $(document).ready(function() {
        $(".main").css("display", "none");

        $(".main").slideDown(1000);

        $("a.transition").click(function(event) {
            event.preventDefault();
            linkLocation = this.href;

        });

        function redirectPage() {
            window.location = linkLocation;
        }
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $(".mainww").css("display", "none");

        $(".mainww").fadeIn(1000);

        $("a.transition").click(function(event) {
            event.preventDefault();
            linkLocation = this.href;

        });

        function redirectPage() {
            window.location = linkLocation;
        }
    });
</script>