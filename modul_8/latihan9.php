
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function writeMsg($nama){
            echo "Selamat Datang ". $nama. " <br>";
        }
        writeMsg("Rahmanda Alvin");

        function tambah(int $angka1, int $angka2){
            $a= $angka1 + $angka2;
            return $a;
        }

        $hasil=tambah(5, 4);
        echo ($hasil);
    ?>
</body>
</html>
