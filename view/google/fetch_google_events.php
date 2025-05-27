<?php
session_start();
require '../../config/google-config.php';

if (!isset($_SESSION['access_token'])) {
  die("Silahkan login ke Google.");
}

$client->setAccessToken($_SESSION['access_token']);
$calendarService = new Google_Service_Calendar($client);
// $attendee1 = new Google_Service_Calendar_EventAttendee($client);
// $reminders = new Google_Service_Calendar_EventReminders($client);

$calendarId = 'a90ff124a580bc79e0e96800715201f125f9e58b6fa612a13953f83120c0fd05@group.calendar.google.com';
$events = $calendarService->events->listEvents($calendarId);


echo "<h2>Jadwal Meeting di Google Calendar</h2>";
foreach ($events->getItems() as $event) {
  $title = $event->getSummary();
  $description = $event->getDescription();
  $start_time = $event->getStart()->getDateTime();
  $end_time = $event->getEnd()->getDateTime();
  $location = $event->getLocation();
  // $attendee = $attendee1->getAdditionalGuests();
  // Ambil data attendees
  $attendees_info = "No attendees";
  if ($event->getAttendees()) {
      $attendee_emails = array_map(
          fn($attendee) => $attendee->getEmail(),
          $event->getAttendees()
      );
      $attendees_info = implode(', ', $attendee_emails);
  }

  $reminders = $event->getReminders();
  // Format reminders (asumsi selalu ada dan punya overrides)
  $reminders_info = '';
  foreach ($reminders->getOverrides() as $override) {
      $reminders_info .= ucfirst($override->method) . ' @ ' . 
                        $override->minutes . ' mins, ';
  }
  $reminders_info = rtrim($reminders_info, ', '); // Hilangkan koma terakhir
  // $conference
  $meetLink = $event->getHangoutLink() ?: "No Meet link";
  echo "<p><strong>" 
  . $title . "</strong> - " 
  . $description . "<br/>" 
  . $start_time . "<br/>" 
  . $end_time . "<br/>" 
  . $location . "<br/>" 
  . htmlspecialchars($attendees_info) . "<br/>" 
  . htmlspecialchars($reminders_info) . "<br/>"
  . htmlspecialchars($meetLink) . "<br/>" .
  "</p>"
  ;
}

?>