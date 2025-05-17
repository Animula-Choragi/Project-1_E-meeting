<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">

    /* body {
        margin:0px;
        padding:0px;
        font-family: sans-serif;
        font-size:.9em;
    } */

    section {
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        position:absolute;
        width:350px;
        background: #FFF;
        padding:10px 20px;
        border-radius: 8px;
        box-shadow:0px 0px 10px #aaa;
        box-sizing:border-box;
        font-family: sans-serif;
        font-size:.9em;
    }

    input {
        display: inline-block;
        border: none;
        width:100%;
        border-radius:8px;
        margin: 5px 0px 15px;
        padding:10px;
        box-sizing: border-box;
        background-color: #f4f4f5;
    }

    input:hover {
      background-color: #E4E4E7;
    }

    button {
      display: block;
      border:none;
      width:100%;
      margin:5px 0px;
      cursor: pointer;
      padding:10px 0px;
      box-sizing: border-box;
      font-size: 15px;
      font-family: Arial, sans-serif;
      border-radius: 8px;
      box-shadow: 0px 0px 3px #777;
      background-color: #2a5d84;
      color: #fff;
      opacity: 0.9;
    }

    button:hover {
      opacity: 1;
    }
    
    button:active {
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
      transform: translateY(1px);
    }

    h1 {
      text-align: center;
      font-size: 2em;
      /* color: #008080; */
      color: #2a5d84;
    }

    p {
      text-align: center;
      font-size: 1.75em;
    }

    a {
      text-decoration: none;
      /* color: #305BDB; */
      /* color: #008080; */
      color: #2a5d84;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

</style>
</head>
<body>
  <section>
    <form action="auth.php?page=register_process" method="POST">
      <h1>Registrasi</h1>
      
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit">Buat Akun</button>

      Kamu sudah memiliki akun? <a href="auth.php?page=login">Masuk</a>

    </section>
      
    
  </form>

</body>
</html>