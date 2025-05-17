<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    
    section {
      margin: 0px 30px;
      padding: 30px 10px;
      font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    }

    .judul {
      text-align: center;
      padding: 30px 10px 0;
      font-family: "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
    }

    h3 {
      padding: 20px 10px 10px;
    }

    .feature h2 {
      text-align: center; 
      /* font-family: serif; */
      font-family: "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
      font-weight: bold;

    }

    .feature p {
      margin-left: 40px;
      color: #555;
    }

    button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 15px;
      font-family: Arial, sans-serif;
      border-radius: 4px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      border: none;
      cursor: pointer;
      margin: 5px 0;
      margin-left: 40px;
      min-width: 100px;
      /* background-color: #86A397; */
      background-color: #2a5d84;
      opacity: 0.8;
      /* color: #333; */
    }

    /* Hover effects */
    button:hover {
      opacity: 1;
      color: #f2f2f2;
    }

    /* Active/pressed state */
    button:active {
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
      transform: translateY(1px);
    }
  </style>
</head>
<body>
  <h2 class="judul">Dashboard e-Meeting</h2> <br />
  <section>

    <div class="welcome">

      <h2>Halo, <?php echo $_SESSION['user_name']; ?>!</h2>
      <p style="color: #555;">Selamat datang di e-Meeting, platform untuk mengelola dan menjadwalkan rapat dengan Google Calendar API.</p>  <br /> <hr /> <br />
    
    </div>

    <div class="feature">

      <h2>Apa yang Bisa Anda Lakukan di Sini?</h2>
      
      <h3>📅 Calendar</h3>
      <p>Lihat seluruh jadwal meeting Anda dalam tampilan kalender interaktif. Dilengkapi fitur klik untuk detail dan filter tampilan (hari/minggu/bulan).</p>
      <button onclick="location.href='app.php?page=calendar';">Buka Kalender</button>
      <br /> <br />
      
      <h3>📋 Lihat Jadwal Meeting Terbaru</h3>
      <p>Tampilkan semua daftar rapat yang telah Anda buat dalam bentuk tabel secara real-time.</p>
      <button onclick="location.href='app.php?page=list_meetings';">Lihat Jadwal</button>
      <br /> <br />
      
      <h3>✍️ Buat Meeting Baru</h3>
      <p>Ingin menjadwalkan rapat? Klik tombol “Buat Meeting” dan isi informasi yang dibutuhkan.</p> 
      <button onclick="location.href='app.php?page=add_meeting';">Buat Meeting</button>
      <br /> <br />
      
      <h3>🔔 Pengingat Otomatis</h3>
      <p>Notifikasi akan dikirimkan secara otomatis melalui Google Calendar, jadi Anda tidak akan lupa agenda penting.</p>
      <br /> <br />
    </div>

  </section>
  
</body>
</html>