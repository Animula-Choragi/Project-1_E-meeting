<?php

if (!isset($_SESSION['access_token'])) {
  die("Error: Silahkan login ke Google terlebih dahulu");
}

// Validasi parameter ID meeting
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  die("Error: Parameter ID tidak valid!");
}

$client->setAccessToken($_SESSION['access_token']);
$calendarService = new Google_Service_Calendar($client);

// Ambil data meeting dari database
$meeting_id = $_GET['id'];
$result = $conn->query("SELECT * FROM meetings WHERE id = $meeting_id");

$meeting = $result->fetch_assoc(); // Ini mengambil 1 baris hasil query MySQL dalam bentuk associative array, jadinya $meeting['date_time'] bukan jadi DateTime ocject

// Format waktu menggunakan DateTime
$start_time = new DateTime($meeting['start_date']);
$start_time = $start_time->format(DateTime::ISO8601);

$end_time = new DateTime($meeting['end_date']);
$end_time = $end_time->format(DateTime::ISO8601);

$guest = $meeting['guest'];

$event = new Google_Service_Calendar_Event([
  'summary' => $meeting['title'],
  'description' => $meeting['description'],
  'start' => [
    'dateTime' => $start_time, 
    'timeZone' => 'Asia/Jakarta'],
  'end' => [
    'dateTime' => $end_time, 
    'timeZone' => 'Asia/Jakarta'
  ],
  'location' => $meeting['location'],
  'attendees' => $guest,
  'conferenceData' => [
    'createRequest' => [
      'requestId' => "randomNewString"
    ]
  ]
]);

$calendarId = 'a90ff124a580bc79e0e96800715201f125f9e58b6fa612a13953f83120c0fd05@group.calendar.google.com'; // Gunakan kalender utama pengguna
$event = $calendarService->events->insert($calendarId, $event, ['conferenceDataVersion' => 1]);

// Simpan google_event_id ke database
$stmt = $conn->prepare("UPDATE meetings SET gmeet_link = ?, google_event_id = ? WHERE id = ?");
$stmt->bind_param("ssi", $event->hangoutLink, $event->id, $meeting_id);
$stmt->execute();

echo "Event berhasil disinkronisasi!";

echo "Jadwal meeting berhasil dikirim ke Google Calendar: " . $event->htmlLink;

?>