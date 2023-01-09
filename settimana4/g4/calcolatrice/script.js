function aggiungiNumero(bottone){

    let simbolo = bottone.textContent;
    console.dir(bottone)

    let display = document.querySelector('#display')
    
    display.value += simbolo

}

function reset(){

    document.querySelector('#display').value = '';

}

function totale(){

    let display = document.querySelector('#display');

    let valoreConAsterischi = display.value.replaceAll('x','*');

    display.value = eval(valoreConAsterischi);

}
