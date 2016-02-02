<html>
    <head>
        <meta charset="UTF-8">
        <title>AAE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
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
                                    <li><a href="#">Statistika</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shiko Gjendjen e trafikut<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Trafiku ne oret e Fundit</a></li>
                                            <li><a href="#">Trafiku ne ditet e Fundit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Kerko</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!--Harta -->
            <div class="row">
                <div class="col-md-12">
                     <div id="map"></div>
                </div>
            </div>
        </div>
    </body>
</html>