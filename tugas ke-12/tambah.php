<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Tambahkan baris ini -->
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>            
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
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