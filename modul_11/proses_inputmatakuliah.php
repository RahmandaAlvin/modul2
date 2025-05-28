<?php
include 'koneksi.php';

if (isset($_POST["kodeMK"])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    // Cek apakah kodeMK sudah ada
    $cek = mysqli_query($link, "SELECT * FROM t_matakuliah WHERE kodeMK = '$kodeMK'");
    if (mysqli_num_rows($cek) > 0) {
        die("Kode Mata Kuliah '$kodeMK' sudah digunakan!");
    }

    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES ('$kodeMK','$namaMK', '$sks', '$jam')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("Location: view_matakuliah.php");
exit;
?>
