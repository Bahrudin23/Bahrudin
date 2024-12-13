<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Tambahkan baris ini -->
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <form method="post" action="edit_aksi.php">
        <table>
            <tr>            
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required><?php echo $d['alamat']; ?></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="Laki-laki" <?php if ($d['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if ($d['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>        
        </table>
    </form>
</body>
</html>
<?php 
}
?>