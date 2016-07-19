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

function setWindowSize() {
  if (typeof(window.innerWidth) == 'number') {
    window.myWidth = window.innerWidth;
    window.myHeight = window.innerHeight;
    if (window.myHeight > 650 && window.myWidth > 992) {
      setheight(myHeight);
    }
  } else {
    if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
      window.myWidth = document.documentElement.clientWidth;
      window.myHeight = document.documentElement.clientHeight;
      if (window.myHeight > 650 && window.myWidth > 992) {
        setheight(myHeight);
      }
    } else {
      if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        window.myWidth = document.body.clientWidth;
        window.myHeight = document.body.clientHeight;
        if (window.myHeight > 650 && window.myWidth > 992) {
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
  $('.section').each(function(height) {
    $(this).height(height);
  });
}
