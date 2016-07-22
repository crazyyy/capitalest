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

/** google maps */
function init_map() {
  var myOptions = {
    zoom: 10,
    center: new google.maps.LatLng(55.755826, 37.6173),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
  marker = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(55.755826, 37.6173)
  });
  infowindow = new google.maps.InfoWindow({
    content: '<strong>google-map</strong><br>Moscow, Russia<br>'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map, marker);
  });
  infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', init_map);

/** add scroll anima */
$(document).ready(function() {
  $('#fullpage').fullpage({
    css3: true,
    anchors:['page-1', 'page-2', 'page-3', 'page-4', 'page-5', 'page-6', 'page-7', 'page-8', 'page-9'],
    navigationTooltips:['Секция 1','Секция 2','Секция 3','Секция 4','Секция 5','Секция 6', 'Секция 7','Секция 8','Секция 9'],
    navigation:true
  });
});
