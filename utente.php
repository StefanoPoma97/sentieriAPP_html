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
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="uteni.php">Utenti</a></li>
                    <li class="active">Utente</li>
                </ul>
            </div>
        </div>
         
         <div class="container pt-5">
                        
            <div class="row">
                
                <div class="col-md-5">
                        <div>                            
                            <img alt="image" height="120px"class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                <h3><strong>Username</strong>
                                    <a style="margin-left: 2em;" class="btn btn-info" href="modificautente.php"><span class="glyphicon glyphicon-wrench"></span> modifica</a>
                                </h3>
                                <div class="card-subtitle">
                                    <p class="card-blockquote">
                                        questa è la descrizione del profilo che uno fa e parla di robe a caso eccp
                                    </p>
                                </div>
                                <div class="card-body pt-3">
                                    <p>Nome: </p>
                                    <p>Cognome: </p>
                                    <p>Percorsi effettuati: </p>
                                    <p>Preferiti: <a href="sentieri.html">15</a></p>
                                </div>
                                <div class="card-footer pt-3">
                                    <p>Utente dal: </p>
                                </div>
  
                        </div>
                </div>
                
                <div class="col-md-6 ">
                     <h3>Ultimi percorsi effettuati:</h3>
                     <div class="card" style="margin-bottom: 1em;">
                         
                         <div class="card-header text-center">
                             <h4 class="card-title">Mega giro lunghissimo    <span class="badge badge-secondary">3 h</span></h4> 
                         </div>
                         
                         <div class="card-body text_padding_card" style="margin-top: 1em;">
                             <h5 class="card-subtitle text-muted pb-3 ">hffhhdhfdhfdhfgafgaf
                             fsABFsbfaFBASGVFashgfvsahgfvhCS
                                 sbBCsCbhCVShvHASVCvCHJcvsDHcHJCVshjVCsg             vsgcvgvG SVgvGgvggcv
                             sssssffffffffff</h5>
                             <div style="margin-top: 1em;">
                                 <div class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
                             </div>
                             <div class=" pull-right ">
                                 <a class="card-link" href="sentiero.php">Scopri</a>
                             </div>
                             
                         </div>
                     </div>
                     
                     <div class="card" style="margin-bottom: 1em;">
                         
                         <div class="card-header text-center">
                             <h4 class="card-title">Mega giro lunghissimo    <span class="badge badge-secondary">3 h</span></h4> 
                         </div>
                         
                         <div class="card-body text_padding_card" style="margin-top: 1em;">
                             <h5 class="card-subtitle text-muted pb-3 ">hffhhdhfdhfdhfgafgaf
                             fsABFsbfaFBASGVFashgfvsahgfvhCS
                                 sbBCsCbhCVShvHASVCvCHJcvsDHcHJCVshjVCsg             vsgcvgvG SVgvGgvggcv
                             sssssffffffffff</h5>
                             <div style="margin-top: 1em;">
                                 <div class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
                             </div>
                             <div class=" pull-right ">
                                 <a class="card-link" href="sentiero.php">Scopri</a>
                             </div>
                             
                         </div>
                     </div>
                     
                     <div class="card" style="margin-bottom: 1em;">
                         
                         <div class="card-header text-center">
                             <h4 class="card-title">Mega giro lunghissimo    <span class="badge badge-secondary">3 h</span></h4> 
                         </div>
                         
                         <div class="card-body text_padding_card" style="margin-top: 1em;">
                             <h5 class="card-subtitle text-muted pb-3 ">hffhhdhfdhfdhfgafgaf
                             fsABFsbfaFBASGVFashgfvsahgfvhCS
                                 sbBCsCbhCVShvHASVCvCHJcvsDHcHJCVshjVCsg             vsgcvgvG SVgvGgvggcv
                             sssssffffffffff</h5>
                             <div style="margin-top: 1em;">
                                 <div class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
                             </div>
                             <div class=" pull-right ">
                                 <a class="card-link" href="sentiero.php">Scopri</a>
                             </div>
                             
                         </div>
                     </div>
                     
                     <div class="card" style="margin-bottom: 1em;">
                         
                         <div class="card-header text-center">
                             <h4 class="card-title">Mega giro lunghissimo    <span class="badge badge-secondary">3 h</span></h4> 
                         </div>
                         
                         <div class="card-body text_padding_card" style="margin-top: 1em;">
                             <h5 class="card-subtitle text-muted pb-3 ">hffhhdhfdhfdhfgafgaf
                             fsABFsbfaFBASGVFashgfvsahgfvhCS
                                 sbBCsCbhCVShvHASVCvCHJcvsDHcHJCVshjVCsg             vsgcvgvG SVgvGgvggcv
                             sssssffffffffff</h5>
                             <div style="margin-top: 1em;">
                                 <div class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
                             </div>
                             <div class=" pull-right ">
                                 <a class="card-link" href="sentiero.php">Scopri</a>
                             </div>
                             
                         </div>
                     </div>
                     
                     <div class="card" style="margin-bottom: 1em;">
                         
                         <div class="card-header text-center">
                             <h4 class="card-title">Mega giro lunghissimo    <span class="badge badge-secondary">3 h</span></h4> 
                         </div>
                         
                         <div class="card-body text_padding_card" style="margin-top: 1em;">
                             <h5 class="card-subtitle text-muted pb-3 ">hffhhdhfdhfdhfgafgaf
                             fsABFsbfaFBASGVFashgfvsahgfvhCS
                                 sbBCsCbhCVShvHASVCvCHJcvsDHcHJCVshjVCsg             vsgcvgvG SVgvGgvggcv
                             sssssffffffffff</h5>
                             <div style="margin-top: 1em;">
                                 <div class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
                             </div>
                             <div class=" pull-right ">
                                 <a class="card-link" href="sentiero.php">Scopri</a>
                             </div>
                             
                         </div>
                     </div>
                 
                 </div>
                
            </div>
        </div>
        
        
        
        
        <div class="container">
            <div class="row" style="margin-bottom: 3em;">
                <div class="col-md-3">
                    <div class="header-sezione">
                        <h3 class="pull-left">Esperienze personali</h3>
                     </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="container horizontal-scrollable">
                        <div class="row">
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4>Nome sentiero</h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                    <li class="list-group-item ">Voto:   6</li>
                                    <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                </ul>
                            </div>
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4>Nome sentiero</h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                    <li class="list-group-item ">Voto:   6</li>
                                    <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                </ul>
                            </div>
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4>Nome sentiero</h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                    <li class="list-group-item ">Voto:   6</li>
                                    <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                </ul>
                            </div>
                            <div class="col-m-3 col-sm-3">
                                <ul class="list-group ">
                                    <li class="list-group-item "><h4>Nome sentiero</h4></li>
                                    <li style="height: 100px" class="list-group-item"><q>sbB>BDVdg>VDvVvdvdvDVDds
                                            sdsSdbDBHJdjbJDb>HdjBSdv>FhV    
                                            fsfdBFJBFAVFhG>VsHCd
                                            dDhs Dv> CVSC> xbnxnshss d</q></li>
                                    <li class="list-group-item ">Difficoltà:   7</li>
                                    <li class="list-group-item ">Voto:   6</li>
                                    <li class="list-group-item "><a class="btn btn-info btn-block btn-round-bottom" href="sentiero.html" role="button">Dettagli</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pull-right">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>

                        </div>
                                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
