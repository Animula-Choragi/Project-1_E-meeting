<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_id = $_SESSION['user_id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $guest = $_POST['guest'];
  $location = $_POST['location'];

  $stmt = $conn->prepare ("INSERT INTO meetings (user_id, title, description, start_date, end_date, guest, location) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("issssss", $user_id, $title, $description, $start_date, $end_date, $guest, $location);

  if($stmt->execute()) {
    echo "Jadwal Meeting berhasil disimpan!";
  } else {
    echo "Gagal menyimpan jadwal.";
  }
}

?>