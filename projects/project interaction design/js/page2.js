const fadeinbutton = document.querySelector('.fade-button')
const text = document.querySelectorAll('.nav-text')

const vraagElement = document.querySelector('.vraag')

const firstText = document.querySelector('.first')
const secondText = document.querySelector('.second')


let Answers = JSON.parse(localStorage.getItem('Answers'))
let vraag = JSON.parse(localStorage.getItem('names'))

console.log(vraag[0].name)
console.log(Answers.antwoord)
console.log(Answers.uitleg)

vraagAntwoord()

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

function vraagAntwoord() {
    vraagElement.innerHTML = vraag[0].name
    firstText.innerHTML = Answers.antwoord
    secondText.innerHTML = Answers.uitleg
}
