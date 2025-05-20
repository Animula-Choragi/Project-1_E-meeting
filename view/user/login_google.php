<?php
// diakses langsung
// require '../../config/google-config.php';
// $image = '../../public/assets/images/google.png';

$auth_url = $client->createAuthUrl();

$image = 'public/assets/images/google.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Google</title>
</head>
<body class="google-auth-layout">

  <main class="auth-page">
    <section class="auth-form-container">    

      <img class="google-auth-logo" src="<?= $image ?>" alt="google">
      
      <h1 class="google-auth-title">Silakan Login Google</h1>
      <p class="google-auth-description">untuk melanjutkan ke E-Meeting App</p>

      <button class="btn btn-primary" onclick="location.href='<?= $auth_url ?>';">
        Login Google
      </button>

    </section>
  </main>

</body>
</html>