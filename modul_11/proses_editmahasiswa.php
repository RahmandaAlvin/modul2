<?php
include 'koneksi.php';

// Mengecek apakah form telah disubmit
if (isset($_POST['edit'])) {
    // Ambil data dari form
    $npm_lama = $_POST['npm_lama'];
    $npm = $_POST['npm'];
    $nama = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    // Query update data
    $query = "UPDATE t_mahasiswa SET 
                npm = '$npm',
                namaMhs = '$nama',
                prodi = '$prodi',
                alamat = '$alamat',
                noHP = '$noHP'
              WHERE npm = '$npm_lama'";

    $result = mysqli_query($link, $query);

    // Cek apakah query berhasil
    if ($result) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location='view_mahasiswa.php';
              </script>";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($link);
    }
} else {
    echo "Akses tidak sah.";
}
?>
