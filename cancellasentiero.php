<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Biblios :: Books' List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <!-- Fogli di stile -->
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/style.css">

        <!-- jQuery e plugin JavaScript -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
       

        
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <h1>
                            Cancella il sentiero
                        </h1>
                    </header>
                    <p class='lead'>
                        Confermi?
                    </p>
                </div>
            </div>
        </div>
         
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class='panel-heading'>
                            Annulla
                        </div>
                        <div class='panel-body'>
                            <p>Il sentiero <strong>non sarà rimosso</strong> dal database</p>
                            <p><a class="btn btn-default" href="elencosentieri.php"><span class='glyphicon glyphicon-log-out'></span> Revert</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class='panel-heading'>
                            Confirm
                        </div>
                        <div class='panel-body'>
                            <p>Il sentiero <strong>sarà rimosso</strong> dal databse</p>
                            <p><a class="btn btn-danger" href="elencosentieri.php"><span class='glyphicon glyphicon-trash'></span> Delete</a></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
