
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pecahan Uang</title>
</head>
<body>
    <?php
        $tabunganAni = 1387500;

        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
        $hasil = [];

        foreach ($pecahan as $nilai) {
            $jumlah = intdiv($tabunganAni, $nilai); // hitung berapa lembar
            $hasil[$nilai] = $jumlah; // simpan jumlah lembar
            $tabunganAni = $tabunganAni % $nilai; // update sisa uang
        }

        echo "<h2>Pecahan uang yang diperoleh Ani:</h2>";
        echo "<ul>";
        foreach ($hasil as $pecahan => $jumlah) {
            if ($jumlah > 0) {
                echo "<li>Rp. " . number_format($pecahan, 0, ',', '.') . ": " . $jumlah . " lembar</li>";
            }
        }
        echo "</ul>";
    ?>
</body>
</html>
