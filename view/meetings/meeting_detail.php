<?php
require '../config/db.php';

// Cek apakah parameter ID dikirim
if (!isset($_GET['id'])) {
    die("❌ ID meeting tidak ditemukan.");
}

$id = $_GET['id'];

// Ambil data dari database
$stmt = $conn->prepare("SELECT * FROM meetings WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Cek apakah data ditemukan
if ($result->num_rows === 0) {
    die("❌ Meeting tidak ditemukan.");
}

$meeting = $result->fetch_assoc();
?>

<h2>Detail Jadwal Meeting</h2>

<p><strong>Judul:</strong> <?= htmlspecialchars($meeting['title']) ?></p>
<p><strong>Deskripsi:</strong> <?= nl2br(htmlspecialchars($meeting['description'])) ?></p>
<p><strong>Awal Meeting:</strong> <?= date('d F Y, H:i', strtotime($meeting['start_date'])) ?></p>
<p><strong>Akhir Meeting:</strong> <?= date('d F Y, H:i', strtotime($meeting['end_date'])) ?></p>
<p><strong>Lokasi:</strong> <?= htmlspecialchars($meeting['location']) ?></p>
<p><strong>Dibuat pada:</strong> <?= date('d F Y, H:i', strtotime($meeting['created_at'])) ?></p>

<a href="app.php?page=list_meetings">← Kembali ke Daftar Meeting</a>
