

(function($){

  var Slider = function(){
    var rotation_degrees = 0;
    var current_position = 0;
    var left_arrow = $('.testimonial-arrow-left');
    var right_arrow = $('.testimonial-arrow-right');
    var cube = $('#cube');

    var redraw = function(){
      var size = $('.side').size();
      var side = ['front','left','right'];
      if(current_position<0){
        current_position=size-1;
      }
      current_position = current_position%size;
      /*
      $('.side:eq(0)').addClass('front');
      $('.side:eq(1)').addClass('right');
      $('.side:eq(2)').addClass('left');
      */
      $('.side:not('+current_position+')').removeClass('right left front');
      
      var next = (current_position+1)%size;
      var prev = (current_position-1<0?size-1:current_position-1);

      console.log(prev);
      console.log(current_position);
      console.log(next);
      
      
      $('.side:eq('+current_position+')').addClass(side[current_position]);
      $('.side:eq('+prev+')').addClass(side[prev%3]);
      $('.side:eq('+next+')').addClass(side[next]);
      
    }

    var rotate = function(){
      left_arrow.on('click',function(){
        rotation_degrees -=120;
        current_position -= 1;
        cube.css('transform','rotateY('+rotation_degrees+'deg)');
        
      })
      right_arrow.on('click',function(){
        rotation_degrees +=120;
        current_position +=1;
        cube.css('transform','rotateY('+rotation_degrees+'deg)'); 
        
      })
      cube.on('transitionend',function(){
        redraw();
      })
    }



    return{
      rotate:rotate,
      redraw:redraw
    };

  };

  

  



  $(function() {
    var slider = new Slider();
    slider.redraw();
    slider.rotate();
  })


})(jQuery);


