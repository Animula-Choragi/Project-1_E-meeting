<?php

// Ambil data dari form
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$guest = $_POST['guest'];
$location = $_POST['location'];

// Update database
$conn->query("UPDATE meetings SET title='$title', description='$description', start_date='$start_date', end_date='$end_date', guest='$guest', location='$location'  WHERE id=$id");

// Ambil google_event_id dari database
$result = $conn->query("SELECT google_event_id FROM meetings WHERE id=$id");
$meeting = $result->fetch_assoc();
$eventId = $meeting['google_event_id'];

// Update event di Google Calendar
$client->setAccessToken($_SESSION['access_token']);
$calendarService = new Google_Service_Calendar($client);

$calendarId = 'a90ff124a580bc79e0e96800715201f125f9e58b6fa612a13953f83120c0fd05@group.calendar.google.com';

$guest_list = explode(",", $guest);
$guest_list = array_map('trim', $guest_list);
$attendees = [];

foreach ($guest_list as $email) {
    $attendees[] = ['email' => $email];
}


// Ambil event yang ada
$event = $calendarService->events->get($calendarId, $eventId);

// Update detail event
$event->setSummary($title);
$event->setDescription($description);
$event->setLocation($location);
$ecent->setAttendes($attendees);

// Atur waktu mulai dan selesai
$event->setStart(new Google_Service_Calendar_EventDateTime([
  'dateTime' => date('Y-m-d\TH:i:s', strtotime($start_date)), 
  'timeZone' => 'Asia/Jakarta']));
$event->setEnd(new Google_Service_Calendar_EventDateTime([
  'dateTime' => date('Y-m-d\TH:i:s', strtotime($end_date)), 
  'timeZone' => 'Asia/Jakarta']));

$calendarService->events->update($calendarId, $eventId, $event);

echo "Jadwal berhasil diperbarui di aplikasi dan Google Calendar.";

?>