let app = {
    iconeArray : ['🥥','🍏','🥨','🥦','🍤','🥠','🍖','🍗','🥝','🍻','🥂','🥟'],
    clicks : 0,
    time : document.querySelector('#time span'),
    memory : document.querySelector('#memory'),
    startTime(){
        
        setInterval(()=>{
            let seconds = this.time.textContent || 0;
            seconds++;
            this.time.textContent = seconds;
        },1000);
    
    },
    start() {

        // nel caso si stia ricominciando la partita
        this.memory.innerHTML = '';//svuoto il memory
        this.clicks = 0;//reimposto a zero i click
        document.getElementById('clicks').innerHTML = 0;//reimposto a zero il contatore
    
        this.startTime();//avvio il timer
    
        //mescolo le icone
        let iconeShuffle = this.shuffle(this.iconeArray);
        //genero le icone
        iconeShuffle.forEach((icona, i) => {
            
            let box = document.createElement('div');
            box.classList.add('icon-box');
            box.id = 'box-'+i;
    
            box.addEventListener('click',function action(){
                this.increaseCount();//aumento il contatore
                this.checkIcons(box, icona)//avvio il funzionamento
            })
    
            let div = document.createElement('div');
            div.textContent = icona;
            div.classList.add('card');
            
            box.append(div);
            memory.append(box);
        })
    
    },
    selectedIcons : [],
    found : 0,
    checkIcons(box, icon){
   
        box.classList.add('selected');
        this.selectedIcons.push({
            icon:icon,
            id:box.id
        });

        if(this.selectedIcons.length == 2){

            let elem1 = document.querySelector('#'+this.selectedIcons[0].id)
            let elem2 = document.querySelector('#'+this.selectedIcons[1].id)

            //confronta
            if(this.selectedIcons[0].icon == this.selectedIcons[1].icon && elem1.id != elem2.id){
                elem1.classList.add('found');
                elem2.classList.add('found');
                elem1.classList.remove('selected')
                elem2.classList.remove('selected')
                this.found += 2;
                this.win();
            }else{
                setTimeout(()=>{
                    elem1.classList.remove('selected')
                    elem2.classList.remove('selected')
                },1500)
            }
            //svuota l'array di confro
            this.selectedIcons = [];
        }

    },
    increaseCount(){
        this.clicks++;
        document.getElementById('clicks').innerHTML = this.clicks;
    },
    win(){
        if(found == iconeArray.length){
            Swal.fire({
                title: 'Hai vinto!',
                text:`Complimenti, hai vinto con ${this.clicks} click, e ci hai messo ${this.time.textContent} secondi`,
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Ricomincia',
                denyButtonText: `Annulla`,
            })
            
            .then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                this.start();
                }
            })
        }
    },
    shuffle(array){

        array = array.concat(array);
        array = Array.from(array);//faccio una sopia dell'array per non intaccare quello originale
        let newArray = [];
        
        for(let i = array.length; i > 0; i--){
            
            let rand = Math.floor(Math.random() * array.length);
            newArray.push(array[rand]);
            array.splice(rand,1);

        }
        return newArray;
    }
}

document.querySelector('#start')
.addEventListener('click',()=>app.start())