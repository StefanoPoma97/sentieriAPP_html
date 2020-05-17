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
        <nav class="navbar-default"> <!-- nav bar fissata in alto sempre -->
            <div class="container">
                
                <!-- crea il bottone con le 3 linee-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                
                <!-- sostituisce il bottone home -->
                <a class="navbar-brand" href="index.php">Sentieri</a>
                
                <!-- barra del menu-->
                <div class="collapse navbar-collapse navbar-responsive-collapse" id="myNavbar">
                    
                    
                    <ul class="nav navbar-nav navbar-right navbar-login pl-5 pull-right">
                        
                        <li><a class="bordo-selezione" href="sentieri.php">Sentieri</a></li>
                        <li><a class="bordo-selezione" href="utenti.php">Utenti</a></li>
                        <li><a class="bordo-selezione" href="contatti.php">Contatti</a></li>
                        <li style="margin-left: 3em;"><a class="btn btnlogin" href="autenticazione.php"><span class="glyphicon glyphicon-log-in"></span> Accedi</a></li>
                        <li class="pl-4"><a class="btnsignin" href="autenticazione.php"><span class="glyphicon glyphicon-user"></span> Registrati</a></li>
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
         
         
        <div class="container pb-3" style="margin-top: 5em;">
            <div class="header-sezione">
                <h2 class="pull-left">Sentiero</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sentieri.php">Sentieri</a></li>
                    <li class="active">Sentiero</li>
                </ul>
            </div>
        </div>
         
         <div class="container" style="margin-top: 3em;">
            <div class="row pt-5">
                    <div class="col-m-6 col-sm-6 col-xs-12">
                        <ul class="list-group ">
                            <li class="list-group-item"><strong>Tipo</strong></li>
                            <li class="list-group-item " ><strong>Difficoltà</strong></li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-time"></span>   4 ore</li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-repeat"></span>   13 km</li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-chevron-up"></span>   salita</li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   discesa</li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   h max</li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   h min</li>
                            <li class="list-group-item "><span class="glyphicon glyphicon-chevron-down"></span>   dislivello</li>
                        </ul>
                        
                        <form id="preferito" action="sentiero.html" method="post" style="margin-top: 2em;">
                            <label for="preferito" class="custom-checkbox">
                                <input type="checkbox" id="preferito"/>
                                <i class="glyphicon glyphicon-star-empty"></i>
                                <i class="glyphicon glyphicon-star"></i>
                                <span>Favorite</span>
                            </label>
                              
                        </form>
                    </div>
                

                <div class="col-md-6">
                    <div>            
                        <img src="img/mappa.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
                        <h3><strong>Community:</strong></h3>
                        <div class="col-m-10 col-sm-10">
                            <ul class="list-group ">
                                <li class="list-group-item ">Quante volte è stato percorso: 10</li>
                                <li class="list-group-item ">Media voti: 7</li>
                                <li class="list-group-item ">Difficoltà percepita: 7</li>
                                <li class="list-group-item "><q>Numero di aggiunto ai preferiti</q></li>
                                <li class="list-group-item "><q>Numero di commenti </q></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3>Descrizione</h3>
                        <p>Donec id elit non mi porta gravida at <a href="#">eget metus id elit mi</a> egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
                        <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, <a href="#">tellus ac cursus</a> comodo egetine metuss gorp.</p>
                        <blockquote>
                            <p>Due parole su chi lo ha creato</p>
                            <small>Admin <cite title="Source Title">Direttore Marketing</cite></small>
                        </blockquote>
                    </div>
                </div>
            </div>
            
            <div class="row pb-4 pt-4">
                <div class="col-md-3">
                    <div class="header-sezione">
                        <h3 class="pull-right">Ultime volte che è stato percorso</h3>
                     </div>
                </div>
            </div>
            
            <div class="row" style="margin-top: 2em;">
                <div class="col-md-12">
                    <div class="container horizontal-scrollable">
                        <div class="row">
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4><a href="utente.php">Utente 1</a></h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                </ul>
                            </div>
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4><a href="utente.php">Utente 1</a></h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                </ul>
                            </div>
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4><a href="utente.php">Utente 1</a></h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                </ul>
                            </div>
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4><a href="utente.php">Utente 1</a></h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                </ul>
                            </div>
                        </div>
                              
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-top: 3em;">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="list-group">
                        <li class="list-group-item text-center" style="background-color: #357ebd; font-size: 14px; font-weight: bold; text-transform: uppercase; color: #333333;"><h3><strong>Raccontai della tua esperienza</strong></h3></li>
                        <li class="list-group-item ">
                            <form id="aggiungiesperienza" action="sentiero.php" method="get" style="margin-top: 2em;">

                                <div class="form-group">
                                    <label for="data">Data</label>
                                    <input type="date" id="data" name="data">
                                </div>
                                
                                <div class="form-group">
                                    <label for="voto">Voto</label>
                                    <select class="form-control" id="voto" name="voto">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="difficolta">Difficoltà percepita</label>
                                    <select class="form-control" id="difficolta" name="difficolta">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="descrizione">Descrizione</label>
                                    <textarea class="form-control" id="descrizione" name="descrizione" rows="3"></textarea>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Invia</button>
                                    </div>
                                </div>

                            </form>
                        </li>
                        
                    </ul>
                </div>
            </div>
            
        </div>
    </body>
</html>
