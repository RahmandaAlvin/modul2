<?php

require_once('kelas/Manusia.php');

$andi=new Manusia();
$andi->setNama("Andi Pratama");

$budi=new Manusia();
$budi->setNama("Budi Santoso");

echo($andi->getNama());
echo("<br>");

$NIK=new Manusia();
echo($NIK->getNIK());
echo("<br>");
$adi=new Manusia();
$adi->setNama("Rahmanda Alvin");

echo($adi->getNama());
echo("<br>");

$umurSaya=new Manusia();
$umurSaya->setUmur(18);
echo($umurSaya->getUmur());
?>