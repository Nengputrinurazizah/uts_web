<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pemesanan Tiket Bioskop</title>
  <style>
    /* Style untuk mempercantik tampilan form (opsional) */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"], input[type="number"], select, textarea, input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h2>Form Pemesanan Tiket Bioskop</h2>

  <form action="proses_pemesanan.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="film">Pilih Film:</label>
    <select id="film" name="film">
      <option value="film1">Judul Film 1</option>
      <option value="film2">Judul Film 2</option>
      <option value="film3">Judul Film 3</option>
      <!-- Tambahkan judul film lainnya jika diperlukan -->
    </select>

    <label for="jumlah_tiket">Jumlah Tiket:</label>
    <input type="number" id="jumlah_tiket" name="jumlah_tiket" min="1" required>

    <label for="catatan">Catatan Tambahan:</label>
    <textarea id="catatan" name="catatan" rows="4"></textarea>

    <input type="submit" value="Pesan Tiket">
  </form>

</body>
</html>
