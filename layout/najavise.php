<?php session_start();?>

<div class="mainww">
    <div class="main">



        <div class="row">
            <BR>
            <br>
            <BR>
            <br>
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <div class="jumbotron" id="jumbologin">

                    <center>
                        <img src="pictures\lock.png" height="120" width="120">
                        <div Id="txtlogin"> Најавете се </div>
                    </center>

                    <form role="form" name="login" action="layout/Login.php" method = "POST">
                        <div class="form-group">

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Мејл:</label>
                                <input type="text" name="username" class="form-control" placeholder="Внесете го регистрираниот студентски мејл" />
                                <i class="glyphicon glyphicon-user form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Лозинка:</label>
                                <input type="password" name="password" class="form-control" placeholder="Внесете ја регистрираната лозинка" />
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>

                        </div>
                    
                        <button id="button" type="submit" name="login" class="btn btn-primary btn-md pull-right sharp">Потврди</button>

                    
                    </form>


                </div>

                <div class="col-sm-4"></div>
            </div>

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