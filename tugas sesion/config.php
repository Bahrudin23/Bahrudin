<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugas_sesion";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>