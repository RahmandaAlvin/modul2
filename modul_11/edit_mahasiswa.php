<?php
include 'koneksi.php';

if (isset($_GET['npm'])){
    $npm = $_GET["npm"];
    $query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);
    if(!$result) {
        die ("Query Error: ".mysqli_errno($link). " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $npm = $data["npm"];
    $namaMahasiswa = $data["namaMhs"];
    $prodi = $data["prodi"];
    $alamat = $data["alamat"];
    $noHP = $data["noHP"];
} else {
    header("location:view_mahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa</legend>
                <input type="hidden" name="npm_lama" value="<?php echo $npm; ?>">
                <p>
                    <label for="npm">NPM: </label>
                    <input type="text" name="npm" value="<?php echo $npm; ?>">
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa : </label>
                    <input type="text" name="namaMhs" value="<?php echo $namaMahasiswa; ?>">
                </p>
                <p>
                    <label for="prodi">Program Studi: </label>
                    <input type="text" name="prodi" value="<?php echo $prodi; ?>">
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <input type="text" name="alamat" value="<?php echo $alamat; ?>">
                </p>
                <p>
                    <label for="noHP">No HP: </label>
                    <input type="text" name="noHP" value="<?php echo $noHP; ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
