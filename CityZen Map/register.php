<?php
error_reporting(E_ALL);
include("config.php");
session_start();

if ( !isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['verify_password']) ) {
	exit('Please fill both the username and password fields!');
}

$password = "";
if ($_POST['password'] != $_POST['verify_password']){
    exit('Passwords do not match!');
} else {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$username = $_POST['username'];
$email = $_POST['email'];

$sql = "INSERT INTO accounts (username, password, email)
  VALUES (?, ?, ?)";
  // use exec() because no results are returned
  $stmt = $con->prepare($sql);
  $stmt->execute(array($username, $password, $email));

  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  header('Location: home.php');
  exit;

?>