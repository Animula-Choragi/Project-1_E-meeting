<?php
// require '../../config/google-config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body class="login-auth-layout">
  <main class="auth-page">
    <section class="auth-form-container">
      <form class="auth-form" action="auth.php?page=login_process" method="POST">
        <h1 class="auth-title">Masuk</h1>

        <label for="email">Email:</label>
        <input class="auth-input" type="email" name="email" id="email" required>
        
        <label for="password">Password:</label>
        <input class="auth-input" type="password" name="password" id="password" required>

        <button class="btn btn-primary" type="submit">Masuk</button>

        <p class="auth-helper-text">Kamu belum memiliki akun? <a class="auth-backlink" href="auth.php?page=register">Registrasi</a></p>
        
      </form>
    </section>
  </main>
  
</body>
</html>