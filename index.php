<html>
    <head>
        <meta charset="UTF-8">
        <title>AAE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!--  Menu-->
                <div class="col-md-12 cls-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Live<span class="sr-only"></span></a></li>
                                    <li><a href="statistics.php">Statistika</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shiko Gjendjen e Trafikut <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Oret e Fundit</a></li>
                                            <li><a href="#">Ditet e Fundit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-form.php">Kontakt<span class="sr-only"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>  
            </div>
            <!--Harta -->
            <div class="container-fluid map-cls">
                <div class="row">
                    <div class="col-md-12">
                        <div id="map"></div>
                        <script>
                            function initMap() {
                                var mapDiv = document.getElementById('map');
                                var map = new google.maps.Map(mapDiv, {
                                    center: {lat: 41.323887, lng: 19.821599},
                                    zoom: 8
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
                        async defer></script>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="col-md-6 cls-left">
                            <p>Created By Flamingo &nbsp;<i class="fa fa-diamond"></i></p>
                        </div>
                        <div class="col-md-6 cls-right">
                            <p>  February 2016 &nbsp;<i class="fa fa-car"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>