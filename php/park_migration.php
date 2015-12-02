<?php

require 'park_config.php';

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop = "DROP TABLE IF EXISTS national_parks";
$dbc->exec($drop);

$create = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($create);