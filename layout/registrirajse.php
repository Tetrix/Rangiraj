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

                    <form role="form">
                        <div class="form-group">

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Мејл:</label>
                                <input type="text" class="form-control" name="reg_username" placeholder="Регистрирајте се со студентскиот мејл" />
                                <i class="glyphicon glyphicon-user form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Лозинка:</label>
                                <input type="password" name="reg_password" class="form-control" placeholder="Внесете лозинка" />
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" id="txt">Потврдете ја лозинката:</label>
                                <input type="password" name="reg_password_confirm" class="form-control" placeholder="Потврдете ја лозинката" />
                                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            </div>
                            <br>
                            <center>
                                <label id="txt">Одберете факултет:</label>
                                <div id="txtdrp" class="pull-center">
                                    <select>
                                        <option value="" disabled selected>Универзитет "Гоце Делчев" Факултети</option>
                                        <option value=""> Факултет 1 </option>
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