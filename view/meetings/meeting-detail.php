<?php

if(!isset($_GET['id'])){
  die("Tidak ditemukan");
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM meetings WHERE id = $id");
$meeting = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meeting Detail</title>
</head>
<body>
  
  <main class="meeting-page">
    <section class="page-header">
      <h2>Meeting Details</h2>
    </section>
    <section class="meeting-detail-content">
      <div class="meeting-details">
        <div class="details-container">
          <div class="details-row">
            <div class="detail-item">
              <label class="detail-label">Judul Meeting</label>
              <p class="detail-value"><?= $meeting['title'] ?></p>
            </div>
            <div class="detail-item">
              <label class="detail-label">Waktu Mulai</label>
              <p class="detail-value"><?= date('d F Y H:i', strtotime($meeting['start_date'])); ?></p>
            </div>
          </div>

          <div class="details-row details-row--reverse">
            <div class="detail-item">
              <label class="detail-label">Deskripsi</label>
              <p class="detail-value"><?= $meeting['description']; ?></p>
            </div>
            <div class="detail-item">
              <label class="detail-label">Waktu Selesai</label>
              <p class="detail-value"><?= date('d F Y H:i', strtotime($meeting['end_date'])); ?></p>
            </div>
          </div>

          <div class="details-row">
            <div class="detail-item">
              <label class="detail-label">Lokasi</label>
              <p class="detail-value"><?= $meeting['location']; ?></p>
            </div>
            <div class="detail-item">
              <label class="detail-label">Guest E-mail</label>
              <p class="detail-value"><?= str_replace(',', ', ', $meeting['guest']); ?></p>
            </div>
          </div>
        </div>
        <div class="meeting-actions">
          <button class="btn btn-secondary text-bold" onclick="window.location.href='app.php?page=calendar';">Kembali</button>
          <button class="btn btn-primary text-bold" onclick="window.location.href='app.php?page=edit_meeting&id=<?= $id ?>';">Edit Meeting</button>
        </div>
      </div>
    </section>
  </main>
  
</body>
</html>