<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $day1 = "Sunday";
        $day2 = "Monday";
        $day3 = "Tuesday";
        $day4 = "Wednesday";
        $day5 = "Thursday";
        $day6 = "Friday";
        $day7 = "Saturday";

        $daysOfWeek = [$day1, $day2, $day3, $day4, $day5, $day6, $day7];

        echo implode(", ", $daysOfWeek);
    ?>
</body>
</html>