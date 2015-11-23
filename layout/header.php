<!--This is the header-->
<!doctype HTML>

<?php session_start(); 

?>

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <!-- CSS link -->
    <link rel="stylesheet" href="styles\headerstyle.css">
    <!--Main CSS's -->
    <link rel="stylesheet" href="styles\main_class.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Skripti za zvezdi -->
    <script src='star/jquery.js' type="text/javascript"></script>
    <script src='star/jquery.rating.js' type="text/javascript" language="javascript"></script>
    <link href='star/jquery.rating.css' type="text/css" rel="stylesheet" />
    <!-- Zavrsuva Skripti za zvezdi -->

    <!--- Reveal effect -->
    <link rel="stylesheet" href="revealcinema\reveal.css">

    <!-- jQuery library & libraries for reveal effect-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="revealcinema\jquery.reveal.js"></script>

    <!--pocetna style css -->
    <link rel="stylesheet" href="styles\pocetnastyle.css">

    <!--rezultati page css-->
    <link rel="stylesheet" href="styles\searchstyle.css">

</head>



<div class="header">
    <!--Header-->

    <div class="row">

        <div class="col-xs-6">

            <a href="index.php?page=pocetna">

                <img src="pictures\Logo.png" height="105" width="230">

            </a>


        </div>

        <div class="col-xs-3"></div>



        <div class="col-xs-3 headertxt visible-lg">

            <br>
            <center>

                <button type="button" class="btn btn-block btn-lg btn-link disabled ">

                    <span class="glyphicon glyphicon-calendar">
                                            Датум & Час
                                         <div id="clockbox"></div>

                                    </span>

                </button>


            </center>
        </div>


    </div>

</div>

<!--NavigationBar-->
<div class="row">


    <div class="col-sm-12">

        <div class="navigationbar">
            <!-- NAVBAR -->


            <nav class="navbar navbar-inverse ">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar_text" href="#">Rangirajme.comlu.com</a>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar">

                        <ul class="nav navbar-nav">

                            <li id="pocetna">
                                <a class="nounderline hvr-grow-shadow" href="index.php?page=pocetna">
                                    <p class="navbar_text"><span class="glyphicon glyphicon-home"></span>&nbsp;Почетна</p>
                                </a>
                            </li>

                            <li id="rangiraj">
                                <a class="nounderline hvr-grow-shadow" href="index.php?page=rangiraj">
                                    <p class="navbar_text"><span class="glyphicon glyphicon-film"></span>&nbsp;Рангирај</p>
                                </a>
                            </li>

                            <li id="rezultati">
                                <a class="nounderline hvr-grow-shadow" href="index.php?page=rezultati">
                                    <p class="navbar_text"><span class="glyphicon glyphicon-list"></span>&nbsp;Резултати</p>
                                </a>
                            </li>

                            <li id="zanas">

                                <a class="nounderline hvr-grow-shadow" href="index.php?page=zanas">
                                    <p class="navbar_text"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;За нас</p>
                                </a>
                            </li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="index.php?page=registrirajse" class="nounderline">
                                    <button id="d4" type="button" class="btn btn-md btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> Регистрирај се </button>
                                </a>
                            </li>

                            <li>
                                <!--ЛогиранТЕКСТ-->
                                <button id="l1" type="button" class="btn btn-block btn-lg btn-link disabled pull-right"><span class="glyphicon glyphicon-user"></span> Логиран </button>

                            </li>

                            <li>
                                <a href="index.php?page=najavise" class="nounderline">
                                    <button id="d3" type="button" class="btn btn-md btn-primary btn-block ">&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in"></span>&nbsp;Најави се &nbsp;&nbsp;&nbsp;</button>
                                </a>
                            </li>


                            <li>
                                <!--LogoutKopce initial display:hidden-->
                                <a class="nounderline">
                                   <button id="button1" type="button" onclick="showMore()" class="btn btn-md btn-danger btn-block"><span class="glyphicon glyphicon-log-out"></span>Одјави се</button>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>


        </div>
    </div>

</div>




</div>



<script type="text/javascript">
    function GetClock() {
        var d = new Date();
        var nmonth = d.getMonth(),
            ndate = d.getDate(),
            nyear = d.getYear();
        if (nyear < 1000) nyear += 1900;
        var nhour = d.getHours(),
            nmin = d.getMinutes(),
            nsec = d.getSeconds();
        if (nmin <= 9) nmin = "0" + nmin
        if (nsec <= 9) nsec = "0" + nsec;
        document.getElementById('clockbox').innerHTML = "" + ndate + "-" + (nmonth + 1) + "-" + nyear + " " + nhour + ":" + nmin + ":" + nsec + "";
    }
    window.onload = function() {
        GetClock();
        setInterval(GetClock, 1000);
    }
</script>