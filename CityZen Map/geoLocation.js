(function(){
    var firebaseConfig = {
        apiKey: "AIzaSyCzSHHJ_u3vD2R2_CX3013GAl-8rYE58r0",
        authDomain: "cityzen-280417.firebaseapp.com",
        databaseURL: "https://cityzen-280417.firebaseio.com",
        projectId: "cityzen-280417",
        storageBucket: "cityzen-280417.appspot.com",
        messagingSenderId: "618311008905",
        appId: "1:618311008905:web:a77b2048f7ec8c25e4bc58",
        measurementId: "G-7PWPK9YNFN"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    var database = firebase.database();
    var iconBase ='icons/';
    data = {type: null, location: null};
    var icons = {
          bicycling: {
            icon: iconBase + 'bike_map.png'
          },
		  tree: {
			icon: iconBase + 'tree_map.png'
		  },
		  traffic: {
			icon: iconBase + 'traffic-light_map.png'
          },
          station: {
              icon: iconBase + 'station_map.png'
          },
          parking: {
              icon: iconBase + 'parking_map.png'
          },
          pedestrians: {
              icon: iconBase + 'walk_map.png'
          },
          other: {
              icon: iconBase + 'more_map.png'
          }
        };

    function writeUserData(markerType, location, count){
        count += 1
        firebase.database().ref('count/' + count).set({
            type: markerType,
            location:location
        });
    }
    var markerIdx = null;
    counter = 0;
    // Adds a marker to the map.
    function addMarker(location, map) {
        
        //@Olivia put the form stuff in the the function here?
        var contentString = '<div class="card-body">'+
        '<h3>'+'Make a Suggestion'+'</h3'+
        '<form>'+
            '<div class="input-group form-group">'+
                '<div class="input-group-prepend">'+
                    '<span class="input-group-text"><i class="fas fa-user"></i></span>'+
                '</div>'+
                '<input type="text" name="username" id="username" class="form-control" placeholder="username">'+
                
            '</div>'+
            '<div class="input-group form-group">'+
                '<div class="input-group-prepend">'+
                    '<span class="input-group-text"><i class="fas fa-key"></i></span>'+
                '</div>'+
                '<input type="password" name="password" id="password" class="form-control" placeholder="password">'+
            '</div>'+
            '<div class="form-group">'+
                '<input type="submit" value="Login" class="btn float-right login_btn">'+
            '</div>'+
        '</form>'+
    '</div>'

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
    
        var marker = new google.maps.Marker({
          position: location,
          draggable: true,
          icon: icons[markerIdx].icon,
          map: map
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        
        infowindow.open(map, marker);
    }

    var showMap = function initMap(latitude, longitude){
        var curLoc = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 15, 
            center: curLoc,
            styles: [{
                featureType: 'poi',
                stylers: [{ visibility: 'off' }]  // Turn off POI.
            },
            {
                featureType: 'transit.station',
                stylers: [{ visibility: 'off' }]  // Turn off bus, train stations etc.
            }],
            disableDoubleClickZoom: true,
            streetViewControl: false,
            mapTypeControl: false,
            fullScreenControl: false,
            scaleControl: false
        });

        var bikelogo = document.getElementById("cycling");
        bikelogo.onclick = function(){
            markerIdx = 'bicycling';
        }

        var treelogo = document.getElementById("tree");
        treelogo.onclick = function(){
            markerIdx = 'tree';
        }


        var bikelogo = document.getElementById("traffic");
        bikelogo.onclick = function(){
            markerIdx = 'traffic';
        }

        var treelogo = document.getElementById("station");
        treelogo.onclick = function(){
            markerIdx = 'station';
        }


        var bikelogo = document.getElementById("parking");
        bikelogo.onclick = function(){
            markerIdx = 'parking';
        }

        var treelogo = document.getElementById("pedestrians");
        treelogo.onclick = function(){
            markerIdx = 'pedestrians';
        }


        var bikelogo = document.getElementById("other");
        bikelogo.onclick = function(){
            markerIdx = 'other';
        }
  

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
            // alert(event.latLng);
            data.type = markerIdx;
            data.location = event.latLng;
            addMarker(event.latLng, map, markerIdx);
            var clicks = firebase.database.ref('markers').push(data);
        });

    }
    
    /* Uses the HTML5 geolocation API to get the current user's location */
    var getLocation = function() {
        if (typeof navigator !== "undefined" && typeof navigator.geolocation !== "undefined") {
        navigator.geolocation.getCurrentPosition(geolocationCallback);
        } else {
        log("Your browser does not support the HTML5 Geolocation API, so this demo will not work.")
        }
    };
    
    /* Callback method from the geolocation API which receives the current user's location */
    var geolocationCallback = function(location) {
        var latitude = location.coords.latitude;
        var longitude = location.coords.longitude;
        // geoFireInstance.get("Katelyn", [latitude, longitude]).then(function() {
        //     log("Got location of " + latitude + ", " + longitude);
        // });

        showMap(latitude, longitude);
    }
    
    // Get the current user's location
    getLocation();
    google.maps.event.addDomListener(window, 'load', initialize);
})();