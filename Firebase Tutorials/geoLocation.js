(function(){
    var firebaseConfig = {
        apiKey: "AIzaSyBvGmQSKkJ4g7kmsHggOhCKK5Rz6juzBs0",
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
    
    // Create a new GeoFire instance at the random Firebase location
    var geoFireInstance = new geofire.GeoFire(database);

    var showMap = function initMap(latitude, longitude){
        var curLoc = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 17, center: curLoc});
        var marker = new google.maps.Marker({position: curLoc, map: map});
    }
    
    /* Uses the HTML5 geolocation API to get the current user's location */
    var getLocation = function() {
        if (typeof navigator !== "undefined" && typeof navigator.geolocation !== "undefined") {
        log("Asking user to get their location");
        navigator.geolocation.getCurrentPosition(geolocationCallback);
        } else {
        log("Your browser does not support the HTML5 Geolocation API, so this demo will not work.")
        }
    };
    
    /* Callback method from the geolocation API which receives the current user's location */
    var geolocationCallback = function(location) {
        var latitude = location.coords.latitude;
        var longitude = location.coords.longitude;
        log("Retrieved user's location: [" + latitude + ", " + longitude + "]");
        var username = "Katelyn";
        geoFireInstance.set(username, [latitude, longitude]).then(function() {
        log("Current user " + username + "'s location has been added to GeoFire");
        });

        geoFireInstance.get("Katelyn", [latitude, longitude]).then(function() {
            log("Got location of " + latitude + ", " + longitude);
        });

        showMap(latitude, longitude);
    }
    
    // Get the current user's location
    getLocation();

    /*************/
    /*  HELPERS  */
    /*************/
    /* Logs to the page instead of the console */
    function log(message) {
        var childDiv = document.createElement("div");
        var textNode = document.createTextNode(message);
        childDiv.appendChild(textNode);
        document.getElementById("log").appendChild(childDiv);
    };
})();

