// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.

// when window size changed - resize first block
window.addEventListener('resize', setWindowSize);

var headerEl = $('header');
var blockAbout = $('.block-about');
var blockPage1 = $('.block-page-1');
var blockPage2 = $('.block-page-2');
var blockPage3 = $('.block-page-3');
var blockHowWork = $('.block-how-work');
var blockResults = $('.block-results');
var footerFirstBlock = $('.footer-first-block');
var footerContainerSecond = $('.footer-container-second');
var footerContainerThird = $('.footer-container-third');

function setWindowSize() {
  if (typeof(window.innerWidth) == 'number') {
    window.myWidth = window.innerWidth;
    window.myHeight = window.innerHeight;
    if ( window.myHeight > 650 && window.myWidth > 992) {
      setheight(myHeight);
    }
  } else {
    if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
      window.myWidth = document.documentElement.clientWidth;
      window.myHeight = document.documentElement.clientHeight;
      if ( window.myHeight > 650 && window.myWidth > 992) {
        setheight(myHeight);
      }
    } else {
      if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        window.myWidth = document.body.clientWidth;
        window.myHeight = document.body.clientHeight;
        if ( window.myHeight > 650 && window.myWidth > 992) {
          setheight(myHeight);
        }
      }
    }
  }
}

document.addEventListener("DOMContentLoaded", function(event) {
  setWindowSize();
});

function setheight(height) {
  $(headerEl).height(height);
  $(blockAbout).height(height);
  $(blockPage1).height(height);
  $(blockPage2).height(height);
  $(blockPage3).height(height);
  $(blockHowWork).height(height);
  $(blockResults).height(height);
  $(footerFirstBlock).height(height);
  $(footerContainerSecond).height(height);
  $(footerContainerThird).height(height);
}

/** page scroll */
$(document).keydown(function(e) {
  // if DOWN pressed
  if (e.keyCode == '40' || e.keyCode == '32') {
    console.log('down')
      // if UP pressed
  } else if (e.keyCode == '38') {
    console.log('up')
  }
});

$(window).bind('mousewheel', function(event) {
  if (event.originalEvent.wheelDelta >= 0) {
    console.log('up')
  } else {
    console.log('down');
    // scrollDown();
  }
});

$(document).ready(function() {
  $('html,body').animate({scrollTop:0},800);
  document.body.scrollTop = document.documentElement.scrollTop = 0;
});

function scrollDown() {
  var currentID = $('.current-slide').attr('current-slide');
  if ( currentID == 9 ) {
    console.log('last slide')
  } else {

    $('.current-slide').removeClass('current-slide');
    var nextID = currentID + 1;
    var $nextElement = $( "[data-slide=' +" + nextID + "']" );
    $nextElement.addClass('current-slide')

    var nextElementTop = $nextElement.position().top;
    $(window).scrollTop(nextElementTop);


    }

}


