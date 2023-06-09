$(document).ready(function(){
    if ($(".responsive").length) {
      $('.responsive').slick({
         dots: true,
         speed: 300,
         slidesToShow: 3,
         slidesToScroll: 3,
         responsive: [{
            breakpoint: 1000,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 2
            }
         }, {
            breakpoint: 770,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }]
      });
     }

     if ($(".single").length) {
      $('.single').slick({
         infite:true,
         slidesToShow: 1,
         adaptiveHeight: true
      });
     }
     
     if ($(".autoplay").length) {
      $('.autoplay').slick({
         arrows:false,
         slidesToShow: 3,
         slidesToScroll: 1,
         autoplay: true,
         autoplaySpeed: 2000,
      });
     }


     const urlParams = new URLSearchParams(window.location.search);
     const myParam = urlParams.get('pg');
     console.log(myParam)

     if (myParam == 1) {
        let el = document.getElementById('home');

        el.style.cssText = 'color: white;';
     } if(myParam == 2){
      let el = document.getElementById('prod');

        el.style.cssText = "color: white;";
     } if(myParam == 3){
      let el = document.getElementById('sup');

        el.style.cssText = "color: white;";
     } if(myParam == 4){
      let el = document.getElementById('sob');
      
        el.style.cssText = "color: white;";
     }

  });