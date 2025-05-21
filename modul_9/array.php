<?php
$data = [
    ["nama" => "Alvin", "umur" => 19],
    ["nama" => "pandu", "umur" => 19],
    ["nama" => "awa", "umur" => 29],
    ["nama" => "Bimo", "umur" => 23],
    ["nama" => "Diva", "umur" => 20],
    ["nama" => "Jarwo", "umur" => 22],
    ["nama" => "Rafid", "umur" => 25],
    ["nama" => "jack", "umur" => 21],
    ["nama" => "Fahrizal", "umur" => 19],
    ["nama" => "izul", "umur" => 24],
    ["nama" => "dontol", "umur" => 21],
    ["nama" => "rusdi", "umur" => 22],
    ["nama" => "dimas", "umur" => 20],
    ["nama" => "adi", "umur" => 23],
    ["nama" => "nugroho", "umur" => 18],
];


$json = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";
