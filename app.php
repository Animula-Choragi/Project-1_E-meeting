<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: auth.php");
  exit();
}

require 'config/db.php';
require 'config/google-config.php';



$page_title = 'Dashboard';
$content_page = 'view/user/dashboard.php';

// superglobal variabel (mengembalikan nilai True/False)
$page = isset($_GET['page']) ? $_GET['page'] : '';

// routing ke tiap halaman
$pages = [
  'dashboard' => ['Dashboard', 'view/user/dashboard.php'],
  
  'calendar' => ['Calendar', 'view/user/calendar.php'],

  'process_meeting' => ['Process Meetings', 'app/controllers/process_meeting.php'],

  'add_meeting' => ['Add Meetings', 'view/meetings/add_meeting.php'],
  'delete_meeting' => ['Delete Meetings', 'view/meetings/delete_meeting.php'],
  'edit_meeting' => ['Edit Meetings', 'view/meetings/edit_meeting.php'],
  
  'list_meetings' => ['List Meetings', 'view/meetings/list_meetings.php'],
  'meeting_detail' => ['Meeting Detail', 'view/meetings/meeting_detail.php'],
  'update_meeting' => ['Update Meetings', 'view/meetings/update_meeting.php'],
  
  'sync_google_calendar' => ['Sync Google Calendar', 'view/google/sync_google_calendar.php']
];

// array_key_exists($key, $array) = mencari key didalam array
// contoh : mencari 'calendar' di dalam $pages
if (
  $page && 
  array_key_exists($_GET['page'], $pages)
  ) {
    // mengambil array sesuai susunan([$page_title, $content_page]) dgn menggunakan $pages[$_GET['page']]
  [$page_title, $content_page] = $pages[$_GET['page']];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Meeting | <?php echo $page_title; ?></title>
  <style>
    body {
      width: 100%;
      height: auto;
      /* background-color: #F7F6E9; */
      background-color: #efeee5;
      height: 100vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }
    .konten {
      overflow: auto;
    }
  </style>
</head>
<body>
  <?php include "view/layouts/navbar.php"; ?>
  <div class="konten">
    <?php include $content_page; ?>
  </div>
</body>
</html>