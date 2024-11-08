<!-- 1. Fungsi PHP -->
<!DOCTYPE html>
<html>
<head>
    <title>Contoh list dengan PHP</title>
</head>
<body>
    <h2>Daftar Absensi Mahasiswa</h2>
    <ol>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>Nama Mahasiswa ke-$i</li>";
        }
        ?>
    </ol>

    <!-- ====================================== -->

    <!-- 2. Penulisan Kode PHP -->
    <?php echo "Hello, world"; ?>

    <? echo "Hello, world"; ?>
    <br>

    <!-- ====================================== -->

    <!-- 3. Aturan Dasar Penulisan Kode PHP -->
    <?php
    Echo "Hello World<br>";
    ECHO "Hello World<br>";
    EcHo "Hello World<br>";

    $sandi = "Andi";
    echo $sandi; // Menggunakan variabel $sandi yang didefinisikan
    ?>
    <br>

    <!-- ====================================== -->

    <!-- 4. Pengertian Variabel dan Cara Penulisan Variabel PHP -->
    <?php
    $variabelBenar = "Benar";
    $sumur = 21; 
    $saya = "Nama Saya";
    echo "$variabelBenar<br>";
    echo "$sumur<br>";
    echo "$saya<br>";
    ?>
    <br>

    <!-- ====================================== -->

    <!-- 5. Cara Menampilkan Nilai Variabel -->
    <?php
    $a = "Saya Sedang belajar PHP";
    $b = 5;

    echo "$a<br>"; // Output: Saya Sedang belajar PHP
    echo "$b<br>"; // Output: 5
    ?>
    <br>

    <!-- ====================================== -->

    <!-- 6. Pengertian Tipe Data PHP “Integer” -->
    <?php
    $sumur = 21;
    $harga = 15000;
    $rugi = -500000;
    $a = 14;
    $b = 16;

    echo "$sumur<br>"; // Output: 21
    echo "$harga<br>"; // Output: 15000
    $c = $a + $b;
    echo "$c<br>"; // Output: 30
    echo "$rugi<br>"; // Output: -500000
    $d = $a * $b;
    echo "$d<br>"; // Output: 224
    ?>
    <br>

    <!-- ====================================== -->

    <!-- 7. Pengertian Tipe Data PHP “Float” -->
    <?php
    $angka_float1 = 0.78;
    $angka_float2 = 14.99;
    $angka_scientific1 = 3.14;
    $angka_scientific2 = 0.0003365;

    echo "$angka_float1<br>"; // Output: 0.78
    echo "$angka_float2<br>"; // Output: 14.99
    echo "$angka_scientific1<br>"; // Output: 3.14
    echo "$angka_scientific2<br>"; // Output: 0.0003365

    $a = 10.66;
    $b = 12.4;
    $c = $a + $b;
    echo "$c<br>"; // Output: 23.06

    $d = $a / $b;
    echo "$d<br>"; // Output: 0.85967741935484
    ?>
    <br>

    <!-- ====================================== -->

    <!-- 8. Pengertian Tipe Data PHP “String” -->
    <?php
    $string1 = 'Ini adalah string sederhana';
    $string2 = "Ini adalah string yang bisa memiliki beberapa baris";
    $string3 = 'Dia berkata: "I\'ll be back"';

    echo "$string1<br>";
    echo "$string2<br>";
    echo "$string3<br>";
    ?>
    <br>

    <!-- ====================================== -->

    <!-- 9. Pengertian Tipe Data PHP “Boolean” -->
    <?php
    $benar = true;
    $salah = false;

    echo "benar: $benar, salah: $salah"; // Output: benar: 1, salah: 
    ?>
    <br><br>

    <!-- ====================================== -->

    <!-- 10. Operasi Matematika -->
    <?php 
    $hasil1 = 1 - 3;
    $hasil2 = 3 + 5;
    $hasil3 = 8 - 4.5;
    $hasil4 = 2 * 5;
    $hasil5 = 3 + 8 / 5 - 3;
    $hasil6 = 10 % 4;

    echo "$hasil1: "; 
    var_dump($hasil1); 
    echo "<br />"; 

    echo "$hasil2: "; 
    var_dump($hasil2); 
    echo "<br />"; 

    echo "$hasil3: "; 
    var_dump($hasil3);
    echo "<br />"; 

    echo "$hasil4: "; 
    var_dump($hasil4);
    echo "<br />"; 

    echo "$hasil5: "; 
    var_dump($hasil5); 
    echo "<br />"; 

    echo "$hasil6: "; 
    var_dump($hasil6); 
    ?>
    <br>

    <!-- ====================================== -->

    <!-- Tugas PHP -->
    <?php
    $pemasukan = 50000000;
    $hutang_a = 16500000;
    $bunga_a = 5 / 100 * $hutang_a; 
    $hutang_b = 9500000;
    $bunga_b = 4.5 / 100 * $hutang_b; 

    $total_bunga = $bunga_a + $bunga_b;
    $total_hutang = $hutang_a + $bunga_a + $hutang_b + $bunga_b;
    $sisa_uang = $pemasukan - $total_hutang;

    echo "Jumlah total bunga hutang: Rp " . number_format($total_bunga, 2, ',', '.') . "<br>";
    echo "Jumlah total hutang (pokok + bunga): Rp " . number_format($total_hutang, 2, ',', '.') . "<br>";
    echo "Sisa uang: Rp " . number_format($sisa_uang, 2, ',', '.');
    ?>
</body>
</html>