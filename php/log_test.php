<?php
date_default_timezone_set('America/Chicago');
require_once 'Log.php';

$log = new Log();
$log->filename="../data_log/log-" . date("Y-m-d") . ".log";
$log->info('This is for INFO');
$log->error('This is for ERROR');

?>