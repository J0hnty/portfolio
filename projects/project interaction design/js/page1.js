const fadeinbutton = document.querySelector('.fade-button')
const text = document.querySelectorAll('.nav-text')
var questionName = localStorage.getItem('question')
const q = document.querySelectorAll('.card')
const search = document.querySelector('.searchbar')
let selectTitle = document.querySelectorAll('.card-title')
const searchSelect = document.querySelector('#searchSelect')
let stored = document.querySelector(".question-storage")
const buttons = document.querySelectorAll('.rd')
let stored_questions = []


if(fadeinbutton){
    fadeinbutton.addEventListener('click', Fade)
    text.forEach(el => {
        el.classList.toggle('hide')
    });
}
q.forEach(el => {
    el.addEventListener('click', Redirect)
});
buttons.forEach(el => {
    el.addEventListener('click', Handle)
});



search.addEventListener('keyup', (e) => {
    const searchString = e.target.value
    let filterdQuestions = []
    filterdQuestions = stored_questions.filter(p =>{
        switch (searchSelect.value) {
            case 'none':
                return(p.n.toLowerCase().includes(searchString))
            case 'id':
                return(p.id.includes(searchString))
            case 'topic':
                return(p.s.toLowerCase().includes(searchString))
            case 'language':
                return(p.l.toLowerCase().includes(searchString))
            default:
                break;
        }
    })
    displayQuestions(filterdQuestions)
})

function Fade() {
    text.forEach(el => {
        el.classList.toggle('fade-out')
        el.classList.toggle('hide')
        el.classList.toggle('fade-in')
    });
}

if(localStorage.getItem('array') !== "undifined"){
    let test = JSON.parse(localStorage.getItem("names"));
    for (let i = 0; i < test.length; i++) {
        let newQ = new Question(test[i].name, test[i].language, test[i].subject)
        let p = {
            n: newQ.name,
            l: newQ.language,
            s: newQ.subject,
            id: newQ.id
        }
        stored_questions.push(p)   
        newQ.CreateQuestion()
    }
}
const displayQuestions = (questions) => {
    const html = questions.map((question) =>
    {
        return `
        <li class="card" id="${question.id}"> 
            <div class="card-title"><h4>${question.n}</h4></div>
        <div class="card-body"> 
        </div> 

        <div class="card-footer"> 
            <button class="rd">reply</button> 
        </div>
        </li>
      `
    })
    .join(' ')
    stored.innerHTML = html
}
function Redirect(card) {
    const elem = card.target
    //console.log(elem.innerText)

}
function Handle(event) {
    const selectButton = event.target
    if (selectButton) {
        location.href = 'page4.html'
    }
}



// make an the answerpage js code
// make the answers class
// make connection between home page and page 2
//