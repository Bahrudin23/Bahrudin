<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Tambahkan baris ini -->
</head>
<body>
    <h2>Data Siswa</h2>
    <br/>
    <a href="tambah.php">Tambah Data</a>
    <br/>
    <br/>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Opsi</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['jenis_kelamin']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>