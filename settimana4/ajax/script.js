
const url = 'http://pizza.test/wp-json/wp/v2/pizza';

fetch(url)
.then(res => res.json())
.then(pizze => {

    console.log(pizze);

    for( let pizza of pizze){

        document.querySelector('#pizze').innerHTML += '<div>'+pizza.title.rendered+ ' ' + pizza.acf.prezzo + '€</div>';
        console.log(pizza.title.rendered)
    }

})