<?php
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #F7F6E9;
    }

    h1 {
      /* color: #008080; */
      color: #2a5d84;
      font-family: ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    }

    h2, p {
      font-family: ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    }

    p {
      color: #555;
    }

    button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 15px;
      font-family: ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      border: 1px solid #008080;
      cursor: pointer;
      margin: 5px 0;
      min-width: 100px;
      /* background-color: #B0B68F; */
      /* background-color: #008080; */
      background-color: #2a5d84;
      color: #fff;
      opacity: 0.9;
    }

    /* Hover effects */
    button:hover {
      opacity: 1;
    }

    /* Active/pressed state */
    button:active {
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
      transform: translateY(1px);
    }
    
  </style>
</head>
<body>
  
  <h1>Selamat Datang di Aplikasi E-Meeting</h1>
  <h2>Waktu Server: <?php echo $date->format('d F Y, H:i:s'); ?></h2>
  <p>Ini adalah platform untuk mengatur jadwal meeting dengan Google Calendar API</p>
  <button onclick="location.href='auth.php?page=login_google';">
    Masuk E-Meeting App
  </button>
  
</body>
</html>