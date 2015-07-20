<?php


function logMessage($logLevel, $message)
{
	 
   $filename = 'log-' . date('m-d-Y').'.log';
   $handle = fopen($filename, 'a');
   fwrite($handle,  date('m-d-Y'). $logLevel . $message . PHP_EOL);
   fclose($handle);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

function logInfo($message) 
{
	return logMessage('INFO', $message) . PHP_EOL;
}

function logError($message) 
{
	return logMessage('ERROR', $message).PHP_EOL;
}

logInfo(" We have new coffee cups");
logError(" 404");

?>
