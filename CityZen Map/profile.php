<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title id = "header" ></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	<!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
</head>

<body>

<div class="jumbotron text-center w-100" style="margin-bottom:0">
	<img id="profilePic" src="#" class="img-fluid rounded" style="height: 300px" alt="Profile Picture">
	<!-- profileName: User's Name at top of page -->
	<h1 id="profileName"></h1>
	<!-- profileID: User's ID-->
	<h4 id="profileID"></h4>
	<!-- profileBio: User's Bio -->
	<p id="profileBio"></p> 
</div>


<!--
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.html">
	<img src="CityZenLogo.png" alt="Logo" style="width:30px;">
  </a>
  <ul class="navbar-nav">
	<li class="nav-item">
	  <a class="nav-link" href="login.html">Login</a>
	</li>
	<li class="nav-item">
	  <a class="nav-link" href="profile.html">Profile</a>
	</li>
	<li class="nav-item">
	  <a class="nav-link" href="about.html">How CityZen Works</a>
	</li>
  </ul>
</nav>
-->


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a class="navbar-brand" href="index.html">Map</a>
	
	<div class="collapse navbar-collapse justify-content-center">
		<ul class="navbar-nav" style="padding-left: 50px;">
			<li class="nav-item">
				<!-- profilePostsCount: Post Count -->
				<a id="profilePostsCount" class="nav-link" style="padding-right: 50px;" href="#"></a>
			</li>
			<li class="nav-item">
				<!-- profileFollowersCount: Followers Count -->
				<a id="profileFollowersCount" class="nav-link" style="padding-right: 50px;" href="#"></a>
			</li>
			<li class="nav-item">
				<!-- profileFollowingCount: Following Count -->
				<a id="profileFollowingCount" class="nav-link" style="padding-right: 50px;" href="#"></a>
			</li>
		</ul>
	</div>
	
	<!--
	<a class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</a>
	-->
	
	<a class="navbar-brand" href="#">Search</a>
</nav>

<div class="container" style="margin-top:30px">
</div>



<script>
	// Set the configuration for your app
	// TODO: Replace with your project's config object
	/*
	var config = {
	apiKey: "apiKey",
	authDomain: "projectId.firebaseapp.com",
	databaseURL: "https://databaseName.firebaseio.com",
	storageBucket: "bucket.appspot.com"
	};
	firebase.initializeApp(config);

	// Get a reference to the database service
	var database = firebase.database();
	*/


	var json = '{"ID": "joco2599", "pic": "PP.jpg", "name": "Joe", "bio": "hi my name is joe what\'s up"}';
	var obj = JSON.parse(json);
	
	var userName = obj.name;
	var userID = obj.ID;
	var userBio = obj.bio;
	var userPic = obj.pic;
	
	document.getElementById("header").innerHTML = userName + "'s Page";
	document.getElementById("profileName").innerHTML = userName;
	document.getElementById("profileID").innerHTML = "@" + userID;
	document.getElementById("profileBio").innerHTML = userBio;
	document.getElementById("profilePic").src = userPic;
	
	var userPostsCount = "3";
	var userFollowersCount = "15";
	var userFollowingCount = "24";
	document.getElementById("profilePostsCount").innerHTML = "Posts: " + userPostsCount;
	document.getElementById("profileFollowersCount").innerHTML = "Followers: " + userFollowersCount;
	document.getElementById("profileFollowingCount").innerHTML = "Following: " + userFollowingCount;
</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
