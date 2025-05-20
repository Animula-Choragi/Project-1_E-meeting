<?php
$result = $conn->query("SELECT * FROM meetings ORDER BY start_date ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    section {
      padding: 30px;
      justify-content: center;
      align-items: center;
    }

    h2 {
      text-align: center;
      margin-bottom: 10px;
      font-family: "Helvetica Neue", Helvetica, Helvetica, Arial, sans-serif;
    }

    section button {
      display: block; 
      margin-left: auto; 
      margin-bottom: 5px;
    }

    a {
      text-decoration: none;
    }
    
    table {
      /* border: 1px solid black; */
      border-collapse: collapse;
      width: 100%;
      font-family: arial, sans-serif;
    }
    
    table thead {
      /* background-color: #86A397; */
      background-color: #2a5d84;
      color: #f2f2f2;
    }

    table th, td {
      /* border: 1px solid black; */
      padding: 8px 10px;
    }

    td {
      text-align: center;
    }

    table tbody tr {
      background-color: #f2f2f2;
    }

    table tbody tr:hover {
      background-color: blue;
    }

    table tbody > tr:nth-of-type(even) {
      background-color: #D9DDE2;
    }

    table tbody > tr:nth-of-type(even):hover {
      background-color: red;
    }

    
  </style>
</head>
<body>

  <section>
    <h2>List e-Meeting</h2>
    <button>
      <a href="app.php?page=add_meeting">

      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 15 16">

      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
      
      </svg>
       
      </a>
    </button>
    <table>
        <thead>
          <tr>
          <th>Judul</th>
          <th>Awal meeting</th>
          <th>Akhir meeting</th>
          <th>E-mail Guest</th>
          <th>Lokasi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['title']  . "</td>";
          echo "<td>" . $row['start_date']  . "</td>";
          echo "<td>" . $row['end_date']  . "</td>";
          echo "<td>" . $row['guest']  . "</td>";
          echo "<td>" . $row['location']  . "</td>";
          echo "<td>
          <a href='app.php?page=edit_meeting&id=" . $row['id'] . "'>Edit</a> | 
          <a OnClick=\"return confirm('Yakin ingin menghapus?');\" href=\'app.php?page=delete_meeting&id=" . $row['id'] . "'\>Hapus</a> |
          <a href='app.php?page=sync_google_calendar&id=" . $row['id'] . "'>Sync</a>
          </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </section>
</body>
</html>