import $ from 'jquery';


jQuery('.orbit').on('beforeslidechange.zf.orbit', function(){
  console.log('in');
  var nextImage = jQuery('.orbit-slide.is-active + .orbit-slide img.orbit-image'),
      orbit = jQuery('.orbit');
  nextImage.css({
    position: 'absolute',
    right: '-30%',
    top: nextImage.position().top - orbit.position().top
  });
});

