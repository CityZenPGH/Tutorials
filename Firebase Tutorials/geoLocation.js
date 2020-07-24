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
    // Generate a random Firebase location
    var database = firebase.database().ref().push();

    var iconBase =
            'icons/';

        var icons = {
          bicycling: {
            icon: iconBase + 'cycling.png'
          },
		  tree: {
			icon: iconBase + 'tree.png'
		  },
		  cone: {
			icon: iconBase + 'cone.png'
          },
          light: {
              icon: iconBase + 'light.png'
          }
        };
    
    // Create a new GeoFire instance at the random Firebase location
    var geoFireInstance = new geofire.GeoFire(database);

    var markerIdx = 0;

    function decideIdx(iconIdx){
        markerIdx = iconIdx;
    }

    // Adds a marker to the map.
    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          draggable: true,
          icon: icons[markerIdx].icon,
          map: map
        });
    }

    var showMap = function initMap(latitude, longitude){
        var curLoc = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 17.5, 
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
        });

        var bikelogo = document.getElementById("cycling");
        bikelogo.onclick = function(){
            markerIdx = 'bicycling';
        }

        var treelogo = document.getElementById("tree");
        treelogo.onclick = function(){
            markerIdx = 'tree';
        }

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
            addMarker(event.latLng, map, markerIdx);
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
        // geoFireInstance.set(username, [latitude, longitude]).then(function() {
            
        // });
        // geoFireInstance.get("Katelyn", [latitude, longitude]).then(function() {
        //     log("Got location of " + latitude + ", " + longitude);
        // });

        showMap(latitude, longitude);
    }
    
    // Get the current user's location
    getLocation();
    google.maps.event.addDomListener(window, 'load', initialize);
})();

