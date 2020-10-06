$(document).ready(function(){
  
    if(window.location.hash) {
        if($(".section__anchor[href='"+ window.location.hash +"']").length){
            setTimeout(function(){
                $(".section__anchor[href='"+ window.location.hash +"']").click();
            },1000)
        }
    }
    /**MODAL**/
    $(document).on('click', '.section__anchor' , function(e) {
        e.preventDefault();
        var hash = $(this).attr('href');
        const modal = $('.modal__element'+$(this).attr('href'));
        if( modal.length ) { 
            const modalFigure = $('.modal__figure', modal);
            const modalElement = $(modal, '.modal__element');
            const modalBody = $('.modal__body', modal);

            TweenMax.set([modalFigure,modalBody], { opacity:0 });
            var tl = new TimelineMax();
            tl.to(modalElement, 1, { left: '0', ease: Power3.easeInOut })
                .fromTo(modalFigure, .5, { opacity: 0, left: '50vw' },{ opacity: 1, left: '0', ease: Power3.easeInOut}, '=-.6')
                .fromTo(modalBody, .5, { opacity: 0, left: '10vw' },{ opacity: 1, left: '0', ease: Power3.easeInOut}, '=-.4');
        } 
    });
    $('.close__modal').on('click', function(e) {
        e.preventDefault();
        TweenMax.to($('.modal__element'), .8, { left: '100vw', ease: Power3.easeInOut });
    })
});
    
