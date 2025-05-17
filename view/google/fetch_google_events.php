<?php
session_start();
require '../../config/google-config.php';

if (!isset($_SESSION['access_token'])) {
  die("Silahkan login ke Google.");
}

$client->setAccessToken($_SESSION['access_token']);
$calendarService = new Google_Service_Calendar($client);

$calendarId = 'a90ff124a580bc79e0e96800715201f125f9e58b6fa612a13953f83120c0fd05@group.calendar.google.com';
$events = $calendarService->events->listEvents($calendarId);

echo "<h2>Jadwal Meeting di Google Calendar</h2>";
foreach ($events->getItems() as $event) {
  echo "<p><strong>" . $event->getSummary() . "</strong> - " . $event->getStart()->getDateTime() . "</p>";
}

?>