<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <head>
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
                        <li><a class="btn btnlogin" href="autenticazione.php"><span class="glyphicon glyphicon-log-in"></span> Accedi</a></li>
                        <li class="pl-4"><a class="btnsignin" href="autenticazione.php"><span class="glyphicon glyphicon-user"></span> Registrati</a></li>
                        <li class="dropdown">
                            <a class="btnsignin dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="utente.php">Account</a></li>
                                <li><a href="sentieri.php">Preferiti</a></li>
                                <li><a href="index.php">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
            
                    <!-- messa a destra-->
                    <ul class="nav navbar-nav navbar-right">
                        
                        
                        
                    </ul>
                    
                </div>
                
            </div>
        </nav>
         
         
        <div class="container pb-3" style="margin-top: 5em;">
            <div class="header-sezione">
                <h2 class="pull-left">Sentieri</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Autenticazione</li>
                </ul>
            </div>
        </div>
        
        <div class="container"> 
            <div class="row" style="margin-top: 4em;"> <!-- unica riga--> <!-- margin top lo sposta in basso -->
                <div class="col-md-6 col-md-offset-3"> <!-- offset sposta a dx di 3 -->
                    
                    <div> <!-- costruzione tab -->
                        
                        <!--tab di navigazione  -->
                        <ul class="nav nav-tabs">  <!-- intestazione del tab -->
                            <li class="active"><a href="#login-form" data-toggle="tab">Login</a></li> <!--due tab che puntano a due form diverse Login e Register -->
                            <li><a href="#register-form" data-toggle="tab">Register</a></li> <!-- registern non è attivo, Login si-->
                            <!--data-toggle lo trasforma in un vero e proprio tab -->
                        </ul>
                        
                        <!--contenuto-->
                        <div class="tab-content"> 

                            <!--tab di login-->
                            <div class="tab-pane active" id="login-form"> <!-- id serve ad essere richimato dai tab  -->
                                <form id="login-form" action="index.html" method="post" style="margin-top: 2em;"> <!-- margine per distanziare -->
                                    
                                    <div class="form-group"> <!-- form-group contiene i campi -->
                                        <input type="text" name="username" class="form-control" placeholder="Username" value=""> <!-- se il cookie è settato scrivo valore -->
                                    </div> <!-- form-control da lo stile --> <!-- POST[name] -->
                                    
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div><!-- type password non fa capire cosa si sta inserendo-->
                                    
                                    <div class="form-group text-center"> <!-- messo al centro -->
                                        <input type="checkbox" name="remember"> <!-- lascia flag se cookie settato -->
                                        <label for="remember"> Remember Me</label>
                                    </div> <!-- text box + label -->
                                    
                                    <div class="form-group"> <!-- pulsante -->
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3"> <!-- messo al centro -->
                                                <input type="submit" name="login-submit" class="form-control btn btn-primary" value="Log In">
                                                <!-- login-sumbit per capire se POST ha passato qualcosa -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="text-center"> <!-- metterlo al centro -->
                                            <a href="#" class="forgot-password">Forgot Password?</a> <!-- per ora link vuoto -->
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>

                            <!--tab di registrazione-->
                            <div class="tab-pane" id="register-form">
                                <form id="register-form" action="index.html" method="post" style="margin-top: 2em;"> <!-- invoca la stessa pagina con -->
                                    
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" class="form-control btn btn-primary" value="Register Now">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
