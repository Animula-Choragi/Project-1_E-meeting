<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Meeting</title>
  <style>

    .add-meet {
      display: flex;
      width: 100%;
      padding: 30px 0;
      gap: 20px 0;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .form-page {
      display: flex;
      gap: 25px 0;
      flex-direction: column;
      width: 80%;
    }

    .form-input {
      margin: 30px 0;
    }

    .two-form {
      display: flex;
      gap: 0 30px;
    }

    .form-user {
      display: flex;
      width: 100%;
      flex-direction: column;
      gap: 8px 0;
    }

    .form-user input {
      height: 48px;
      font-size: 1rem;
      padding: 10px;
      border: 1px solid black;
      border-radius: 8px;
    }

    .form-user textarea {
      padding: 10px;
      border: 1px solid black;
      border-radius: 8px;
    }

    .tombol {
      display: flex;
      justify-content: flex-end;
      gap: 20px;
      margin: 50px 0;
    }



    .tombol button {
      width: 150px;
      padding: 10px;
      font-size: 15px;
      font-weight: bold;
      border-radius: 8px;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      opacity: 0.9;
    }

    .tombol-main {
      border: 1px solid #008080;
      background-color: #2a5d84;
      color: #fff;
    }

    .tombol-dua {
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
      .two-form {
        flex-direction: column;
        gap: 20px 0; /* gap vertikal 20px, horizontal 0 */
      }
      .single-form {
        margin: 15px 0;
      }
      .tombol {
        flex-direction: column;
        gap: 20px 0;
      }
      .tombol button {
        width: 100%;
      }
    }

  </style>
</head>
<body>

  <main class="add-meet">
    <section class="title">
      <h1>Add e-Meeting</h1>
    </section>
    <section class="form-page">
      <form action="app.php?page=process_meeting" method="POST">
        <div class="form-input two-form">
          <div class="form-user">
            <label for="title">
              Judul Meeting
            </label>
            <input type="text" name="title" id="title" required>
          </div>
          <div class="form-user">
            <label for="location">
              Lokasi
            </label>
            <input type="text" name="location" id="location">
          </div>
        </div>
        <div class="form-input single-form">
          <div class="form-user">
            <label for="description">
              Deskripsi
            </label>
            <textarea name="description" id="description" rows="8"></textarea>
          </div>
        </div>
        <div class="form-input two-form">
          <div class="form-user">
            <label for="start_date">
              Awal Meeting
            </label>
            <input type="datetime-local" name="start_date" id="start_date" required>
          </div>
          <div class="form-user">
            <label for="end_date">
              Akhir Meeting
            </label>
            <input type="datetime-local" name="end_date" id="end_date" required>
          </div>
        </div>
        <div class="form-input single-form">
          <div class="form-user">
            <label for="email">
              Guest E-mail
            </label>
            <input type="email" name="guest" id="email" multiple>
          </div>
        </div>

        <div class="tombol">
          <button class="tombol-dua" onclick="window.location.href='app.php?page=list_meetings';return false;">Batal</button>
          <button class="tombol-main" type="submit">Buat E-meeting</button>
        </div>
      </form>

    </section>
  </main>

</body>
</html>
