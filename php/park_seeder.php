<?php
require 'park_config.php';
require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$delete = "TRUNCATE national_parks;";

$dbc->exec($delete);

$parks = [
    ['name' => 'Big Bend',            'location' => 'Texas',          'date_established' => '1944-06-12', 'area_in_acres' => 801163.21],
    ['name' => 'Guadalupe Mountains', 'location' => 'Texas',          'date_established' => '1966-10-15', 'area_in_acres' => 86415.97],
    ['name' => 'Zion',                'location' => 'Utah',           'date_established' => '1919-11-19', 'area_in_acres' => 146597.6],
    ['name' => 'Wind Cave',           'location' => 'South Dakota',   'date_established' => '1903-01-09', 'area_in_acres' => 28295.03],
    ['name' => 'Voyageurs',           'location' => 'Minnesota',      'date_established' => '1971-01-08', 'area_in_acres' => 218200.17],
    ['name' => 'Virgin Islands',      'location' => 'Virgin Islands', 'date_established' => '1956-08-02', 'area_in_acres' => 14688.87],
    ['name' => 'Shenandoah',          'location' => 'Virginia',       'date_established' => '1926-05-22', 'area_in_acres' => 199045.23],
    ['name' => 'Sequoia',             'location' => 'California',     'date_established' => '1890-09-25', 'area_in_acres' => 404051.17],
    ['name' => 'Olympic',             'location' => 'Washington',     'date_established' => '1938-06-29', 'area_in_acres' => 922650.86],
    ['name' => 'Katmai',              'location' => 'Alaska',         'date_established' => '1980-12-02', 'area_in_acres' => 3674529.68],
];

foreach($parks as $park){
	$query = "INSERT INTO national_parks(name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

	$dbc->exec($query);
}