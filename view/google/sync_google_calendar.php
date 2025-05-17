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


// guest/attendees
$guest = $meeting['guest']; // Ambil dari database
$guest_list = explode(",", $guest); // Pecah string menjadi array

// Bersihkan dari spasi (array_map = modifikasi semua isi array sekaligus)
$guest_list = array_map('trim', $guest_list);

$attendees = [];// Membuat array kosong bernama $attendees

// Looping dengan menyimpan data hasil explode terus simpan sementara di $email
foreach ($guest_list as $email) {
  // ambil $email yg disimpan sementara, terus di bungkus jadi array dgn kunci 'email' dan simpan sebagai array di $attendees
    $attendees[] = ['email' => $email];
}


$event = new Google_Service_Calendar_Event([
  'summary' => $meeting['title'],
  'description' => $meeting['description'],
  'start' => [
    'dateTime' => date('Y-m-d\TH:i:s', strtotime($meeting['start_date'])),
    'timeZone' => 'Asia/Jakarta'],
  'end' => [
    'dateTime' => date('Y-m-d\TH:i:s', strtotime($meeting['end_date'])),
    'timeZone' => 'Asia/Jakarta'],
  'location' => $meeting['location'],
  'attendees' => $attendees,
  'reminders' => [
    'useDefault' => false,
    'overrides' => [
      [
        'method'=> 'email',
        'minutes'=> 24 * 60
      ],
      [
        'method'=> 'popup',
        'minutes'=> 10
      ]
    ]

  ],
  'conferenceData' => [
    'createRequest' => [
      'requestId' => uniqid()
    ]
  ]
]);

$calendarId = 'a90ff124a580bc79e0e96800715201f125f9e58b6fa612a13953f83120c0fd05@group.calendar.google.com';
$event = $calendarService->events->insert($calendarId, $event, ['conferenceDataVersion' => 1]);

// Simpan google_event_id ke database
$stmt = $conn->prepare("UPDATE meetings SET gmeet_link = ?, google_event_id = ? WHERE id = ?");
$stmt->bind_param("ssi", $event->hangoutLink, $event->id, $meeting_id);
$stmt->execute();



echo "Event berhasil disinkronisasi!";

echo "Jadwal meeting berhasil dikirim ke Google Calendar: <br />" . $event->htmlLink;

?>