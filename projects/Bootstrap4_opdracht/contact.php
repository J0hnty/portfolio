<!DOCTYPE html>
<html>
    <head>
        <title>Snackbar Lekker</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
            Contact
        </h1>

        <!--Begin hier met de content-->

        <div class="container">
            <div class="alert alert-warning fade show">
                <button type="button" class="close" data-dismiss="alert" >x</button>
                <p>Neem gerust contact met ons op. <b>lekkerSnackbar@live.com</b></p>
                </div>
            <ul class="list-group">
                <li class="list-group-item">Aantal klanten:
                    <span class="badge badge-pill badge-info float-right">600</span>
                </li>
                <li class="list-group-item">Aantal Likes:
                    <span class="badge badge-pill badge-success float-right">420</span>
                </li>
            </ul>
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
      
      