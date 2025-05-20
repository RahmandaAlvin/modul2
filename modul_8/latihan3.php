<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 10;

    echo "penambahan ".$x + $y."<br>";
    echo "pengurangan ".$x - $y."<br>";
    echo "perkalian ".$x * $y."<br>";
    echo "pembagian ".$x / $y."<br>";
    echo "modulus ".$x % $y."<br>";
    echo "eksponensial ".$x ** $y."<br>";
    echo("<br>");

    $x += 2;
    $y *= 2;
    echo "penambahan x".$x.'<br>';
    echo "perkalian y".$y.'<br>';
    echo("<br>");

    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++.'<br>';
    echo "Isi x = ".$x."<br>";
    echo("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";
    echo("<br>");

    $user = "Andi darmawan";

    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";

    echo $color = $color ?? "red";
    ?>
</body>
</html>