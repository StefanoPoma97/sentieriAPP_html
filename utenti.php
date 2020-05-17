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
                <h2 class="pull-left">Elenco utenti</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Utenti</li>
                </ul>
            </div>
        </div>
         
         <!-- tabella utenti-->
        <div class="container" style="margin-top: 3em;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped table-hover table-responsive  table-sm" style="width:100%" data-toggle="table" data-search="true" data-show-columns="true" >
                        <col width='30%'>
                        <col width='30%'>
                        <col width='30%'>
                        <col width='10%'>
                        <thead>
                            <tr class="table-bordered">
                                <th data-sortable="true" class="th-sm ">Username</th>
                                <th data-sortable="true" class="th-sm ">Nome</th>
                                <th data-sortable="true" class="th-sm ">Cognome</th>
                                <th class="th-sm "></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Gianni89</td>
                                <td>Gianni</td>
                                <td>mancuso</td>
                                <td>
                                    <a class="btn btn-info" href="utente.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gianni89</td>
                                <td>Gianni</td>
                                <td>mancuso</td>
                                <td>
                                    <a class="btn btn-info" href="utente.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gianni89</td>
                                <td>Gianni</td>
                                <td>mancuso</td>
                                <td>
                                    <a class="btn btn-info" href="utente.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gianni89</td>
                                <td>Gianni</td>
                                <td>mancuso</td>
                                <td>
                                    <a class="btn btn-info" href="utente.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gianni89</td>
                                <td>Gianni</td>
                                <td>mancuso</td>
                                <td>
                                    <a class="btn btn-info" href="utente.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a>
                                </td>
                            </tr>
                        </tbody>
                        
                        <tfoot>
                            <tr>
                                <th class="th-sm table-bordered">Username</th>
                                <th class="th-sm table-bordered">Nome</th>
                                <th class="th-sm table-bordered">Cognome</th>
                                <th class="th-sm table-bordered"></th>
                            </tr>
                        </tfoot>
                    </table>
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
