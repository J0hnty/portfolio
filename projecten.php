<!DOCTYPE html>
<html>
    <?php include_once "database/Database.php";
        require "Modules/projecten.php";?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Projecten</title>
</head>
<body>
<div class="grid-container">
    <div class="gitem1">
        <div class="flex-container">
            <div><a href="Home.html">
                    <img src="Img/Mylogo.png" alt="Home" width="70px"></a>
            </div>
            <div class="fitem">
                <a href="OverMij.html">Over mij</a>
            </div>
            <div class="fitem">
                <a href="Vaardigheden-kennis.html">Vaardigheden/Kennis</a>
            </div>
            <div class="fitem">
                <a href="projecten.php">Projecten</a>
            </div>
            <div class="fitem">
                <a href="Contact.html">Contact</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                <?php
                    global $id;
                    global $projects;
                    $i = 0;
                    //$projects = ['stom', 'ei', 'hoofd', 'fdsfs', '2uwiw', 'fhsf'];
                    $projects = getProjects();
                ?>
                <div class="row">
                <?php foreach ($projects as $project):?>
                <?php $i++?>
                <?php //var_dump($project);?>
<!--                        <div class="col-md-4">-->
<!--                            <div class="card --><?php //echo($i % 2 !== 0)?'bg-primary':'bg-info'; ?><!--">-->
<!--                                <div class="card-body">-->
<!--                                    <img class="card-img-top" src="Img/Project-Black-Jack.jpg" alt="C# project">-->
<!--                                    <h4 class="card-title">BlackJack</h4>-->
<!--                                    <p>Dit is mijn eerste project wat ik heb gemaakt in de ICT sector.</p>-->
<!--                                    <a href="https://github.com/302883510/hoger-lager-game-herres-internationale-V2">git</a>-->
<!--                                    <a class="btn btn-warning" href="project1.html">Klik hier</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-md-4">
                            <div class="card <?php echo($i % 2 !== 0)?'bg-primary':'bg-info'; ?>">
                                <div class="card-body">
                                    <img class="card-img-top" src="<?php $project->picture?>" alt="<?php $project->name?>">
                                    <h4 class="card-title"><?= $project->name?></h4>
                                    <p><?php $project->description?></p>
                                    <a class="btn btn-danger" href="<?php $project->git?>">git link</a>
                                    <a class="btn btn-warning" href="project1.html">Klik hier</a>
                                </div>
                            </div>
                        </div>
                    <?php // else:?>
                    <?php // endif;?>
                <?php endforeach;?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <img class="card-img-top" src="Img/Project-Black-Jack.jpg" alt="C# project">
                                <h4 class="card-title">BlackJack</h4>
                                <p>Dit is mijn eerste project wat ik heb gemaakt in de ICT sector.</p>
                                <a href="https://github.com/302883510/hoger-lager-game-herres-internationale-V2">git</a>
                                <a class="btn btn-warning" href="project1.html">Klik hier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info">
                            <div class="card-body">
                                <img class="card-img-top" src="Img/rekenmachien.PNG" alt="rekentool">
                                <h4 class="card-title">Rekenmachien</h4>
                                <p>Dit is mijn eerste Javascript applicatie.</p>
                                <a href="https://github.com/J0hnty/blyat-maschien">git</a>
                                <a class="btn btn-warning" href="project2.html">klik hier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <img class="card-img-top" src="Img/BKE.PNG" alt="spelletje">
                                <h4 class="card-title">Boter, kaas en Eieren</h4>
                                <p>Mijn tweede Javascript applicatie.</p>
                                <a href="https://github.com/J0hnty/JS-BKE">git</a>
                                <a class="btn btn-warning" href="project3.html">Klik hier</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h1></h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <img class="card-img-top" src="Img/bootstrap opdracht.PNG" alt="HTML/CSS, Bootstap">
                                <h4 class="card-title"></h4>
                                <p>Een opdracht die bootstrap-4 in mijn pagina verwerkt.</p>
                                <a href="https://github.com/J0hnty/Opdracht-Bootstrap">git</a>
                                <a class="btn btn-warning" href="bootstrap opdracht/project4.html">Klik hier</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-info">
                            <div class="card-body">
                                <img class="card-img-top" src="Img/thema switcher.PNG" alt="Thema switcher">
                                <h4 class="card-title">Thema switcher</h4>
                                <p></p>
                                <a href="https://github.com/J0hnty/blyat-maschien">git</a>
                                <a class="btn btn-warning" href="project5.html">klik hier</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <img class="card-img-top" src="project interaction design/img/yeet.logo.png" alt="yeet">
                                <h4 class="card-title">Interaction design website</h4>
                                <p></p>
                                <a href="https://github.com/J0hnty/ID-keuzendeel-project-YEET">git</a>
                                <a class="btn btn-warning" href="project interaction design/project6.html">Klik hier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.map" crossorigin="anonymous"></script>
<script src="bootstrap-4.5.3-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>