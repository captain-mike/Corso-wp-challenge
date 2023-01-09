
let persone = document.querySelector('#persone');

persone.addEventListener('change', function(){
    let pers = persone.value;
    
    let ingredienti = document.querySelectorAll('#ingredienti span');

    for(let ingrediente of ingredienti){

        let q = ingrediente.getAttribute('data-q');
        let newQ = q * pers;
       
        ingrediente.innerHTML = newQ < 1 ? newQ : Math.ceil(newQ);      

    }
})