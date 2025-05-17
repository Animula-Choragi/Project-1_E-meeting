<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

require '../config/db.php';
require '../config/google-config.php';

// Tandai bahwa ini diinclude dalam utama.php
define('INCLUDED_IN_UTAMA', true);

// Variabel untuk menyimpan judul halaman
$page_title = "Dashboard";
$content_page = "dashboard.php";

// Mapping dari parameter ke file dan judul
$pages = [
  'calendar' => ['Calendar', 'calendar.php'],
  'meeting_detail' => ['Meeting Detail', 'meeting_detail.php'],
  
  'register' => ['Register', 'register.php'],
  'register_process' => ['Register Process', 'register_process.php'],
  'login' => ['Login', 'login.php'],
  'login_process' => ['Login Process', 'login_process.php'],
  'login_google' => ['Login Google', 'login_google.php'],

  'add_meeting' => ['Add Meetings', 'meetings/add_meeting.php'],
  'process_meeting' => ['Process Meetings', 'meetings/process_meeting.php'],
  'list_meetings' => ['List Meetings', 'meetings/list_meetings.php'],
  'edit_meeting' => ['Edit Meetings', 'meetings/edit_meeting.php'],
  'update_meeting' => ['Update Meetings', 'meetings/update_meeting.php'],
  'delete_meeting' => ['Delete Meetings', 'meetings/delete_meeting.php'],

  'sync_google_calendar' => ['Sync Google Calendar', 'google/sync_google_calendar.php']

];

// Jika parameter page ada dan valid di array, gunakan itu
if (isset($_GET['page']) && array_key_exists($_GET['page'], $pages)) {
  [$page_title, $content_page] = $pages[$_GET['page']];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Meeting | <?php echo $page_title; ?></title>
</head>
<body>
  <?php 
  // Include navbar
  include "navbar.php"
  ?>
    
    <?php
    // Menggunakan output buffering untuk menangkap output dari file yang diinclude
    ob_start();
    
    // Include file yang diminta
    include $content_page;
    
    // Ambil konten dari buffer
    $content = ob_get_clean();
    
    // Tampilkan konten
    echo $content;
    ?>
  </div>
</body>
</html>