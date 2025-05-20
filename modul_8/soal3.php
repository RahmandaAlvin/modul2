
<?php
// Data siswa menggunakan array asosiatif
$siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Adi"],
    ["no" => 2, "poin" => 80, "nama" => "Joni"],
    ["no" => 3, "poin" => 65, "nama" => "Jihan"],
    ["no" => 4, "poin" => 70, "nama" => "Aya"],
    ["no" => 5, "poin" => 85, "nama" => "Ita"],
    ["no" => 6, "poin" => 90, "nama" => "Budi"],
    ["no" => 7, "poin" => 95, "nama" => "Tini"],
    ["no" => 8, "poin" => 65, "nama" => "Sari"],
];

// a) Tampilkan poin siswa dengan nomor urut 5
echo "<b>a)</b> Poin siswa dengan nomor urut 5:<br>";
foreach ($siswa as $data) {
    if ($data["no"] == 5) {
        echo "Nama: {$data['nama']}, Poin: {$data['poin']}<br>";
        break;
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<br><b>b)</b> Siswa dengan poin 90:<br>";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 90) {
        echo $data["nama"] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 90<br>";
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<br><b>c)</b> Siswa dengan poin 100:<br>";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 100) {
        echo $data["nama"] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 100<br>";
}
?>
