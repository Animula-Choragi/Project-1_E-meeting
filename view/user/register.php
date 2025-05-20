<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body class="register-auth-layout">
  <main class="auth-page">
      <section class="auth-form-container">
        <form  class="auth-form" action="auth.php?page=register_process" method="POST">
          <h1 class="auth-title">Registrasi</h1>
          
          <label for="name">Nama:</label>
          <input class="auth-input" type="text" id="name" name="name" required>
          
          <label for="email">Email:</label>
          <input class="auth-input" type="email" id="email" name="email" required>
          
          <label for="password">Password:</label>
          <input class="auth-input" type="password" id="password" name="password" required>
          
          <button class="btn btn-primary" type="submit">Buat Akun</button>

          <p class="auth-helper-text">Kamu sudah memiliki akun? <a class="auth-backlink" href="auth.php?page=login">Masuk</a></p>

        </form>
      </section>
  </main>
    

</body>
</html>