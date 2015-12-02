<?php

require_once('functions.php');
require_once('../../Auth.php');
require_once('../../Input.php');

session_start();

$message = '';
$username = '';

if(Auth::check()){
	header("Location: authorized.php");
	die();
}

if((Input::get('username')) && Input::get('password')){
	$log = new Log();

	if(Auth::attempt(inputGet('username'), inputGet('password')) == true){
		$log->info('User ' . $username . ' logged in.');
		header("Location: authorized.php");
		die();	
	}
		$log->error('User ' . $username . ' failed to log in!');
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

