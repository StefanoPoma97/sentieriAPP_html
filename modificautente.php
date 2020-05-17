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
                <h2 class="pull-left">Modifica Account</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Modifica account</li>
                </ul>
            </div>
        </div>
        
        <div class="container pt-5" style="margin-top: 5em;">
            <div class="row">
                <div class='col-md-12'>
                    <form class="form-horizontal" name="modifica_utente" method="post" action="utente.php">
                        
                        <div class="form-group">
                            <label for="Nome" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="Nome" name="Nome" placeholder="First Author\'s Name" value="nome atuale PHP">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Cognome" class="col-sm-2 col-form-label">Cognome</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="Cognome" name="Cognome" placeholder="First Author\'s Name" value="cognome attuale PHP">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="username" name="username" placeholder="First Author\'s Name" value="cognome attuale PHP">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                             <label for="email" class="col-sm-2 col-form-label">Email</label>
                             <div class="col-sm-10">
                                 <input type="email" class="form-control" id="email" placeholder="Email">
                             </div>
                         </div>
                        
                        <div class="form-group row">
                             <label for="descrizione" class="col-sm-2 col-form-label">descrizione</label>
                             <div class="col-sm-10">
                                 <textarea class="form-control" id="descrizione" rows="3"></textarea>
                             </div>
                         </div>
                        
                        <div class="form-group row">
                              <label for="citta" class="col-sm-2 col-form-label">Città</label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="citta" id="citta" form="Categoria">
                                      <option value="Trekking">Trekking</option>
                                      <option value="Passeggiata">Passeggiata</option>
                                      <option value="Ferrata">Ferrata</option>
                                  </select>
                              </div>
                          </div>
                        
                        <div class="form-group row">
                             <label for="password_precedente" class="col-sm-2 col-form-label">Password precedente</label>
                             <div class="col-sm-10">
                                 <input type="password" class="form-control" id="passwordPrecedente" placeholder="Password precedente">
                             </div>
                         </div>
                        <div class="form-group row">
                             <label for="password_nuova" class="col-sm-2 col-form-label">Nuova password</label>
                             <div class="col-sm-10">
                                 <input type="password" class="form-control" id="password_nuova" placeholder="Nuova password">
                             </div>
                         </div>
                        <div class="form-group row">
                             <label for="password_nuova2" class="col-sm-2 col-form-label">Ripeti la password</label>
                             <div class="col-sm-10">
                                 <input type="password" class="form-control" id="password_nuova2" placeholder="Ripeti la password">
                             </div>
                         </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="hidden" name="id" value=""/>
                                <label for="mySubmit" class="btn btn-primary btn-large btn-block"><span class="glyphicon glyphicon-floppy-save"></span> Save</label>
                                <input id="mySubmit" type="submit" value="save" class="hidden"/>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <a href="utente.php" class="btn btn-danger btn-large btn-block"><span class="glyphicon glyphicon-log-out"></span> Cancel</a>                         
                            </div>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
