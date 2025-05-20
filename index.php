<?php
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="public/assets/style/style.css">
</head>
<body class="bg-default">
  <main class="index-container">
    <section class="hero-section">
      <h1 class="hero-title">Selamat Datang di Aplikasi E-Meeting</h1>
      <p class="hero-subtitle">Ini adalah platform untuk mengatur jadwal meeting dengan Google Calendar API</p>
      <h3  class="server-time">Waktu Server : <?php echo $date->format('d F Y, H:i:s'); ?></h3>
      <button class="btn btn-primary text-bold" onclick="location.href='auth.php?page=login_google';">
        Masuk E-Meeting App
      </button>
    </section>
  </main>
</body>
</html>