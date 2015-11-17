<?php

class Log
{
	public $filename = '';
	
	public function logMessage($logLevel, $message)
	{
		$dateAndTime = date("Y-m-d H:i:s:A");
		$handle = fopen($this->filename, 'a');
	    fwrite($handle, "{$dateAndTime} [{$logLevel}] {$message}" . PHP_EOL);
	    fclose($handle); 
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

}