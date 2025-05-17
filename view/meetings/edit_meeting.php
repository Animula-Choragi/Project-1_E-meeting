<?php

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM meetings WHERE id = $id");
$meeting = $result->fetch_assoc();
?>

<form action="app.php?page=update_meeting" method="POST">
  <input type="hidden" name="id" value="<?= $meeting['id']; ?>">
  
  <label for="title">Judul Meeting:</label>
  <input type="text" name="title" id="title" value="<?= $meeting['title']; ?>">

  <label for="description">Deskripsi:</label>
  <textarea name="description" id="description"><?= $meeting['description']; ?></textarea>

  <label for="start_date">Awal meeting:</label>
  <input type="datetime-local" name="start_date" id="start_date" value="<?= date('Y-m-d\TH:i', strtotime($meeting['start_date'])); ?>">

  <label for="end_date">Akhir meeting:</label>
  <input type="datetime-local" name="end_date" id="end_date" value="<?= date('Y-m-d\TH:i', strtotime($meeting['end_date'])); ?>">

  <label for="guest">Guest :</label>
  <input type="email" name="guest" id="guest" multiple value="<?= $meeting['guest']; ?>">

  <label for="location">Lokasi :</label>
  <input type="text" name="location" id="location" value="<?= $meeting['location']; ?>">
  
  <button type="submit">Simpan Perubahan</button>


</form>