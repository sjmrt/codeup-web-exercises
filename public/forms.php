<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title> Forging Four Forms</title>
	</head>

	<body>
	<main>

		<h1>GET</h1>
		<?php var_dump($_GET); ?>

		<h1>POST</h1>
		<?php var_dump($_POST); ?>

		<hr>
		
		<h2>&nbsp;          Search</h2>
		<form method="GET" action="/forms.php">
			<p>
	    	    <input id="search" name="search" type="text" autofocus>
	        	<button type="submit">Search</button>
	    	</p>
		</form>
		<hr>

		<h2>Log in</h2>
		<form method="POST" action="/forms.php">

			<p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text">
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password">
		    </p>
		    <p>
		        <button type="submit">Login</button>
		    </p>
		</form>
		<hr>

		<h2>Sign-up</h2>
		<form method="POST" action="/forms.php">
			<p>
		        <label for="name">Name</label>
		        <input id="name" name="name" type="text">
		    </p>
		    <p>
		        <label for="email">e-mail</label>
		        <input id="email" name="email" type="text">
		    </p>
		    <p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text">
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password">
		    </p>
		    <p>
		        <button type="submit">Sign Up</button>
		    </p>
		</form>
		<hr>

		<h2>Contact Me</h2>
		<form method="POST" action="/forms.php">
			<p>
		        <label for="from">Your email</label>
		        <input id="from" name="from" type="text">
		    </p>
		        <p>
		        <label for="subject">Subject</label>
		        <input id="subject" name="subject" type="text">
		    </p>
		        <p>
		        <label for="body">Your Message</label>
		        <input id="body" name="body" type="text">
		    </p>
		    <p>
		        <button type="submit">Submit</button>
		    </p>
		</form>

	</main>
</body>
</html>