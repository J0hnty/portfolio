<!DOCTYPE html>
<html>
    <head>
        <?php 
            include_once '../Templates/head.php';
        ?>
        <link rel="stylesheet" href="../public/css/bstyle.css">
        <title>blyat maschien</title>
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid">
                    <h1 class="title">calculator basis test</h1>
                    <input type="button" value="Darkmode">
                    <a class="btn cc" href="../projecten.php">Klik hier als je terug wil naar de projecten pagina</a>
                </div>
            
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="display">0</div>
                </div>
                    
                <div class="row">
                    <div class="col-md-4">
                        <p class='normal-text'>
                            Ik ben trots op deze eenvoudige rekenmachien!
                            Na het hard werken aan deze rekenmachien
                            is het mij gelukt om het werkend te krijgen :)
                        </p>
                    </div>
                    
                    <div class=buttons>
                        <button class="btn-number">7</button>
                        <button class="btn-number">8</button>
                        <button class="btn-number">9</button>
                        <button class="btn-operator">x</button>
                        <button class="btn-number">4</button>
                        <button class="btn-number">5</button>
                        <button class="btn-number">6</button>
                        <button class="btn-operator">-</button>
                        <button class="btn-number">1</button>
                        <button class="btn-number">2</button>
                        <button class="btn-number">3</button>
                        <button class="btn-operator">+</button>
                        <button class="btn-number">0</button>
                        <button class="btn-dot">.</button>
                        <button class="btn-operator">x²</button>
                        <button class="btn-operator">/</button>
                        <button class="btn-clear">AC</button>
                        <button class="btn-equal">=</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="../public/js/main.js"></script>
    </body>
</html>