<!DOCTYPE html>
<html>
    <head>
        <?php 
            include_once '../Templates/head.php';
        ?>
        <link rel="stylesheet" href="../public/css/BKE.css">
    </head>
    <body>
        <header class="header">
            <h1>Boter, Kaas en eieren</h1>
            <a class="btn cc" href="../projecten.php">Klik hier als je terug wil naar de projecten pagina</a>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <h2>Boter kaas en eieren</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="player-one">
                            <p class="player1Name">Player One</p>
                            <input class="namePlayerOne">
                            <button type="button" class="buttonPlayer1">knop</button>
                            <p class="scoreP1">0</p>
                        </div>
                        <button type="button" class="reset-button">RESET</button>
                    </div>
                    <div class="col-md-4">
                        <div class="game-board">
                            <div class="play-field" id="0"></div>
                            <div class="play-field" id="1"></div>
                            <div class="play-field" id="2"></div>
                            <div class="play-field" id="3"></div>
                            <div class="play-field" id="4"></div>
                            <div class="play-field" id="5"></div>
                            <div class="play-field" id="6"></div>
                            <div class="play-field" id="7"></div>
                            <div class="play-field" id="8"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        
                        <div class="player-two">
                            <p class="player2Name">Player Two</p>
                            <input class="namePlayerTwo">
                            <button type="button" class="buttonPlayer2">knop</button>
                            <p class="scoreP2">0</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="Wie-wint">

                        </h2>
                    </div>

                </div>
            </div>
        </main>
        <footer>
            
        </footer>
        <script src="../public/js/Speler.js"></script>
        <script src="../public/js/BKE.js"></script>
    </body>
</html>