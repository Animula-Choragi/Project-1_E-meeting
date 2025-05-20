<?php

session_start();

//!isset($_GET['page']) => jika parameter page tdk ada di URL, maka
// $_GET['page'] !== 'logout' => jika parameter page tidak sama dengan logout, maka

if (isset($_SESSION['user_id']) && 
(!isset($_GET['page']) || $_GET['page'] !== 'logout')
) {
  header("Location: app.php?page=dashboard");
  exit();
}

require 'config/db.php';
require 'config/google-config.php';

$page_title = 'Login Google';
$content_page = 'view/user/login_google.php';

$pages = [
  'login_google' => ['Login Google', 'view/user/login_google.php'],

  'login' => ['Login', 'view/user/login.php'],
  'logout' => ['Logout', 'view/user/logout.php'],
  'register' => ['Register', 'view/user/register.php'],

  'register_process' => ['Register Process', 'app/controllers/register_process.php'],
  'login_process' => ['Login Process', 'app/controllers/login_process.php'],
];

if (
  isset($_GET['page']) && 
  array_key_exists($_GET['page'], $pages)
  ) {
    [$page_title, $content_page] = $pages[$_GET['page']];
  };


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-meeting | <?php echo $page_title; ?></title>
  <link rel="stylesheet" href="public/assets/style/style.css">
</head>
<body class="bg-default">
  <main class="auth-main">
    <?php
    include $content_page;
    ?>
  </main>
</body>
</html>