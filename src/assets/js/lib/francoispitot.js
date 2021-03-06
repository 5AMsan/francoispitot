import $ from 'jquery';

// $.ajax({
//   dataType: 'jsonp',
//   url: 'https://api.github.com/repos/olefredrik/foundationpress?callback=foundationpressGithub&access_token=ed6229228dbc763038dbf1e68d0d8a4a0935b38a',
//   success: function (response) {
//     if (response && response.data.watchers) {
//       var watchers = (Math.round((response.data.watchers / 100), 10) / 10).toFixed(1);
//       $('#stargazers a').html(watchers + 'k stargazers');
//     }
//   }
// });

if ( $('.orbit-slide').length > 1 ) {
  var nextImage, prevImage, nextClone, prevClone,
      duration = 1000,
      delay = .85;
  positionNextImage();

  $('.orbit').on('slidechange.zf.orbit', function(e) {
    positionPrevImage();
    positionNextImage();
  });
}

function positionNextImage() {
  if (nextClone) {
    nextClone.fadeOut(duration, function(){$(this).remove();})
  }

  nextImage = $('.orbit-slide.is-active').next('.orbit-slide').length > 0 ?
              $('.orbit-slide.is-active').next('.orbit-slide').find('img.orbit-image') :
              $('.orbit-container .orbit-slide:first-of-type img.orbit-image');

  nextClone = nextImage.clone();
  nextClone.appendTo('.orbit-container').hide().css({
    'position': 'absolute',
    'top': '0px',
    'right': '0px',
    'transform': 'translateX(80%)'
  })
  .addClass('show-for-large')
  .delay(duration * delay)
  .fadeIn(duration);
}

function positionPrevImage() {
  if (prevClone) {
    prevClone.fadeOut(duration, function(){$(this).remove();})
  }

  prevImage = $('.orbit-slide.is-active').prev('.orbit-slide').length > 0 ?
              $('.orbit-slide.is-active').prev('.orbit-slide').find('img.orbit-image') :
              $('.orbit-container .orbit-slide:last-of-type img.orbit-image');

  prevClone = prevImage.clone();
  prevClone.prependTo('.orbit-container').hide().css({
    'position': 'absolute',
    'top': '0px',
    'left': '0px',
    'transform': 'translateX(-80%)'
  })
  .addClass('show-for-large')
  .delay(duration * delay)
  .fadeIn(duration);

  // hide description
  $('.gallery-caption:not(.hide-for-large)')
  .delay(duration * delay)
  .fadeOut(duration, function(){$(this).remove();});
}

//function getNextImage() {

//}
