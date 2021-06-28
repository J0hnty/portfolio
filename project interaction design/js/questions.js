class Question{
    constructor(name, language, subject){
        this.name = name
        this.language = language
        this.subject = subject
        this.id = localStorage.getItem('id')
    }
    CreateQuestion(){
        // querySelector => ul . Append li met innerHTML ...............
        let v= document.querySelector(".question-storage")
      
        
        let li = document.createRange().createContextualFragment(
        
        `<li class="card" id="${this.id}">` +
            `<div class="card-title"><h4>${this.name}</h4></div>` +
        '<div class="card-body">' + 
        '</div>' +
            '<div class="card-footer">' +
                '<button>reply</button>' +
            '</div>' +
        '</li>' );  
        v.append(li)
        let selectTitle = document.querySelectorAll('.card-title')
        console.log(selectTitle)
    }    
        /*
        let li = document.createRange().createContextualFragment(
        '<li class="card" id="">' +
            '<div class="card-title"><h4>question</h4></div>' +
        '<div class="card-body">' + 
        '</div>' +
            '<div class="card-footer">' +
                '<button>reply</button>' +
            '</div>' +
        '</li>' ) 
        const NewQuestion = document.querySelector('.question-storage')
        NewQuestion.append(li)
        NewQuestion.lastChild.id = localStorage.getItem('id') 
        NewQuestion.lastChild.firstChild.textContent = name    
    }
    */
    GetQuestionId(){
        return this.id
    }
    
}