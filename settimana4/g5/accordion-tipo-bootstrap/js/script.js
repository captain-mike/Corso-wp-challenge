
function $(selettore){
    return document.querySelectorAll(selettore)
}


let accordionSections = $('.accordion-section');

for(let section of accordionSections){

    let content = section.querySelector('.accordion-content');
    let contentHeight = content.clientHeight;//altezza del contenuto
    
    content.setAttribute('data-height',contentHeight);//scrivo l'altezza sull'elemento

    if(!section.classList.contains('open')){
        slideUp(content,0);
    }

}

function slideUp(element, time = 5){

    let height = element.getAttribute('data-height');//100
    let i = height;//100

    let timer = setInterval(() => {
        element.style.height = i + 'px';
        i--;
        if(i <= 0){
            clearInterval(timer);//blocco l'esecuzione di setInterval
        }
    }, time)

}
function slideDown(element, time = 5){

    let height = element.getAttribute('data-height');//100
    let i = 0;

    let timer = setInterval(() => {
        element.style.height = i + 'px';
        i++;
        if(i >= height){
            clearInterval(timer);//blocco l'esecuzione di setInterval
        }
    }, time)

}


let accordionTitles = $('.accordion-title');

for(let title of accordionTitles){

    title.addEventListener('click',function(){

        let parent = title.getAttribute('data-parent');
        let target = title.getAttribute('data-target');

        let allContents = $('.accordion-content');
        for(let content of allContents){
            slideUp(content,0);
        }

        setTimeout(()=>{
            slideDown($('#'+target)[0],5);
        }, 500)

    })

}