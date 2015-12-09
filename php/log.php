<?php

class Log
{
	protected $handle = '';
	protected $filename = '';

	public function __construct($prefix = 'log')
	{
		$today = date('Y-m-d');
		$this->filename = "{$prefix}-{$today}.log";
		$this->handle = fopen($this->filename, 'a+');
	}
	
	public function logMessage($logLevel, $message)
	{
		$dateAndTime = date("Y-m-d H:i:s:A");
	    fwrite($this->handle, "{$dateAndTime} [{$logLevel}] {$message}" . PHP_EOL);
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

	public function __destruct()
	{
	    fclose($this->handle); 
	}

	protected function setHandle()
	{

	}
	
	protected function setFilename()
	{

	}

}