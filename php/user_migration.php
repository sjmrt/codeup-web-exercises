<?php

require 'model_config.php';

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop = "DROP TABLE IF EXISTS users";
$dbc->exec($drop);

$create = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(240) NOT NULL,
    last_name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    street_address_1 VARCHAR(100) NOT NULL,
    street_address_2 VARCHAR(100),
    city VARCHAR(100) NOT NULL,
    state VARCHAR(15) NOT NULL,
    zip VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($create);

