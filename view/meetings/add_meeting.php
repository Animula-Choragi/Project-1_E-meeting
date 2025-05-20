<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Meeting</title>
</head>
<body>

  <main class="meeting-page">
    <section class="page-header">
      <h1>Add e-Meeting</h1>
    </section>
    <section class="meeting-form-container">
      <form action="app.php?page=process_meeting" method="POST">
        <div class="input-group row-inputs">
          <div class="input-field">
            <label for="title">
              Judul Meeting
            </label>
            <input class="form-input" type="text" name="title" id="title" required>
          </div>
          <div class="input-field">
            <label for="location">
              Lokasi
            </label>
            <input class="form-input" type="text" name="location" id="location">
          </div>
        </div>
        <div class="input-group full-width-input">
          <div class="input-field">
            <label for="description">
              Deskripsi
            </label>
            <textarea class="form-textarea" name="description" id="description" rows="8"></textarea>
          </div>
        </div>
        <div class="input-group row-inputs">
          <div class="input-field">
            <label for="start_date">
              Awal Meeting
            </label>
            <input class="form-input" type="datetime-local" name="start_date" id="start_date" required>
          </div>
          <div class="input-field">
            <label for="end_date">
              Akhir Meeting
            </label>
            <input class="form-input" type="datetime-local" name="end_date" id="end_date" required>
          </div>
        </div>
        <div class="input-group full-width-input">
          <div class="input-field">
            <label for="email">
              Guest E-mail
            </label>
            <input class="form-input" type="email" name="guest" id="email" placeholder="Guest E-mail (pisahkan dengan koma jika lebih dari satu)" multiple>
          </div>
        </div>

        <div class="meeting-actions">
          <button class="btn btn-secondary text-bold" onclick="window.location.href='app.php?page=list_meetings';return false;">Batal</button>
          <button class="btn btn-primary text-bold">Buat E-meeting</button>
        </div>
      </form>

    </section>
  </main>

</body>
</html>
