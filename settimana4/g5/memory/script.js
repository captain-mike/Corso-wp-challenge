//generare 24 card contenenti le icone presenti all'indirizzo 
//https://html-css-js.com/html/character-codes/

let iconeArray = ['🥥','🍏','🥨','🥦','🍤','🥠','🍖','🍗','🥝','🍻','🥂','🥟'];
iconeArray = iconeArray.concat(iconeArray);
let clicks = 0;
let time = document.querySelector('#time span');

const memory = document.querySelector('#memory');

function start(){
    // nel caso si stia ricominciando la partita
    memory.innerHTML = '';//svuoto il memory
    clicks = 0;//reimposto a zero i click
    document.getElementById('clicks').innerHTML = 0;//reimposto a zero il contatore

    startTime();//avvio il timer

    //mescolo le icone
    let iconeShuffle = shuffle(iconeArray);
    //genero le icone
    iconeShuffle.forEach((icona, i) => {
        
        let box = document.createElement('div');
        box.classList.add('icon-box');
        box.id = 'box-'+i;

        box.addEventListener('click',function action(){
            increaseCount();//aumento il contatore
            checkIcons(box, icona)//avvio il funzionamento
        })

        let div = document.createElement('div');
        div.textContent = icona;
        div.classList.add('card');
        
        box.append(div);
        memory.append(box);
    })

}

function startTime(){
    
    setInterval(()=>{
        let seconds = time.textContent || 0;
        seconds++;
        time.textContent = seconds;
    },1000);

}


let selectedIcons = [];
let found = 0;
function checkIcons(box, icon){
   
    box.classList.add('selected');
    selectedIcons.push({
        icon:icon,
        id:box.id
    });

    if(selectedIcons.length == 2){

        let elem1 = document.querySelector('#'+selectedIcons[0].id)
        let elem2 = document.querySelector('#'+selectedIcons[1].id)

        //confronta
        if(selectedIcons[0].icon == selectedIcons[1].icon && elem1.id != elem2.id){
            elem1.classList.add('found');
            elem2.classList.add('found');
            elem1.classList.remove('selected')
            elem2.classList.remove('selected')
            found += 2;
            win();
        }else{
            setTimeout(()=>{
                elem1.classList.remove('selected')
                elem2.classList.remove('selected')
            },1500)
        }
        //svuota l'array di confro
        selectedIcons = [];
    }

}

function increaseCount(){
    clicks++;
    document.getElementById('clicks').innerHTML = clicks;
}

function win(){


    if(found == iconeArray.length){
        Swal.fire({
            title: 'Hai vinto!',
            text:`Complimenti, hai vinto con ${clicks} click, e ci hai messo ${time.textContent} secondi`,
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Ricomincia',
            denyButtonText: `Annulla`,
        })
        
        .then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              start();
            }
        })
    }
}

function shuffle(array){

    array = Array.from(array);//faccio una sopia dell'array per non intaccare quello originale
    let newArray = [];
    
    for(let i = array.length; i > 0; i--){
        
        let rand = Math.floor(Math.random() * array.length);
        newArray.push(array[rand]);
        array.splice(rand,1);

    }
    return newArray;
}


document.querySelector('#start')
.addEventListener('click',start)


