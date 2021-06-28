console.log('test')

const fadeinbutton = document.querySelector('.fade-button')
const text = document.querySelectorAll('.nav-text')
const submit = document.querySelector('.submit-button')
const popuptext = document.querySelector('.popup-text')
const selector1 = document.querySelector('#s1')
const selector2 = document.querySelector('#s2')
const textarea = document.querySelector('#textarea')
let m = []

if(fadeinbutton){
    fadeinbutton.addEventListener('click', Fade)
    text.forEach(el => {
        el.classList.toggle('hide')
    });
}
selector1.addEventListener('change', CheckIfEmpty)
submit.addEventListener('click', SubmitQuestion)


function Fade() {
    text.forEach(el => {
        el.classList.toggle('fade-out')
        el.classList.toggle('hide')
        el.classList.toggle('fade-in')
    });
}
function CheckIfEmpty() {
    if (selector1.value === null) {
        console.log('hi')
    }
}
function SubmitQuestion() {
    popuptext.innerHTML = 'Question submitted please go to the answers page'
    let q1 = new Question(textarea.value, selector1.value, selector2.value)
    m.push(q1)
 
    window.localStorage.setItem("array", q1);
    window.localStorage.setItem("names", JSON.stringify(m));


}
