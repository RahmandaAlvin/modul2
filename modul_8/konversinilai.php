
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Konversi Nilai dari angka ke huruf <br>";

        $nilai = 85; // Contoh nilai
        if ($nilai >= 90) {
            echo "A";
        } elseif ($nilai >= 80) {
            echo "B";
        } elseif ($nilai >= 70) { 
            echo "C"; 
        } elseif ($nilai >= 60) { 
            echo "D"; 
        } else { 
            echo "E"; 
        }
        
        echo "Nilai Anda adalah: " . $nilai;
    ?>
</body>
</html>
