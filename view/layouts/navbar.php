<?php
$user_pict = 'public/assets/images/ccc.jpg';
$logout_pict = 'public/assets/images/logout.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    header {
      /* background-color: #456789; */
      /* background-color: #008080; */
      background-color: #2a5d84;
      width: 100%;
      height: auto;
    }

    header nav {
      display: flex;
      padding: 10px;
      justify-content: space-between;
      align-items: center;
    }

    header nav p {
      font-size: 20px;
      font-weight: bold;
    }

    header nav p a {
      text-decoration: none;
      color: #f2f2f2;
      font-family: ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    }

    header nav ul li {
      display: inline-block;
      list-style-type: none;
      padding: 8px;
      font-family: ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
    }
    

    .nav-link {
      position: relative;
      text-decoration: none;
      color: #f2f2f2;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 1px;
      opacity: 0.75;
    }

    .nav-link:hover,
    .nav-link:focus {
      opacity: 1;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 4px;
      bottom: -8px;
      left: 0;
      background-color: #f8b739;
      opacity: 0;
      transform: scaleX(0);
      transition: 300ms;
    } 

    .nav-link:hover::after,
    .nav-link:focus::after {
      opacity: 1;
      transform: scaleX(1);
    }

    .user-pic{
      width: 45px;
      border-radius: 50%;
      cursor: pointer;
      margin-left: 30px;
    } 

    .sub-menu-wrap{
      position: absolute;
      top: 8%;
      right: 0;
      width: 190px;
      max-height: 0px;
      overflow: hidden;
      transition: max-height 0.5s;
      font-family: arial, sans-serif;
    }

    .sub-menu-wrap.open-menu{
      max-height: 400px;
    }

    .sub-menu{
      background: #456789;
      border-radius: 8px;
      padding: 5px;
      margin: 7px;
    }

    .sub-menu:hover {
      background-color: #2c3e50;
    }

    .sub-menu-link{
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #525252;
      padding: 5px;
    }
  
    .sub-menu-link img{
      width: 20px;
      border-radius: 50%;
      background: #fff;
      padding: 4px;
      margin-right: 15px;
    }

    .sub-menu-link p{
      width: 100%;
      font-size: 1em;
      color: #fff;
      font-weight: normal;
    }

  </style>
</head>
<body>
  <header>
    <nav>
      <p><a href="app.php?page=dashboard">E-Meeting</a></p>
      <ul class="nav_item">
        <li><a href="app.php?page=calendar" class="nav-link">Calendar</a></li>
        <li><a href="app.php?page=list_meetings" class="nav-link">List Meeting</a></li>
      </ul>
      <img src="<?= $user_pict ?>" alt="user" class="user-pic" onclick="toggleMenu()">
      
      <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
          <a href="auth.php?page=logout" onclick="return confirm('Yakin ingin logout?')" class="sub-menu-link">
            <img src="<?= $logout_pict ?>">
            <p>Log out</p>
          </a>
        </div>


      </div>

    </nav>
  </header>

  <script>
    let subMenu = document.getElementById('subMenu');
    function toggleMenu(){
      subMenu.classList.toggle('open-menu')
    }
</script>
</body>
</html>