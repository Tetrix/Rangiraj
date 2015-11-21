<div id="pozadinarezultati">

    <div class="main1">




        <br>
        <br>

        <div class="row">
            <div class="col-sm-1"></div>
            
            <div class="col-sm-10 visible-lg">

                <button type="button" class="btn btn-block btn-lg btn-link disabled">
                    <span class="glyphicon glyphicon-road rezguidetxtbig">
                                            
                        Навигација 
                        
                    </span>
                </button>

            </div>
            
            <div class="col-sm-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>


            <div class="col-sm-10 rezguidetxt">

                <br>
                <br> 1) Одберете го посакуваниот факултет
                <br>
                <br> 2) Ви се прикажува кампусот во кој истиот се студира
                <br>
                <br> 3) Станува достапна листа на професори кои предаваат на тој факултет.

            </div>

            <div class="col-sm-1"></div>

        </div>

        <br>
        <br>

        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">

                <a href="index.php?page=fakultet-rezultati" class="nounderline">
                    <button type="button" class="btn btn-md rangkopcinja2 btn-block hvr-bounce-to-right" id="txt5s"> 1) Факултет </button>
                </a>

            </div>
            <div class="col-sm-1"></div>
        </div>


        <br>
        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">

                <a href="index.php?page=kampus-rezultati" class="nounderline">
                    <button type="button" class="btn btn-md rangkopcinja2 btn-block sharp hvr-bounce-to-right" id="txt5s"> 2) Кампус </button>
                </a>
            </div>
            <div class="col-sm-1"></div>

        </div>

        <br>

        <div class="row">
            <div class="col-sm-1"> </div>
            <div class="col-sm-10">

                <a href="index.php?page=profesori-rezultati" class="nounderline">
                    <button type="button" class="btn btn-md rangkopcinja2 btn-block sharp hvr-bounce-to-right" id="txt5s"> 3) Професор </button>
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


    <script type="text/javascript">
        $(document).ready(function() {
            $(".main1").css("display", "none");

            $(".main1").fadeIn(1000);

            $("a.transition").click(function(event) {
                event.preventDefault();
                linkLocation = this.href;

            });

            function redirectPage() {
                window.location = linkLocation;
            }
        });
    </script>