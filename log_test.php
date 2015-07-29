<?php 
require_once 'Log.php';
$logged = new Log('cli');
$logged->logInfo(" We have new coffee cups");
$logged->logError(" 404");
?>