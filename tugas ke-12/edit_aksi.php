<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi, "update siswa set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin' where id='$id'");

header("location:index.php");
?>