<?php
// Mengganti dengan informasi koneksi ke database
$host = 'nengputri'; 
$username = 'Nengputrinurazizah';
$password = '12345678';
$database = '2106092_Nengputrinurazizah';

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Memproses data dari formulir jika ada data yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $password = $_POST['password'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $jumlah = $_POST['jumlah'] ?? '';

    // Melakukan sanitasi input untuk mencegah SQL Injection
    $nama = mysqli_real_escape_string($conn, $nama);
    $password = mysqli_real_escape_string($conn, $password);
    $tanggal = mysqli_real_escape_string($conn, $tanggal);
    $jumlah = mysqli_real_escape_string($conn, $jumlah);

    // Query untuk menyimpan data ke dalam tabel
    $sql = "INSERT INTO project_data (nama_project, deskripsi, tanggal_mulai, status_project, jumlah_anggota) 
            VALUES ('$nama', '$password', '$tanggal', 'On Going', '$jumlah')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi ke database
$conn->close();
?>
