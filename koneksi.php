<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sadhana";

// Membuat koneksi dengan model Object-Oriented
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    // Jika gagal, hentikan script dan tampilkan error
    die("Connection failed: " . $conn->connect_error);
}

// Catatan: Jangan gunakan 'echo Connected successfully' di sini 
// agar tidak muncul tulisan mengganggu di tampilan website.
?>