
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(
            "1C" =>array("udin", "ismail", "adi"),
            "1D" =>array("lukman", "fajri", "mahmud")
        );


        print_r($array);

        print_r($array['1D']);

        echo $array['1D'][0];
        echo $array['1D'][1];
        echo $array['1C'][2];

        $array_simple = [
            "1c" =>["udin", "ismail", "adi"],
            "1D" =>["lukman", "fajri", "mahmud"]
        ];
    ?>
</body>
</html>
