<!DOCTYPE html>
<html>
    <head>
        <?php 
            include_once 'Templates/head.php';
            include_once 'Modules/projecten.php';
        ?>
        <title>Projecten</title>
        
    </head>
    <body>
        <?php 
            include_once 'Templates/nav.php';
            $projects = getProjects();
            
        ?>
        
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-2'>
                
                </div>
                <div class='col-md-8'>
                    <div class='container-fluid'>
                        <h2 class='bg-platinum'>Projecten</h2>
                        <div class='row'>
                            <?php foreach ($projects as $project): ?>
                                <div class='col-md-4'>
                                    <div class='card cc'>
                                        <div class='card-body'>
                                            <h3 class='highlight-text'><?= $project['name'] ?></h3>
                                            <p><?= $project['description'] ?></p>
                                            <img class='img' src='../public/img/projecten/<?= $project['picture'] ?>' alt='<?= $project['name'] ?>'>
                                        </div>
                                        <div class='card-footer'>
                                            <a class='btn btn-info' href="<?=$project['git']?>">git</a>
                                            <a class='btn btn-success' href="<?=$project['link']?>">klik hier</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src='../bootstrap-4.5.3-dist/js/jquery-3.5.1.min.map' crossorigin='anonymous'></script>
        <script src='../bootstrap-4.5.3-dist/js/bootstrap.min.js' crossorigin='anonymous'></script>
    </body>
</html>