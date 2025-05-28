<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
    include("koneksi.php");

    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}

// redirect ke halaman utama
header("location:viewdosen.php");
exit;
?>
