// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

function initMap() {
  var myLatLng = {lat: 20.643749, lng: -98.990902};

  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 12,
    mapTypeControl: true,
    scrollwheel: false,
    draggable: false
  });
  var infoWindow = new google.maps.InfoWindow({map: map});

var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',
    icon: 'http://google-maps-icons.googlecode.com/files/park.png'
  });

}


