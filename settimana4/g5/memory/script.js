//generare 24 card contenenti le icone presenti all'indirizzo 
//https://html-css-js.com/html/character-codes/

let iconeArray = ['🥥','🍏','🥨','🥦','🍤','🥠','🍖','🍗','🥝','🍻','🥂','🥟'];
iconeArray = iconeArray.concat(iconeArray);

const memory = document.querySelector('#memory');

function start(){

    let iconeShuffle = shuffle(iconeArray);
    for(let icona of iconeShuffle) {
        
        let box = document.createElement('div');
        box.classList.add('icon-box');

        box.addEventListener('click',() => {
            checkIcons(icona, box)
        })

        let div = document.createElement('div');
        div.textContent = icona;
        div.classList.add('card');
        
        box.append(div);
        memory.append(box);
    }

}

start();


function checkIcons(icon, box){
    box.classList.add('selected')
}

function shuffle(array){

    let newArray = [];
    
    for(let i = array.length; i > 0; i--){
        
        let rand = Math.floor(Math.random() * array.length);
        newArray.push(array[rand]);
        array.splice(rand,1);

    }
    return newArray;
}


