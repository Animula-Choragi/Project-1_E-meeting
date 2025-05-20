<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <main class="dashboard-page">
    <section class="page-header">
      <h2>Dashboard e-Meeting</h2>
    </section>
    <section class="dashboard-section">

      <div class="welcome-message">

        <h2>Halo, <?php echo $_SESSION['user_name']; ?>!</h2>
        <p class="welcome-text">Selamat datang di e-Meeting, platform untuk mengelola dan menjadwalkan rapat dengan Google Calendar API.</p> 
      
      </div>

      <div class="feature-list">

        <h2 class="feature-title text-bold">Apa yang Bisa Anda Lakukan di Sini?</h2>
        
        <div class="feature-item">
          <h3 class="feature-subtitle">📅 Calendar</h3>
          <p class="feature-description">Lihat seluruh jadwal meeting Anda dalam tampilan kalender interaktif. Dilengkapi fitur klik untuk detail dan filter tampilan (hari/minggu/bulan).</p>
          <button class="btn btn-primary dashboard-btn-spacing" onclick="location.href='app.php?page=calendar';">Buka Kalender</button>
        </div>
        
        <div class="feature-item">
          <h3 class="feature-subtitle">📋 Lihat Jadwal Meeting Terbaru</h3>
          <p class="feature-description">Tampilkan semua daftar rapat yang telah Anda buat dalam bentuk tabel secara real-time.</p>
          <button class="btn btn-primary dashboard-btn-spacing" onclick="location.href='app.php?page=list_meetings';">Lihat Jadwal</button>
        </div>
        
        <div class="feature-item">
          <h3 class="feature-subtitle">✍️ Buat Meeting Baru</h3>
          <p class="feature-description">Ingin menjadwalkan rapat? Klik tombol “Buat Meeting” dan isi informasi yang dibutuhkan.</p>

          <button class="btn btn-primary dashboard-btn-spacing" onclick="location.href='app.php?page=add_meeting';">Buat Meeting</button>
        </div>
        
        <div class="feature-item">
          <h3 class="feature-subtitle">🔔 Pengingat Otomatis</h3>
          <p class="feature-description">Notifikasi akan dikirimkan secara otomatis melalui Google Calendar, jadi Anda tidak akan lupa agenda penting.</p>
        </div>
      </div>

    </section>
  </main>
</body>
</html>