<?php

require '../../php/park_config.php';
require '../../php/db_connect.php';
require '../../Input.php';

$limit    = 4;
$pageID   = Input::has('page') ? Input::get('page') : 1;
$offset   = $limit * $pageID - $limit;

$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->execute();

$count    = $dbc->query('SELECT COUNT(*) FROM national_parks;')->fetchColumn();
$parks    = $stmt->fetchAll(PDO::FETCH_ASSOC);
$numPages = ceil($count / $limit);
$next     = $pageID + 1;
$previous = $pageID -1;

$newPark = [];

$errorMessage = "Add a Park!";

if(!empty($_POST))
{
	if (Input::notEmpty('name') &&
		Input::notEmpty('url') && 
		Input::notEmpty('location') && 
		Input::notEmpty('date_established') && 
		Input::notEmpty('area_in_acres') && 
		Input::notEmpty('description')
	){
		$newPark = $dbc->prepare("INSERT INTO national_parks(name, url, location, date_established, area_in_acres, description) 
		VALUES(:name, :url, :location, :date_established, :area_in_acres, :description)");
	    $newPark->bindValue(':name', Input::get('name'), PDO::PARAM_STR);
	    $newPark->bindValue(':url', Input::get('url'), PDO::PARAM_STR);
	    $newPark->bindValue(':location', Input::get('location'), PDO::PARAM_STR);
	    $newPark->bindValue(':date_established', Input::get('date_established'), PDO::PARAM_STR);
	    $newPark->bindValue(':area_in_acres', Input::get('area_in_acres'), PDO::PARAM_STR);
	    $newPark->bindValue(':description', Input::get('description'), PDO::PARAM_STR);
	    $newPark->execute();
	}else{
		$errorMessage = 'To add a park please input all fields!';
	}
}

$del = "DELETE FROM `national_parks` WHERE `id` = :id_to_delete";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>National Parks</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css"> .container {width: 700px; margin: auto;}</style>
</head>
<body>

<div class="container">
	<h2>National Parks</h2>
    <table class="table table-striped">
		<tr>
			<th>Park Name</th>
			<th>Location</th>
			<th>Area in Acres</th>
			<th>Date Established</th>
			<th>Description</th>
		</tr>
	<?php 
		foreach($parks as $park): ?>
			<tr>
				<td><a href="<?= $park['url'] ?>" ><?= $park['name'] ?></a></td>
				<td><?= $park['location'] ?></td>
				<td><?= $park['area_in_acres'] ?></td>
				<td><?= $park['date_established'] ?></td>
				<td><?= $park['description'] ?></td>
			</tr>
		<?php endforeach ?> 
	</table>
	<nav>
		<ul class="pager">
			<li class="previous"><?php if ($pageID != 1) : ?>
				<a href="?page=<?= ($previous) ?>">Previous</a>
			<?php endif ?></li>
		  
			<li class="next"><?php if ($pageID < $numPages) : ?>
		  		<a href="?page=<?= ($next) ?>">Next</a>
			<?php endif ?> </li>
		</ul>
  	</nav>

  	<h2><?= $errorMessage ?></h2>

  	<form role="form" method="POST" enctype="multipart/form-data" action="">
		<div class="form-group">

			<label for="name">Name:</label>
			<input class="form-control" id="name" name="name" type="text" placeholder="">

			<label for="url">URL:</label>
			<input class="form-control" id="url" name="url" type="url" placeholder="">

			<label for="location">Location</label>
			<input class="form-control" id="location" name="location" type="text" placeholder="">

			<label for="date_established">Date Established</label>
			<input class="form-control" id="date_established" name="date_established" type="date" placeholder="">

			<label for="area_in_acres">Acreage</label>
			<input class="form-control" id="area_in_acres" name="area_in_acres" type="text" placeholder="">

			<label for="description">Description</label>
			<input class="form-control" id="description" name="description" type="text" placeholder="">

		</div>
		
		<button class="btn btn-default" type="submit" value="submit">Add</button>
	</form>
</div>

</body>
</html>