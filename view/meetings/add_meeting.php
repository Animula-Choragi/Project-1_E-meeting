<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Meeting</title>
  <style>

    .meeting-editor {
      display: flex;
      width: 100%;
      padding: 30px 0;
      gap: 20px 0;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .meeting-form-container {
      display: flex;
      gap: 25px 0;
      flex-direction: column;
      width: 80%;
    }

    .input-group {
      margin: 30px 0;
    }

    .row-inputs {
      display: flex;
      gap: 0 30px;
    }

    .input-field {
      display: flex;
      width: 100%;
      flex-direction: column;
      gap: 8px 0;
    }

    .input-field input {
      height: 48px;
      font-size: 1rem;
      padding: 10px;
      border: 1px solid black;
      border-radius: 8px;
    }

    .input-field textarea {
      padding: 10px;
      border: 1px solid black;
      border-radius: 8px;
    }

    .meeting-btn {
      display: flex;
      justify-content: flex-end;
      gap: 20px;
      margin: 50px 0;
    }

    .meeting-btn button {
      width: 150px;
      padding: 10px;
      font-size: 15px;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      opacity: 0.9;
    }

    .meeting-btn-main {
      border: 1px solid #008080;
      background-color: #2a5d84;
      color: #fff;
    }

    .meeting-btn-dua {
      border: 1px solid gray;
      background-color: #fff;
      color: #000;
    }

    /* Hover effects */
    button:hover {
      opacity: 1;
    }

    /* Active/pressed state */
    button:active {
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.2);
      transform: translateY(1px);
    }

    @media (max-width: 768px) {
      .row-inputs {
        flex-direction: column;
        gap: 20px 0; /* gap vertikal 20px, horizontal 0 */
      }
      .full-width-input {
        margin: 15px 0;
      }
      .meeting-btn {
        flex-direction: column;
        gap: 20px 0;
      }
      .meeting-btn button {
        width: 100%;
      }
    }

  </style>
</head>
<body>

  <main class="meeting-editor">
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
            <input type="text" name="title" id="title" required>
          </div>
          <div class="input-field">
            <label for="location">
              Lokasi
            </label>
            <input type="text" name="location" id="location">
          </div>
        </div>
        <div class="input-group full-width-input">
          <div class="input-field">
            <label for="description">
              Deskripsi
            </label>
            <textarea name="description" id="description" rows="8"></textarea>
          </div>
        </div>
        <div class="input-group row-inputs">
          <div class="input-field">
            <label for="start_date">
              Awal Meeting
            </label>
            <input type="datetime-local" name="start_date" id="start_date" required>
          </div>
          <div class="input-field">
            <label for="end_date">
              Akhir Meeting
            </label>
            <input type="datetime-local" name="end_date" id="end_date" required>
          </div>
        </div>
        <div class="input-group full-width-input">
          <div class="input-field">
            <label for="email">
              Guest E-mail
            </label>
            <input type="email" name="guest" id="email" placeholder="Guest E-mail (pisahkan dengan koma jika lebih dari satu)" multiple>
          </div>
        </div>

        <div class="meeting-btn">
          <button class="meeting-btn-dua" onclick="window.location.href='app.php?page=list_meetings';return false;">Batal</button>
          <button class="meeting-btn-main" type="submit">Buat E-meeting</button>
        </div>
      </form>

    </section>
  </main>

</body>
</html>
