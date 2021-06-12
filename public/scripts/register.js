const check_pw=/[\_\*\-\+\!\?\,\:\;\.]/;
let presente=false;



function controlloPw(event){

    const valid=document.querySelector("#succ");
    valid.textContent='';
    const p1=document.querySelector("#car_min");
    const p2=document.querySelector("#car_spec");
    const p3=document.querySelector("#conf_pw");
    const p4=document.querySelector("#compila");
    const p6=document.querySelector("#presente");
            
    
    p1.classList.add('hidden');
    p2.classList.add('hidden');
    p3.classList.add('hidden');
    p4.classList.add('hidden');
    p6.classList.add('hidden');
    
    
    if(!presente){
    if(form.username.value==="" || form.password.value==="" || form.conferma_password.value===""){

        p4.classList.remove('hidden');
        event.preventDefault();
        } else{
    if(form.password.value.length<8){
        p1.classList.remove('hidden');
        event.preventDefault();
    }

    if(!check_pw.test(form.password.value)){
        p2.classList.remove('hidden');
        event.preventDefault();
    }

    if(form.conferma_password.value!==form.password.value){
        p3.classList.remove('hidden');
        event.preventDefault();
    }

    
}
    } else{
        p6.classList.remove('hidden');
        event.preventDefault();
    }
}

function controlloUsername(){
    
    const input=document.querySelector('#username_input');
    fetch("http://localhost/hw2/public/register/username/" + encodeURIComponent(input.value)).then(onResponse).then(onJson);
}

function onResponse(response){
    return response.json();
}

  function onJson(json){
    presente=false;
    if(json.presente){
            presente=true;
        }
}

const form=document.querySelector('form')
const input=document.querySelector('#username_input')
input.addEventListener('blur', controlloUsername)
form.addEventListener('submit', controlloPw)


