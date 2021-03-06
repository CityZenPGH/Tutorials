<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    
    <title>CityZen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 600px;  /* The height is 400 pixels */
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  </style>
    

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase-database.js"></script>

    <!-- GeoFire -->
    <script src="https://cdn.firebase.com/libs/geofire/5.0.1/geofire.min.js"></script>
    <script src="geoLocation.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">
          <img src="CityZenLogo.png" alt="Logo" style="width:30px;">
        </a>
        <ul class="navbar-nav">
        <?php if(!isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php } ?>
        <?php if(!isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Register</a>
          </li>
        <?php } ?>
        <?php if(isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['username']; ?>'s Profile</a>
          </li>
          <?php } ?>
          <?php if(isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <?php } ?>
  
          <li class="nav-item">
            <a class="nav-link" href="about.php">How CityZen Works</a>
          </li>

        </ul>
      </nav>
    </div>
    <div id="map"></div>
    <div>
        <a id="cycling" onclick="decideIdx('bike');"><img src="icons/bike.png" alt="Logo" style="width:50px;"></a>
    
        <a id="tree" onclick="decideIdx('tree');"><img src="icons/tree.png" alt="Logo" style="width:50px;"></a>

        <a id="traffic" onclick="decideIdx('traffic');"><img src="icons/traffic-light.png" alt="Logo" style="width:50px;"></a>

        <a id="station" onclick="decideIdx('station');"><img src="icons/station.png" alt="Logo" style="width:50px;"></a>

        <a id="parking" onclick="decideIdx('parking');"><img src="icons/parking.png" alt="Logo" style="width:50px;"></a>

        <a id="pedestrians" onclick="decideIdx('pedestrians');"><img src="icons/walk.png" alt="Logo" style="width:50px;"></a>

        <a id="other" onclick="decideIdx('other');"><img src="icons/more.png" alt="Logo" style="width:50px;"></a>
  
    </div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzSHHJ_u3vD2R2_CX3013GAl-8rYE58r0&callback=initMap">
    </script>
  </body>
</html>