$(document).ready(function(){
    if( !mobilecheck() ){
        $('#fullpage').fullpage({
            lockAnchors: true,
            autoScrolling:true,
            scrollHorizontally: true,
            slidesNavigation: true,
            navigation: true,
            navigationPosition: 'left',
            slidesNavPosition: 'right',
            onLeave: function(element, nextIndex, direction){
                var $arrSections = $('#fullpage_section_two .section');
                var $title = ($arrSections.eq(nextIndex.index).find('.section__title'));
                var $description = ($arrSections.eq(nextIndex.index).find('.section__description'));
                var $anchor = ($arrSections.eq(nextIndex.index).find('.section__anchor'));

                var $old_title = ($arrSections.eq(element.index).find('.section__title'));
                var $old_description = ($arrSections.eq(element.index).find('.section__description'));
                var $old_anchor = ($arrSections.eq(element.index).find('.section__anchor'));
                if(direction == 'down') {
                    TweenMax.to($arrSections.eq(element.index) , .6, { display: 'none', autoAlpha: 0, ease: Power3.easeInOut });
                    TweenMax.to($old_title ,       1, { opacity: 0, y:  20 });
                    TweenMax.to($old_description , 1, { opacity: 0, y:  80 });
                    TweenMax.to($old_anchor,       1, { opacity: 0, y: 120 });

                    TweenMax.to($arrSections.eq(nextIndex.index) , 1, { autoAlpha: 1, display: 'block', ease: Power3.easeInOut });
                    TweenMax.fromTo($title ,       1, { opacity: 0, y: -120 }, { opacity: 1, y: 0 });
                    TweenMax.fromTo($description , 1, { opacity: 0, y:  -80 }, { opacity: 1, y: 0 });
                    TweenMax.fromTo($anchor,       1, { opacity: 0, y:  -40 }, { opacity: 1, y: 0 });
                    
                } else {
                    
                    TweenMax.to($arrSections.eq(element.index) , .6, { autoAlpha: 0, display: 'none', ease: Power3.easeInOut });
                    TweenMax.to($old_title ,       1, { opacity: 0, y: -120 });
                    TweenMax.to($old_description , 1, { opacity: 0, y:  -80 });
                    TweenMax.to($old_anchor,       1, { opacity: 0, y:  -20 });

                    TweenMax.to($arrSections.eq(nextIndex.index) , 1, { autoAlpha: 1, display: 'block', ease: Power3.easeInOut });
                    TweenMax.fromTo($title ,       1, { opacity: 0, y:  20 }, { opacity: 1, y: 0 });
                    TweenMax.fromTo($description , 1, { opacity: 0, y:  80 }, { opacity: 1, y: 0 });
                    TweenMax.fromTo($anchor,       1, { opacity: 0, y: 120 }, { opacity: 1, y: 0 });
                }
            },
            afterRender: function(param) {
                console.log('afterender');
                $('#fullpage .section').each(function(index, item){
                    $('#fp-nav ul li span.fp-sr-only').eq(index).text( $(item).attr('data-title') );
                })
                TweenMax.fromTo($('#fullpage_section_two .section').eq(0) , .4, { autoAlpha: 0,display:'none', top: '-100vh' }, { top: '0',display:'block', autoAlpha: 1 })
                $('#fp-nav').prepend('<h2>'+ $('.main__title').text() +'</h2>');
            }
        });
    }else{
        $("#fullpage .section").each(function(index){
            $(this).after( "<div class='section-description'>"+ $("#fullpage_section_two .section").eq(index).html()  + "</div>" );
        })
        $("#fullpage_section_two .section").remove();
    }

});