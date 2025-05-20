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
</head>
<body>
  <header class="main-header">
    <nav class="main-nav">
      <div class="nav-brand">
        <p><a class="brand-link" href="app.php?page=dashboard">E-Meeting</a></p>
      </div>

      <div class="nav-links-container">
        <ul class="nav-list">
          <li class="nav-item"><a href="app.php?page=calendar" class="nav-link">Calendar</a></li>
          <li class="nav-item"><a href="app.php?page=list_meetings" class="nav-link">List Meeting</a></li>
        </ul>
      </div>

      <div class="user-controls">
        <img src="<?= $user_pict ?>" alt="user" class="user-avatar" onclick="toggleMenu()">
      </div>

      <div class="user-dropdown" id="subMenu">
        <div class="dropdown-menu">
          <a href="auth.php?page=logout" onclick="return confirm('Yakin ingin logout?')" class="dropdown-item">
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