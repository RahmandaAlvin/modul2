
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
        echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . "." ;

        echo "saya suka " . $namaBuah[Mangga];
        echo "saya suka " . $namaBuah[jeruk];
        echo "saya suka " . $namaBuah[Apel];
        echo "saya suka " . $namaBuah[Melon];

        $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun");
        $umur['ahmad']="50 Tahun";
        echo "Umur andi adalah " . $umur['Andi'];
        echo $umur['Andi'] . " " . $umur['Ben'] . " " . $umur['Joe'] . " " . $umur['ahmad'] . "." ;
    ?>
</body>
</html>
