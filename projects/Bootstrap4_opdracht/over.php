<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <title>Snackbar Lekker</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #Jumbotron{
                background-image:url(img/ander/banner.jpg);
                background-size: cover;
                height: 250px;
                color: rgb(71, 71, 71);
                
            }
            #roodT{
                color: 	red;
            }
            footer{
            position: fixed;
            width: 100%;
            text-align: center;
            left: 0;
            bottom: 0;
            
        }
            
        </style>
    </head>
    <body>       
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="index.html" class="navbar-brand">
                <img class="img-fluid" src="img/ander/logo.png" alt="Logo" width="150px" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#iceNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="iceNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../Bootstrap4_opdracht.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="over.php">Over Snackbar Lekker</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!--Maak hier de blikvanger-->
        <h1 id="Jumbotron">
            <br>
            <br>
            Menu
        </h1>

        <!--Begin hier met de content-->
            <!--gebruik icons: fa fa-heart, fa fa-thumbs-up, fa fa-check, fa fa-leaf, fa fa-cutlery, fa fa-bicycle -->
            <div class="container">
                <br>
                <h1 id="text">Welkom bij lekker.</h1>
                <p id="text">de lekkeste snacks zijn hier te vinden</p>
                <br>
                <h1>Waarom??kiezen??klanten??voor??ons:</h1>
            </div>
            
            <div id="content"></div>
                <div class="container">

                    <div class="row">
                        <div class=" col-md-4 ">
                            <p><strong> <i class="fa fa-heart"></i> vriendelijk</strong></p>
                            <p>Ons??personeel??is??opgeleid??in??klantvriendelijkheid. <br>??
                                Bij??ons??geldt:??De??klant??is??koning</p>
                        </div>
                        <div class=" col-md-4">
                            <p><strong> <span class="fa fa-thumbs-up"></span> Lekker: </strong></p>
                            <p>De??lekkerste??snacks.??Onze??frituurvet??is??een??eigen??creatie. <br>
                                ??Deze??zorgt??voor??een??extra??krokantje
                            </p>
                        </div>
                        <div class=" col-md-4">
                            <p><strong> <span class="fa fa-check"></span> Biologische: </strong></p>
                            <p>Onze??biologische??aardappels??komt??vers??bij??de??boer??vandaan.??</p>
                        </div>
                        <div class=" col-md-4">
                            <p><strong> <span class="fa fa-leaf"></span> Di??ten: </strong></p>
                            <p>Voor??al??onze??snacks??zijn??alternatieve??beschikbaar. <br>
                                ??Denk??hierbij??aan??Halal??of??Vegan</p>
                        </div>
                        <div class=" col-md-4">
                            <p><strong> <span class="fa fa-cutlery"></span> Chefs??menu: </strong></p>
                            <p>Alle??snacks??zijn,??voordat??deze??op??het??menu??stonden, <br>
                                ??uitgebreid??getest.</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong> <span class="fa fa-bicycle"></span> Bestelling:</strong></p>
                            <p> Onze??snacks??kunt??u??bij??ons??bestellen. <br>
                                 Wij??bezorgen!</p>
                                 <br>
                        </div>

        <!--Maak hier de footer-->
        <footer class="bg-secondary text-center text-lg-start">
            <div class="text-center p-1"></div>
            <a style="color:white">?? 2021 Lekker</a>
        </footer>

    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
      
      