<?php
error_reporting(E_ALL);
include("config.php");
session_start();

if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->execute(array($_POST['username']));
    if ($stmt->rowCount() > 0) {
	$res = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['password'], $res['password'])) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: home.php');
            exit;
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }
}


?>
