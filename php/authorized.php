<?php
require_once('functions.php');
require_once('../../Auth.php');
require_once('../../Input.php');

session_start();

if(!isset($_SESSION['LOGGED_IN_USER'])){
	header("Location: post.php");
	die();
} 

$username = $_SESSION['LOGGED_IN_USER'];
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<title>AUTHORIZED</title>
</head>
<body>
	<h1><a href="post.php"> AUTHORIZED, Welcome Captain  <?= $username; ?> </a></h1>

	<a href="logout.php" class="btn btn-danger"> Logout </a>

</body>
</html>