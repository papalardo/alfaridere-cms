$(document).foundation()

const mobileCheck = function() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};



var getNonZeroRandomNumber = function(){
    var random = Math.floor(Math.random()*100);
    if(random==0|| random > 30) return getNonZeroRandomNumber();
    return random;
}
var randGrid = function(){
    TweenMax.set( $('.grid-wrap .grid-item'), { autoAlpha: 0 } );

    $('.grid-wrap .grid-item').each(function(){ 
        $(this).css('background', 'rgba(255,255,255,.'+ getNonZeroRandomNumber() +')'); 
    });
    var gridItem = $('.grid-wrap .grid-item').toArray();
    gridItem.sort( function() { return 0.5-Math.random() });
    TweenMax.staggerTo(gridItem, 1.5, { autoAlpha: .5, ease: Power1.easeInOut, repeat:-1, yoyo: true }, .3);
}
var $carousel = $('.carousel').flickity({
    loop: false,
    margin: 0,
    prevNextButtons:false,
    draggable: true,
    autoPlay: 5000,
    selectedAttraction: 0.01,
    friction: 0.15,
    on: { 
        ready: function(  ) {
            TweenMax.to( $('.parallax__layer__cell', $background ), .3,  { autoAlpha: 0 } );
            TweenMax.to( $('.parallax__layer__cell', $background ).eq(0), .3, { autoAlpha: 1 } );

            TweenMax.to( $('.carousel .carousel-cell'), .2,  { autoAlpha: 0 } );
            TweenMax.to( $('.carousel .carousel-cell.is-selected'), .4,  { autoAlpha: 1 } );
            
            $('.grid-wrap').css('height', $('.carousel-cell').height());
            if($('#home .carousel .carousel-cell').length == 1 ) { 
              $('#home .flickity-page-dots').hide();
            }
            
            randGrid();
        },
        change: function(index) {
            TweenMax.to( $('.carousel .carousel-cell'), .2,  { autoAlpha: 0 } );
            TweenMax.to( $('.carousel .carousel-cell.is-selected'), .4,  { autoAlpha: 1 } );

            TweenMax.to( $('.parallax__layer__cell', $background ), .3,  { autoAlpha: 0 } );
            TweenMax.to( $('.parallax__layer__cell', $background ).eq(index), .3, { autoAlpha: 1 } );
            randGrid();
        }
    }
});
var $background = $('.parallax__layer--bg');
var cellRatio = 1; // outerWidth of cell / width of carousel
var bgRatio = 1.1; // width of background layer / width of carousel
var fgRatio = 1; // width of foreground layer / width of carousel

if( $carousel.length){
  var flkty = $carousel.data('flickity');
  var count = flkty.slides.length - 1;
  
  $carousel.on( 'scroll.flickity', function( event, progress ) {
    moveParallaxLayer( $background, bgRatio, progress );
  });
  $carousel.flickity('reposition');
  function moveParallaxLayer( $layer, layerRatio, progress ) {
    var ratio = cellRatio * layerRatio;
    $layer.css({
      left: ( 0.56 - ( 0.5 + progress * count ) * ratio ) * 100 + '%'
    });
  }
}

  // get transform property

/***
 * TESTIMONIALS 
 * **/
$('.carousel-testimonials').flickity({
    prevNextButtons:false,
    autoPlay: 4000,
    selectedAttraction: 0.01,
    friction: 0.15,
});

/***
 * Slider Footer
 * **/
$carousel = $('.slider-footer-carousel').flickity({
    groupCells: mobileCheck() ? 1 : 4,
    prevNextButtons: false,
    pageDots: false,
    cellAlign: 'left',
    selectedAttraction: 0.01,
    friction: 0.15,
});

$('#slider-footer .button.prev').on('click', function() {
  $carousel.flickity( 'previous' )
})

$('#slider-footer .button.next').on('click', function() {
  $carousel.flickity( 'next' )
})
if($('#team').length) { 
    $('#team .photo_container').magnificPopup({ type:'image' })
}
if($("#slider-footer").length) { 
    $('.slider-footer-carousel .carousel-cell').magnificPopup({
      type:'image',
      gallery: {
        enabled: true
      },
    });
}

/****************/
/* KIDS **********/
/****************/
var $svgList = $("#kids .elements svg path, #kids .elements svg rect");
TweenMax.staggerTo($svgList, 2, { autoAlpha: 0,  ease: Power1.easeInOut, repeat:-1, yoyo: true }, .5);
var $svgList = $("#kids .elements-svg-bottom svg path, #kids .elements-svg-bottom svg rect ");
TweenMax.staggerTo($svgList, 2, { autoAlpha: 0, scale: .9,  ease: Power1.easeInOut, repeat:-1, yoyo: true }, .2);



/****************/
/* NAV SCROLLTO */
/****************/
$(".scrollto").click(function(e) {
    e.preventDefault();
    var offset = -75;
    var $this = $(this).attr('href');
    if( typeof $this != 'undefined' && $this.length > 1 && $($this).offset() ){
        var top = $($this).offset().top + offset;
        if(top){ 
            TweenMax.to(window, 1, {
                scrollTo: top,
                ease: Power3.easeInOut
            });
        }
    }
});

/*********/
/* MÁSCARAS */
/*********/
if( $("input[name='phone']").length )  {
  $("input[name='phone']").mask("(99) 99999-999#");
}

window.mobilecheck = function() {
  var check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};

/****************/
/* NAV SCROLLTO */
/****************/
if( !mobilecheck() ){ 
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 100) { $("header").addClass("small__header"); }else{ $("header").removeClass("small__header");  }
  }); 
}
if( mobilecheck() ){ 
  $('.header__bar ul li a.tab').on('click', function(e){
    e.preventDefault();
    if(!$(this).find('span').hasClass('active-open')) { 
      $('.header__bar ul li a span').removeClass('active-open');
      $(this).find('span').addClass('active-open');
    }else{ 
      $('.header__bar ul li a span').removeClass('active-open');
    }
  });
}
$('.openMenu').on('click', function(e){
  e.preventDefault();
  $('.header__sub').toggleClass('active');
  // TweenMax.set($('.header__sub nav'), { 'display' : 'flex' });
  // TweenMax.to($('.header__sub nav'), .4, { ''': 0 });
  
})
/*********/
/* LOADING FORM BUTTONS */
/*********/
window.loadingButton = function( element, state){        
    var defaultState = $('.button span', element), 
        beenLoading =  $('.button span.loading', element);
    if (state) { defaultState.hide(); beenLoading.show(); }
    if (!state) { defaultState.show(); beenLoading.hide(); }
}

$(document).ready(function(){
    if(window.location.hash) {
        if(window.location.hash == "#preagendamento") { 
            // var top = $('#preagendamento').offset().top - 150;
            // if(top){ 
                // TweenMax.to(window, 1, {
                //     scrollTo: top,
                //     ease: Power3.easeInOut
                // });
                // setTimeout(() => {
                    $('html, body').animate({
                        scrollTop: ($('#preagendamento').offset().top - 150)
                    },500);
                // }, 1000);
            // }
        }
    } 
})