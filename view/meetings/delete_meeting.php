<?php

$id = $_GET['id'];

// Ambil google_event_id dari database
$result = $conn->query("SELECT google_event_id FROM meetings WHERE id=$id");
$meeting = $result->fetch_assoc();
$eventId = $meeting['google_event_id'];

// Hapus dari database
$conn->query("DELETE FROM meetings WHERE id=$id");

$calendarId = 'a90ff124a580bc79e0e96800715201f125f9e58b6fa612a13953f83120c0fd05@group.calendar.google.com';


// Hapus dari Google Calendar
$client->setAccessToken($_SESSION['access_token']);
$calendarService = new Google_Service_Calendar($client);
$calendarService->events->delete($calendarId, $eventId);

echo "Jadwal meeting berhasil dihapus dari aplikasi dan Google Calendar";

?>