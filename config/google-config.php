<?php
require __DIR__ . '../../vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . '/credentials.json');
$client->setRedirectUri('http://localhost/e_meeting/google-callback.php');
$client->setAccessType('offline');
$client->addScope(Google_Service_Calendar::CALENDAR);

?>