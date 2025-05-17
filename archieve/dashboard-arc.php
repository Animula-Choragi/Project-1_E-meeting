<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: app1.php?page=login");
  exit();
}
echo "Selamat datang, " . $_SESSION['user_name'];
?>

<br><a href="auth.php?page=logout" onclick="return confirm('Yakin ingin logout?')">Logout</a>