<?php

require '../../php/park_config.php';
require '../../php/db_connect.php';

$selectAll = 'SELECT * FROM national_parks';

$stmt = $dbc->query($selectAll);

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
	<h2>National Parks</h2>

	<table>
		<tr>
			<th>Park Name</th>
			<th>Location</th>
			<th>Area in Acres</th>
			<th>Date Established</th>
		</tr>
	<?php 
		foreach($parks as $park): ?>
			<tr>
				<th><?= $park['name'] ?></th>
				<th><?= $park['location'] ?></th>
				<th><?= $park['area_in_acres'] ?></th>
				<th><?= $park['date_established'] ?></th>
			</tr>
		<?php endforeach ?> 
	</table>

</body>
</html>