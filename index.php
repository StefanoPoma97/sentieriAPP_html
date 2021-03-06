<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Sentieri APP</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <!-- Fogli di stile -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mio_stile.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        

        <!-- jQuery e plugin JavaScript  -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
       
        
        <!-- creazione nav-bar-->
        <nav class="navbar-default navbar-fixed-top"> <!-- nav bar fissata in alto sempre -->
            <div class="container">
                
                <!-- crea il bottone con le 3 linee-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                
                <!-- sostituisce il bottone home -->
                
                
                <!-- barra del menu-->
                <div class="collapse navbar-collapse navbar-responsive-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav">
                        <li class="active-soft"><a href="index.php">Home</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right navbar-login pl-5 pull-right">
                        
                        <li><a class="bordo-selezione" href="sentieri.php">Sentieri</a></li>
                        <li><a class="bordo-selezione" href="utenti.php">Utenti</a></li>
                        <li><a class="bordo-selezione" href="contatti.php">Contatti</a></li>
                        <li style="margin-left: 5em;"><a class="btn btnlogin" href="autenticazione.php"><span class="glyphicon glyphicon-log-in"></span> Accedi</a></li>
                        <li><a class="btnsignin" href="autenticazione.php"><span class="glyphicon glyphicon-user"></span> Registrati</a></li>
                        <li class="dropdown">
                            <a class="btnsignin dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="utente.php">Account</a></li>
                                <li><a href="sentieri.php">Preferiti</a></li>
                                <li><a href="utenti.php">Lista utenti</a></li>
                                <li><a href="elencosentieri.php">Lista sentieri</a></li>
                                <li><a href="index.php">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
           
                </div>
                
            </div>
        </nav>
        
        
        <!-- sfondo montagne con tasto ricerca-->
        <div class="container" style="margin-top: 5em;">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="jumbotron">
                    <h1 class="display-5 text-white text-center">Scopri la tua prossima esperienza</h1>
                    <p class="lead text-white text-center">Cerca tra i nostri percorsi per trovare quello giusto per te</p>
                    <div class="text-center col-xs-12 pb-5">
                        
                        <form class="form-inline" name="form_ricerca" method="get" action="sentieri.php">
                            <div class="form-group ">
                                <div>
                                    <input class="form-control" type="text" id="ricerca" name="ricerca" placeholder="Cerca">
                                </div>
                            </div>
                            
                            <div class="form-group pl-3">
                                <div>
                                    <button type="submit" class="btn btn-primary">Cerca</button>
                                    <input id="mySubmit" type="submit" value='Save' class="hidden"/>                         
                                </div>
                            </div>
                           
                            
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

        
        <!-- header-->
        <div class="container">
            <header class="header-sezione">
                <h1>
                    Esplora
                </h1>
            </header>
        </div>
        
        <!-- elenco suggerimenti-->
        <div class="container">
            <div class="row">
                        
                        <div class="col-sm-12 col-xs-12">
                            
                            <div id="consigli-tab">
                                
                                <!-- tab della nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-1" data-toggle="tab">Aggiunti di recente</a></li>
                                    <li><a href="#tab-2" data-toggle="tab">I più votati</a></li>
                                    <li><a href="#tab-3" data-toggle="tab">Consigliati per te</a></li>
                                    <li><a href="#tab-4" data-toggle="tab">Preferiti</a></li>
                                </ul>
                                
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-m-3 col-sm-3 col-xs-12">
                                                    <ul class="list-group">
                                                        <li class="list-group-item "><h4>Titolo1</h4></li>
                                                        <li class="list-group-item "><strong>Tipo</strong></li>
                                                        <li style="height: 150px" class="list-group-item "><q>sbB>BDVdg>VDvVvdvdvDVDds
                                                                sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                                                fsfdBFJBFAVFhG>VsHCd
                                                                dDhs Dv> CVSC> xbnxnshss d</q></li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-time"></span>   4 ore</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-repeat"></span>   13 km</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-up"></span>   salita</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   discesa</li>
                                                        <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-m-3 col-sm-3 col-xs-12">
                                                    <ul class="list-group ">
                                                        <li class="list-group-item "><h4>Titolo</h4></li>
                                                        <li class="list-group-item "><strong>Tipo</strong></li>
                                                        <li style="height: 150px" class="list-group-item "><q>sbB>BDVdg>VDvVvdvdvDVDds
                                                                sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                                                fsfdBFJBFAVFhG>VsHCd
                                                                dDhs Dv> CVSC> xbnxnshss d</q></li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-time"></span>   4 ore</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-repeat"></span>   13 km</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-up"></span>   salita</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   discesa</li>
                                                        <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-m-3 col-sm-3 col-xs-12">
                                                    <ul class="list-group ">
                                                        <li class="list-group-item "><h4>Titolo</h4></li>
                                                        <li class="list-group-item "><strong>Tipo</strong></li>
                                                        <li style="height: 150px" class="list-group-item "><q>sbB>BDVdg>VDvVvdvdvDVDds
                                                                sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                                                fsfdBFJBFAVFhG>VsHCd
                                                                dDhs Dv> CVSC> xbnxnshss d</q></li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-time"></span>   4 ore</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-repeat"></span>   13 km</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-up"></span>   salita</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   discesa</li>
                                                        <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-m-3 col-sm-3 col-xs-12">
                                                    <ul class="list-group ">
                                                        <li class="list-group-item "><h4>Titolo1</h4></li>
                                                        <li class="list-group-item "><strong>Tipo</strong></li>
                                                        <li style="height: 150px" class="list-group-item "><q>sbB>BDVdg>VDvVvdvdvDVDds
                                                                sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                                                fsfdBFJBFAVFhG>VsHCd
                                                                dDhs Dv> CVSC> xbnxnshss d</q></li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-time"></span>   4 ore</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-repeat"></span>   13 km</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-up"></span>   salita</li>
                                                        <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   discesa</li>
                                                        <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <p>Donec id elit non mi porta gravida at <a href="#">eget metus id elit mi</a> egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                                        <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, <a href="#">tellus ac cursus</a> comodo egetine metuss gorp.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc.</p>
                                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc.</p>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <p>pare tu non abbia ancora preferiti</p>
                                        
                                </div>
                            </div>
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
            </div>
        </div>
                                                        
    </body>
</html>
