

(function($){

  var Slider = function(){
    var rotation_degrees = 0;
    var left_arrow = $('.testimonial-arrow-left');
    var right_arrow = $('.testimonial-arrow-right');
    var cube = $('#cube');

    var rotate = function(){
      left_arrow.on('click',function(){
        rotation_degrees -=90;
        cube.css('transform','rotateY('+rotation_degrees+'deg)'); 
      })
      right_arrow.on('click',function(){
        rotation_degrees +=90;
        cube.css('transform','rotateY('+rotation_degrees+'deg)'); 
      })
    }

    return{
      rotate:rotate
    };

  };


  
  var InitialTransformations = function(){
    var columns_played = false;
    var cube_played = false;
    var bagua_played = false;
    
    $(window).scroll(function(){
      if($('.home-section-columns-left').isOnScreen() && columns_played === false){
        columns_played = true;
        $('.home-section-columns').addClass('home-section-play');
      }

      if($('#cube').isOnScreen() && cube_played === false){
        cube_played = true;
        $('#cube').addClass('cube_play');
      }

      if($('.bagua').isOnScreen() && bagua_played === false){
        bagua_played = true;
        $('.bagua').addClass('bagua_play');
      }
    });
  };

  function resizeDiv() {
    vpw = $(window).width();
    vph = $(window).height();
    $('.home-landing').css({height: vph + 'px'});
  }

  window.onresize = function(event) {
    resizeDiv();
  }

  
  



  $(function() {
    var slider = new Slider();
    slider.rotate();

    var it = InitialTransformations();
  })


})(jQuery);


jQuery.fn.isOnScreen = function(){
    var element = this.get(0);
    var bounds = element.getBoundingClientRect();
    return bounds.top < window.innerHeight && bounds.bottom > 0;
}


