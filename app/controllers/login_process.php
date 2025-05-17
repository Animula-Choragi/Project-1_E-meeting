<?php

//session_start(); // Ini WAJIB ditambahkan

//require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($id, $name, $hashed_password);
  $stmt->fetch();

  if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
    $_SESSION['user_id'] = $id;  // Perbaikan di sini
    $_SESSION['user_name'] = $name;  // Perbaikan di sini
    header("Location: app.php?page=dashboard"); // Redirect ke dashboard
    exit();
  } else {
    echo "Login gagal! Periksa email dan password.";
  }

}

?>