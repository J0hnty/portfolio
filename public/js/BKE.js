console.log('Js loaded');

//players commands
let playerOneButtonElement = document.querySelector('.buttonPlayer1');
let playerTwoButtonElement = document.querySelector('.buttonPlayer2');
playerOneButtonElement.addEventListener('click', buttonOne);
playerTwoButtonElement.addEventListener('click', buttonTwo);

//ophalen speler namen
let playerOneName = document.querySelector('.namePlayerOne');
let playerTwoName = document.querySelector('.namePlayerTwo');

//uitschrijven van naam
let playeronenameElement = document.querySelector('.player1Name');
let playertwonameElement = document.querySelector('.player2Name');

//winnaar text
let winnerShowElement = document.querySelector('.Wie-wint');

//reseten
let resetButtonElement = document.querySelector('.reset-button');
resetButtonElement.addEventListener('click', reset);

let gelijkspel = true;

//maken van gameboard
function preGame () {
    
    if (playerOneName.value && playerTwoName.value != "" || " ") {
        let vakje=document.querySelector('.game-board');
        vakje.addEventListener('click', Game)

    }
    //help het werkt niet zo als ik wil
}



let model =new Array (9);
for (let i = 0; i < model.length; i++) {
    model[i] ='leeg';
}



let speler1= new Speler(`${playerOneName.value}`, true, `X`);

let speler2= new Speler(`${playerTwoName.value}`, false, `O`);

speler1.aanBeurt = true;
reset();

console.log(speler1.getName(),speler1.getSymbool(),speler1.ikBenAanBeurt());
console.log(speler2.getName(),speler2.getSymbool(),speler2.ikBenAanBeurt());

preGame();

function buttonOne() {
        
    console.log(`knop 1 is gedrukt`);
    speler1.naam = playerOneName.value;
    playeronenameElement.innerHTML = speler1.naam;
    console.log(`${playerOneName.value}`);

    playerOneName.classList.add('visibility');
    playerOneButtonElement.classList.add('visibility');

}

function buttonTwo() {

    console.log(`knop 2 is gedrukt`)
    speler2.naam = playerTwoName.value;
    playertwonameElement.innerHTML = speler2.naam;
    console.log(`${playerTwoName.value}`);

    playerTwoName.classList.add('visibility');
    playerTwoButtonElement.classList.add('visibility');

}

function Game(event) {
    if (speler1.aanBeurt === true) {
        let vakje=event.target;
        let index=vakje.id;
        if (model[index] === "leeg") {
            vakje.innerHTML=speler1.getSymbool();
            model [index]="X";
            console.log(model);
            console.log(speler1.getName(),speler1.getSymbool(),speler1.ikBenAanBeurt());
            console.log(speler2.getName(),speler2.getSymbool(),speler2.ikBenAanBeurt());
        }
        
    }
    if (speler2.aanBeurt === true) {
        let vakje=event.target;
        let index=vakje.id;
        if (model[index] === "leeg") {
            vakje.innerHTML=speler2.getSymbool();
            model [index]="O";
            console.log(model);
            console.log(speler1.getName(),speler1.getSymbool(),speler1.ikBenAanBeurt());
            console.log(speler2.getName(),speler2.getSymbool(),speler2.ikBenAanBeurt());
        }
        
        

    }
    
    speler1.wisselBeurt();
    speler2.wisselBeurt();
    isWinnaar();
    

}

 
function isWinnaar(){
    if (model[0]==="X"&& model[1]==="X" && model[2]==="X" || model[0]==="O"&& model[1]==="O" && model[2]==="O") {
        
        winnaarMessage()
    }
    if (model[3]==="X"&& model[4]==="X" && model[5]==="X" || model[3]==="O"&& model[4]==="O" && model[5]==="O") {
        
        winnaarMessage()
    }
    if (model[6]==="X"&& model[7]==="X" && model[8]==="X" || model[6]==="O"&& model[7]==="O" && model[9]==="O") {
        
        winnaarMessage()
    }
    if (model[0]==="X"&& model[3]==="X" && model[6]==="X" || model[0]==="O"&& model[3]==="O" && model[6]==="O") {
        
        winnaarMessage()
    }
    if (model[1]==="X"&& model[4]==="X" && model[7]==="X" || model[1]==="O"&& model[4]==="O" && model[7]==="O") {
        
        winnaarMessage()
    }
    if (model[2]==="X"&& model[5]==="X" && model[8]==="X" || model[2]==="O"&& model[5]==="O" && model[8]==="O") {
        
        winnaarMessage()
    }
    if (model[0]==="X"&& model[4]==="X" && model[8]==="X" || model[0]==="O"&& model[4]==="O" && model[8]==="O") {
        
        winnaarMessage()
    }
    if (model[2]==="X"&& model[4]==="X" && model[6]==="X" || model[2]==="O"&& model[4]==="O" && model[6]==="O") {
        
        winnaarMessage()
    }
    
}

function winnaarMessage() {

    console.log(`speler1${speler1.ikBenAanBeurt()}`);
    console.log(`speler2${speler2.ikBenAanBeurt()}`);
    gelijk()
    if (speler1.ikBenAanBeurt() === false) {
        //speler1 wint

        winnerShowElement.innerHTML = `${speler1.naam} wins`
        
    }
    if (speler2.ikBenAanBeurt() === false) {
        //speler2 wint

        winnerShowElement.innerHTML = `${speler2.naam} wins`

    }


}

function gelijk() {
    
    for (let i = 0; i < model.length; i++) {
        if (model[i] == "leeg") {
            gelijkspel = false
            console.log('aapje');
        } 
        
    }if (gelijkspel === true) {
            console.log('aaaap');
            winnerShowElement.innerHTML= 'gelijk gespeeld';
        }
    
    

}

function reset() {
    //reset
    let vakjes=document.querySelectorAll(".play-field");
    console.log('Reset game');

    for (let i = 0; i < model.length; i++) {
        
        model[i]="leeg";
        vakjes[i].innerHTML="";
        winnerShowElement.innerHTML= "";
    }
    

}