<?php
error_reporting(E_ALL);
include("config.php");

if ( !isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['verify_password']) ) {
	exit('Please fill both the username and password fields!');
}

$password = "";
if ($_POST['password'] != $_POST['verify_password']){
    exit('Passwords do not match!');
} else {
    $password = $_POST['password'];
}

// Define variables and initialize with empty values
$username = $_POST['username'];
$query = $con->prepare("INSERT INTO accounts(username, password) VALUES (:username, :password)");      

?>