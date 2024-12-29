
<?php
$servername = "localhost"; // atau alamat server database Anda
$username = "root"; // username database
$password = ""; // password database (kosong jika default pada XAMPP)
$database = "sql_web_3"; // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "";
}
?>
