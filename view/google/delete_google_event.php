<?php
session_start();
require '../../config/google-config.php';

if (!isset($_SESSION['access_token'])) {
  die("Silahkan login ke Google");
}

$client->setAccessToken($_SESSION['access_token']);
$calendarService = new Google_Service_Calendar($client);

$eventId = $_GET['event_id'];
$calendarService->events->delete('primary', $eventId);

echo "Jadwal meeting berhasil dihapus dari Google Calendar.";

?>