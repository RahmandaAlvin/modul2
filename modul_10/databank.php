<?php
require_once ('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);
$data2 = new akunBank("002", 10000);
$data1->setNama("Joko");
$data1->tambahUang(50000);
echo "<h1>Akun 1</h1>";
echo "Nomor Akun: " . $data1->getAccountNumber() . "<br>";
echo "Nama: " . $data1->getNama() . "<br>";
echo "Saldo: Rp " . $data1->tampilkanSaldo() . "<br>";
echo "Pajak: Rp " . $data1->hitungPajak() . "<br><br>";


$data2->setNama("Rahmanda Alvin");
$data2->tambahUang(20000);
echo "<h1>Akun 2</h1>";
echo "Nomor Akun: " . $data2->getAccountNumber() . "<br>";
echo "Nama: " . $data2->getNama() . "<br>";
echo "Saldo: Rp " . $data2->tampilkanSaldo() . "<br>";
echo "Pajak: Rp " . $data2->hitungPajak() . "<br><br>";


echo "<h2>Saldo Setelah Pengurangan</h2>";
echo "Saldo akun 1 sekarang adalah: Rp " . $data1->tampilkanSaldo() . "<br>";
echo "Saldo akun 2 sekarang adalah: Rp " . $data2->tampilkanSaldo();
