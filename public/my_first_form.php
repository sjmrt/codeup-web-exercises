<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>

	<h1>My First Form!</h1>
	<form method="POST" action="/process-form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="Put your name in it" autofocus>
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="give me your secrets!">
	    </p>
	    <p>
	        <button type="submit">Login</button>
	    </p>
	</form>

    <h2>My First E-mail Form</h2>
    <form>
    <method="POST" action="/process-form.php">
    	<p>
    		<label for="to">To</label>
    		<input id="to" name="to" type="text">
    		<input type="checkbox" id="keepcopy" name="keepcopy" value="yes" checked>
    		<label for="keepcopy">Save a Copy to your Sent folder</label>
    	</p>
    	<p>
    		<label for="from">From</label>
    		<input id="from" name="from" type="text">
    	</p>
    	<p>
    		<label for="subject">Subject</label>
    		<input id="subject" name="subject" type="text">
    	</p>
    	<p>
    		<label for="body">Your Message</label>
    		<textarea id="body" name="body"></textarea>
    	</p>
    	<p>
    		<button type="submit">Send</button>
    	</p>
    </form>

    <h2>Multiple Choice Test</h2>
    <form>
    <method="POST" action="/process-form.php">
    	<p> What's your favorite pet?</p>
    	<label>
    		<input type="radio" name="q1" value="cats">
    		Cats
    	</label>
    	<label>
    		<input type="radio" name="q1" value="small_cats">
    		A smaller cat
    	</label>
    	
    	<p> What's your favorite cat?</p>
    	<label>
    		<input type="radio" name="q2" value="dogs">
    		A Dog
    	</label>
    	<label>
    		<input type="radio" name="q2" value="liger">
    		Liger
    	</label>

  		<p>Which of my cats have you pet?</p>
  		<label><input type="checkbox" id="cat1" name="cat[]" value="max"> Max</label>
  		<label><input type="checkbox" id="cat2" name="cat[]" value="marimba">Marimba</label>
  		<label><input type="checkbox" id="cat3" name="cat[]" value="figaro">Figaro</label>
  		</p>

  		<label for="cat">Which cat/cats is/are your favorite?</label>
  		
  		<select id="cat" name="cat[]" multiple>
  			<option value="1">Marimba</option>
  			<option value="2">Max</option>
  			<option value="3">Asenath</option>
  			<option value="4">Skinny</option>
  		</select>

  		<button type="submit">Get your purr Score</button>   		
  	</form>

  	
  	<form>

  	<method="POST" action="/process-form.php">
  		<p>Who's your Daddy?</p>
  		<label for="daddy">Is he rich like me?</label>
  		<select id="daddy" name="daddy">
  			<option value="1">Yes</option>
  			<option value="0">No</option>
		</select>
  		<button type="submit">Get your Score</button>

  	</form>


</body>
</html>