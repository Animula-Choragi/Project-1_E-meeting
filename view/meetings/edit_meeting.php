<?php

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM meetings WHERE id = $id");
$meeting = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Meetings</title>
</head>
<body>

  <main class="meeting-page">
    <section class="page-header">
      <h2>Edit e-Meeting</h2>
    </section>
    <section class="meeting-form-container">
      <form action="app.php?page=update_meeting" method="POST">
        <input type="hidden" name="id" value="<?= $meeting['id']; ?>">
        
        <div class="input-group row-inputs">
          <div class="input-field">
            <label for="title">Judul Meeting:</label>
            <input class="form-input" type="text" name="title" id="title" value="<?= $meeting['title']; ?>">
          </div>

          <div class="input-field">
            <label for="location">Lokasi :</label>
            <input class="form-input" type="text" name="location" id="location" value="<?= $meeting['location']; ?>">
          </div>
        </div>

        <div class="input-group full-width-input">
          <div class="input-field">
            <label for="description">Deskripsi:</label>
            <textarea class="form-textarea" name="description" id="description" rows="5"><?= $meeting['description']; ?></textarea>
          </div>
        </div>
        
        <div class="input-group row-inputs">
          <div class="input-field">
            <label for="start_date">Awal meeting:</label>
            <input class="form-input" type="datetime-local" name="start_date" id="start_date" value="<?= date('Y-m-d\TH:i', strtotime($meeting['start_date'])); ?>">
          </div>
          
          <div class="input-field">
            <label for="end_date">Akhir meeting:</label>
            <input class="form-input" type="datetime-local" name="end_date" id="end_date" value="<?= date('Y-m-d\TH:i', strtotime($meeting['end_date'])); ?>">
          </div>
        </div>

        <div class="input-group full-width-input">
          <div class="input-field">
            <label for="guest">Guest E-mail:</label>
            <input class="form-input" type="email" name="guest" id="guest" multiple value="<?= $meeting['guest']; ?>">
          </div>
        </div>     
        
        <div class="meeting-actions">
          <button class="btn btn-secondary text-bold" onclick="window.location.href='app.php?page=list_meetings';return false;">Batal</button>
          <button class="btn btn-primary text-bold"  type="submit">Simpan Perubahan</button>
        </div>
      </form>
    </section>
  </main>
  
</body>
</html>