<?php

require_once('functions.php');
session_start();

$message = '';
$username = '';

if(isset($_SESSION['LOGGED_IN_USER'])){
	header("Location: authorized.php");
	die();
}

if(inputHas('username') && inputHas('password')){
	$username = escape(inputGet('username'));
	$password = escape(inputGet('password'));

	if($username == 'sj' && $password =='kitty'){
		$_SESSION['LOGGED_IN_USER'] = $username;
		header("Location: authorized.php");
		die();	
	} else {
		$message = "Please enter a valid username and password";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/login.css">
    <title>POST Example</title>
</head>
<body>
	<div class="container">
	    <form class="form-signin" method="POST">
	    	<h2 class="form-signin-heading">Please sign in</h2>
	        <label>Username</label>
	        <input value="<?= $username ?>" class="form-control" type="text" name="username"><br>
	        <label>Password</label>
	        <input class="form-control" type="password" name="password"><br>
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    </form>
	</div>
 </body>
</html>

