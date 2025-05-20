
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $t = date(format: "H");
        echo "if <br>";
        if ($t < 16){
            echo "Selamat siang";
        }

        echo "<br> if dan else <br>";
        if ($t < 20){
            echo "selamat siang";
        } else {
            echo "selamat malam";
        }

        echo "<br> Nested If <br>";
        if ($t < 12){
            echo "Selamat pagi";
        } elseif ($t < 16) { 
            echo "Selamat sore"; 
        } else { echo "Selamat malam"; }
    ?>
</body>
</html>
