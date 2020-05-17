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
                <h2 class="pull-left">Sentieri</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Sentieri</li>
                </ul>
            </div>
        </div>
        
         <div class="container" style="margin-top: 3em;">
             <div class="row">
                 <div class="col-md-5 col-s-5 col-m-push-7">
                     <h2 class="text-center filtro">Filtro</h2>
                     <form style="margin-top: 3em;" name="form_filtro" method="get" action="sentieri.php">
                         <div class="form-group row">
                             <label for="testo_titolo" class="col-sm-2 col-form-label">Titolo</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control" id="testo_titolo" name="testo_titolo" placeholder="Parola contenuta nel titolo">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label for="testo_descrizione" class="col-sm-2 col-form-label">Descrizione</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control" id="testo_descrizione" name="testo_descrizione" placeholder="Parola contenuta nella descrizione">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="citta">Città</label>
                             <select class="form-control" name="citta" id="citta">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="difficolta">Difficoltà</label>
                             <select class="form-control" name="difficolta" id="difficolta">
                                 <option>T</option>
                                 <option>E</option>
                                 <option>EE</option>
                                 <option>EEA</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="categoria">categoria</label>
                             <select class="form-control" id="categoria" name="categoria">
                                 <option>Passeggiata</option>
                                 <option>Trekking</option>
                                 <option>Via ferrata</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="lunghezza">Lunghezza (km)</label>
                             <input class="form-control" type="number" id="lunghezza" name="lunghezza" min="0" max="50">
                         </div>
                         <div class="form-group">
                             <label for="dislivello">Dislivello (m)</label>
                             <input class="form-control" type="number" id="dislivello" name="dislivello" min="0" max="10000">
                         </div>
                         <div class="form-group">
                             <label for="durata">Durata massima</label>
                             <input class="form-control" type="time" id="dislivello" name="durata">
                         </div>
                        
                         <div class="form-group row">
                             <div class="col-sm-10">
                                 <button type="submit" class="btn btn-info btn-toolbar">Trova</button>
                                 <input id="mySubmit" type="submit" value='Save' class="hidden"/>
                             </div>
                         </div>
                     </form>
                 </div>


                 <div class="col-md-7 col-s-7 col-m-pull-5">
                     
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
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
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
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
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
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
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
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
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
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-time"></span>   4 ore</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-repeat"></span>   13 km</div>
                                 <div style="margin-top: 1em;" class="d-inline"><span class="glyphicon glyphicon-chevron-down"></span>   discesa</div>
                             </div>
                             <div class=" pull-right ">
                                 <a class="card-link" href="sentiero.php">Scopri</a>
                             </div>
                         </div>
                     </div>
                     
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
                 
             
                     
                    
    </body>
</html>
