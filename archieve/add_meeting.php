<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Meeting</title>
  <style>
      section {
        height: 280px;
        padding: 30px;
        justify-content: center;
        align-items: center;
      }

      section h2 {
        text-align: center;
      }

      section form {
        text-align: center;
      }

  </style>
</head>
<body>
  <section>
    <h2>Add Meeting</h2> <br /> <br /> <br /> <br />

    <form action="app.php?page=process_meeting" method="POST">
      
      <label for="title">Judul Meeting: </label>
      <input type="text" name="title" id="title" required> <br /> <br />

      <label for="description">Deskripsi: </label>
      <textarea name="description" id="description"></textarea> <br /> <br />

      <label for="start_date">Awal Meeting: </label>
      <input type="datetime-local" name="start_date" id="start_date" required> <br /> <br />

      <label for="end_date">Akhir Meeting: </label>
      <input type="datetime-local" name="end_date" id="end_date" required> <br /> <br />
      
      <label for="email">Guest E-mail: </label>
      <input type="email" name="guest" id="email" multiple> <br /> <br />

      <label for="location">Lokasi: </label>
      <input type="text" name="location" id="location"> <br /> <br />

      <button type="submit">Simpan Jadwal</button>

    </form>
  </section>
</body>
</html>
