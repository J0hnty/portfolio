<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Bootstrap4_opdracht/css/cstyle.css">
        <?php 
            include_once '../Templates/head.php';
        ?>
        <title>Snackbar Lekker</title>
        <style>
            #Jumbotron {
                background-image:url(Bootstrap4_opdracht/img/ander/banner.jpg);
                background-size: cover;
                height: 250px;
                color: rgb(71, 71, 71);
                
            }

            #roodT {
                color: 	red;
            }

            footer {
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
                <img class="img-fluid" src="Bootstrap4_opdracht/img/ander/logo.png" alt="Logo" width="150px" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#iceNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="btn btn-secondary" href="../projecten.php">return</a>
            <div class="collapse navbar-collapse" id="iceNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="Bootstrap4_opdracht.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Bootstrap4_opdracht/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Bootstrap4_opdracht/over.php">Over Snackbar Lekker</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Dit is de blikvanger-->
        <h1 id="Jumbotron">
            <br>
            <br>
            Home
        </h1>
        <!--Hier zie de de main website-->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Snackbar Lekker.</h1>
                        <p>Snackbar Lekker is een familie bedrijf dat al vanaf 1980 bestaat.</p>
                        <p>Wij bieden een breed scala aan de lekkerste snacks. Hieronder vindt u enkele van onze meest populaire snacks.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Aanbiedingen</h2>
                        <p>De aanbiedingen van deze week: <br>
                            
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="Bootstrap4_opdracht/img/snacks/burger.jpg" alt="Burger">
                            <div class="card-body">
                              <h5 class="card-title">Burger</h5>
                              <p class="card-text">De burger is in de aanbieding. </p>
                              <b id="roodT">NU: €2,50</b>
                              <br><br>
                              <a class="btn btn-dark stretched-link" href="#">Naar menukaart</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="Bootstrap4_opdracht/img/snacks/kroket.jpg" alt="Kroket">
                            <div class="card-body">
                              <h5 class="card-title">Kroket</h5>
                              <p class="card-text">De kroket is in de aanbieding.</p>
                              <b id="roodT">NU: €1,-</b>
                              <br><br>
                              <a class="btn btn-dark stretched-link" href="#">Naar menukaart</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="Bootstrap4_opdracht/img/snacks/patat.jpg" alt="Patat">
                            <div class="card-body">
                              <h5 class="card-title">Patat</h5>
                              <p class="card-text">De patat is in de aanbieding.</p>
                              <b id="roodT">NU: €1,50</b>
                              <br><br>
                              <a class="btn btn-dark stretched-link" href="#">Naar menukaart</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        


        <!--Maak hier de footer-->
        <br>
        
        <footer class="bg-secondary text-center text-lg-start">
            <p style="color:white">© 2021 Lekker</p>
        </footer>

        
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>    
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
      
      