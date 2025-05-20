
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);
        foreach ($angka as $value){
            if ($value % 2 == 0){
                echo "Nomor : $value Genap <br>";
            } else {
                echo "Nomor : $value Ganjil <br>";
            }
            
        }
    ?>
</body>
</html>
