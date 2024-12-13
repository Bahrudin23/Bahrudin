<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi, "insert into siswa values('', '$nama', '$alamat', '$jenis_kelamin')");

header("location:index.php");
?>