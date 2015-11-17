<?php

date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message)
{
	$date = date("Y-m-d");
	$dateAndTime = date("Y-m-d H:i:s:A");
	$filename = "log-{$date}.log";
	$handle = fopen($filename, 'a');
    fwrite($handle, "{$dateAndTime} [{$logLevel}] {$message}" . PHP_EOL);
    fclose($handle);    
}

function logInfo($message)
{
	logMessage("INFO", $message);
}

function logError($message)
{
	logMessage("ERROR", $message);
}

function logButts($message)
{
	logMessage("FART", $message);
}

logError('Oh no!');
logError("I can't pass an arbitrary message to logError()!");
logError("That makes the function somewhat limited, don't you think?");
logInfo('This is how I should be using these functions.');
logButts("Signed: Ben.");
logbutts("( ' | ' )");
