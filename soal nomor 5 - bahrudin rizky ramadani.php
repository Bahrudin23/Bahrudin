<?php
$nilai = [80, 90, 75, 85, 100];

$total = 0;

foreach ($nilai as $n) {
    $total += $n;
}

$rataRata = $total / count(value: $nilai);

echo "Jumlah total nilai: $total\n";
echo "Rata-rata nilai: $rataRata\n";
?>
