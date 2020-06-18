var map;
function initMap() {
  var uluru = {lat: 40.44694706, lng: -79.95300293};
  
  var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
  });


  var iconBase =
      'icons/';

  var icons = {
    bicycling: {
      icon: iconBase + 'cycling.png'
    }
  };

  var contentString = '<div id="content">'+
'<div id="siteNotice">'+
'</div>'+
'<h1 id="firstHeading" class="firstHeading">Bicycling Suggestion</h1>'+
'<img src="icons/bicycle.jpeg"></img>' + 
'<div id="bodyContent">'+
'<p><b>Suggestion</b>, A bike lane should be added at this location please. </p>'+
'<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
'</p>'+
'</div>'+
'</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: uluru,
      draggable: true,
      icon: icons['bicycling'].icon,
      map: map,
      title: 'Uluru (Ayers Rock)'
  });
  marker.addListener('click', function() {
      infowindow.open(map, marker);
  });
}