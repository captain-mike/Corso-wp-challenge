$(() => {

    //chiude tutte le sezioni degli accordion
    $('.accordion-section:not(.open)').find('.accordion-content').slideUp('fast');

    $('.accordion-title').on('click',function(){

        let section = $(this).parent();
        let content = $(this).siblings('.accordion-content');
        let siblings = section.siblings();
       
        //chiudo tutte le sezioni
        siblings.removeClass('open');
        siblings.find('.accordion-content').slideUp('slow');

        //apro solo la sezione attuale
        section.toggleClass('open');
        content.slideToggle('slow');


    })

})