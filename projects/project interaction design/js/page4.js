const fadeinbutton = document.querySelector('.fade-button')
const text = document.querySelectorAll('.nav-text')

let textAreaOne = document.querySelector('.first')
let textAreaTwo = document.querySelector('.second')

const vraagElement = document.querySelector('.vraag')
let vraag = JSON.parse(localStorage.getItem('names'))

const answersButtonElement = document.querySelector('.answersButton')
answersButtonElement.addEventListener('click', handelClick)

vraagElement.innerHTML = vraag[0].name

if(fadeinbutton){
    
    fadeinbutton.addEventListener('click', Fade)
    text.forEach(el => {
        el.classList.toggle('hide')
    });
}



function Fade() {
    text.forEach(el => {
        el.classList.toggle('fade-out')
        el.classList.toggle('hide')
        el.classList.toggle('fade-in')
    });
}

function handelClick() {
    console.log(`button clicked`);
    if (textAreaOne !== "") {
        let Answers = {
        antwoord:textAreaOne.value, 
        uitleg:textAreaTwo.value
        }
        localStorage.setItem('Answers', JSON.stringify(Answers))
    }
    console.log(textAreaOne.value);
    console.log(textAreaTwo.value);
    
    
    
    

}




