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
      margin: 0;
      background-color: #F7F6E9;
      font-family: ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    }

    .main-page {
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }

    .welcome {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .welcome h1{
      color: #2a5d84;
      font-size: 2.8em; 
      margin-bottom: 0; 
      text-transform: uppercase;
    }
    .welcome p{
      color: #555;
      font-size: 1em;
      margin-top: 0;
    }

    button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 15px;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      border: 1px solid #008080;
      cursor: pointer;

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
  <main class="main-page">
    <section class="welcome">
      <h1>Selamat Datang di Aplikasi E-Meeting</h1>
      <p>Ini adalah platform untuk mengatur jadwal meeting dengan Google Calendar API</p>
      <h3>Waktu Server: <?php echo $date->format('d F Y, H:i:s'); ?></h3>
      <button onclick="location.href='auth.php?page=login_google';">
        Masuk E-Meeting
      </button>
    </section>
  </main>
</body>
</html>