<?php
require_once "../Database.php";
require_once "../Query/Dosen.php";

$db = (new Database())->connection();
$dosen = new Dosen($db);

$dataDosen = $dosen->getAll(); // <-- tidak ada $data, pakai $dataDosen
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dosen</title>
</head>
<body>
    <h2>Daftar Dosen</h2>
    <a href="input_dosen.php">+ Tambah Dosen</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($dataDosen)): ?>
                <?php foreach ($dataDosen as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['idDosen']) ?></td>
                        <td><?= htmlspecialchars($row['namaDosen']) ?></td>
                        <td><?= htmlspecialchars($row['noHP']) ?></td>
                        <td>
                            <a href="input_dosen.php?edit=<?= $row['idDosen'] ?>">Edit</a> |
                            <a href="hapus_dosen.php?id=<?= $row['idDosen'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">Tidak ada data dosen.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
