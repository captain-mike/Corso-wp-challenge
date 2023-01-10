$(() => {

    $('.accordion-title').on('click',function(){
       
        $(this).parent().toggleClass('open')
        
    })

})