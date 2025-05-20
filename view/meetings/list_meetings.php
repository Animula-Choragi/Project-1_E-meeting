<?php
$result = $conn->query("SELECT * FROM meetings ORDER BY start_date ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Meeting</title>
</head>
<body>
  <main class="meeting-page">
    <section class="page-header">
      <h2>List e-Meeting</h2>
    </section>
    <section class="meeting-list-container">
      <div class="table-actions">
        <button>
          <a href="app.php?page=add_meeting">
    
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 15 16">
    
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          
          </svg>
           
          </a>
        </button>
      </div>
      <div class="table-list">
        <table class="meetings-table">
            <thead class="table-header">
              <tr>
                <th class="table-header-cell">Judul</th>
                <th class="table-header-cell">Awal meeting</th>
                <th class="table-header-cell">Akhir meeting</th>
                <th class="table-header-cell">E-mail Guest</th>
                <th class="table-header-cell">Lokasi</th>
                <th class="table-header-cell">Aksi</th>
              </tr>
            </thead>
            <tbody class="table-body">
              <?php
              while ($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td class="table-body-cell"><?= $row['title'];  ?></td>

                  <td  class="table-body-cell"><?= date('d F Y', strtotime($row['start_date']));  ?><span class="time-block"><?= date('H:i', strtotime($row['start_date']));  ?></span></td>

                  <td  class="table-body-cell"><?= date('d F Y', strtotime($row['end_date']));  ?><span class="time-block"><?= date('H:i', strtotime($row['end_date']));  ?></span></td>

                  <td  class="table-body-cell"><?= str_replace(',', ', ', $row['guest']); ?></td>

                  <td  class="table-body-cell"><?= $row['location'];  ?></td>

                  <td  class="table-body-cell">
                    <a class="action-link action-edit" href='app.php?page=edit_meeting&id=<?= $row['id'] ?>'>✏️ Edit</a> 

                    <a class="action-link action-delete" OnClick="return confirm('Yakin ingin menghapus?');" href='app.php?page=delete_meeting&id=<?= $row['id'] ?>'>🗑️ Hapus</a> 

                    <a class="action-link action-sync" href='app.php?page=sync_google_calendar&id=<?= $row['id'] ?>'>🔄 Sync</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
        </table>
      </div>
    </section>
  </main>
</body>
</html>