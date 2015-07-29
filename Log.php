<?php 
class Log
{
	public $filename;
	public $handle;

	public function __construct($prefix = 'log') {
		$date = date('m-d-Y');
		$this->filename = "$prefix-$date.log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($logLevel, $message)
	{
	   fwrite($this->handle,  date('m-d-Y'). " " . $logLevel . $message . PHP_EOL);
	}

	public function logInfo($message) 
	{
		return $this->logMessage('INFO', $message) . PHP_EOL;
	}

	public function logError($message) 
	{
		return $this->logMessage('ERROR', $message).PHP_EOL;
	}

	public function __destruct()
    {
       fclose($this->handle);
    }
}

?>
