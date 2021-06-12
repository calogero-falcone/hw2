function check(){
    const invalid=document.querySelector("#err");
    invalid.textContent='';
}

const form=document.querySelector('form')
form.addEventListener('submit', check)