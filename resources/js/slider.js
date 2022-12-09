window.addEventListener('load',function() {
    new Glider(document.querySelector('.carrusel__lista'),{
     slidesToShow: 1,
     slidesToScroll: 1,
     dots: '.carrusel__indicadores',
     arrows: {
       prev: '.carrusel__anterior',
       next: '.carrusel__siguiente'
     }
    }); 
 });