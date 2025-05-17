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
  <title>Document</title>
  <style type="text/css">

    section {
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        position:absolute;
        width:350px;
        background:#F2F2F2;
        padding:10px 20px;
        border-radius: 8px;
        box-shadow:0px 0px 10px #aaa;
        box-sizing:border-box;
        font-family: sans-serif;
        font-size:.9em;
    }


    button {
      display: block;
      width:100%;
      margin:5px 0px;
      padding:7px;
      /* background-color: #305BDB; */
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 15px;
      font-family: Arial, sans-serif;
      box-shadow: 0px 0px 3px #777;
      padding:10px 0px;
      background-color: #2a5d84;
      color: #fff;
      opacity: 0.9;
    }

    button:hover {
      /* background-color: #2648AF; */
      opacity: 1;
    }

    button:active {
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
      transform: translateY(1px);
    }

    img {
      width: 20%;
      height: auto;
      display: block;
      margin: 20px auto;
    }


    p:first-of-type {
        text-align: center;
        font-size: 1.75em;
        margin-bottom: 0;
    }

    p:last-of-type {
      text-align:center;
      font-size: 0.8em;
      margin-top: 1px;
      margin-bottom: 30px;
    }

  </style>
</head>
<body>

  <section>    

    <img src="<?= $image ?>" alt="google">
    
    <p>Silakan Login Google</p>
    <p>untuk melanjutkan ke E-Meeting App</p>

    <button onclick="location.href='<?= $auth_url ?>';">
      Login Google
    </button>

  </section>

</body>
</html>