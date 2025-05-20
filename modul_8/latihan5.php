<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $warna = "merah";
        switch ($warna){
            case 'merah':
                echo "warna adalah warna merah";
                break;
            case "kuning":
                echo "warna adalah warna kuning";
                break;
            case "hijau":
                echo "warna adalah warna hijau";
                break;
            default:
                echo "warna tidak dikenali";
        }
        echo "<br>";
    ?>
</body>
</html>
