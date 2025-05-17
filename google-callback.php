<?php

session_start();
require 'config/google-config.php';

if (!isset($_GET['code'])) {
  die('Kode tidak ditemukan');
}

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
$_SESSION['access_token'] = $token;

header("Location: auth.php?page=login");
exit();

?>