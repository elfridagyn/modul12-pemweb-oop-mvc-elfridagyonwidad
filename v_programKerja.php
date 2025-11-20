<!DOCTYPE html>
<html>
<body>
<h2>Daftar Program Kerja</h2>

<p>Login sebagai: <b><?= $_SESSION["role"] ?></b> | 
<a href="logout.php">Logout</a></p><br>

<?php if ($_SESSION["role"] == "kepala"): ?>
    <a href="tambahProker.php">➕ Tambah Program Kerja</a><br><br>
<?php endif; ?>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama Program</th>
        <th>Surat Keterangan</th>

        <?php if ($_SESSION["role"] == "kepala"): ?>
            <th>Aksi</th>
        <?php endif; ?>
    </tr>

    <?php foreach ($proker as $p): ?>
    <tr>
        <td><?= $p["nomorProgram"] ?></td>
        <td><?= $p["namaProgram"] ?></td>
        <td><?= $p["suratKeterangan"] ?></td>

        <?php if ($_SESSION["role"] == "kepala"): ?>
        <td>
            <a href="editProker.php?id=<?= $p['nomorProgram'] ?>">Edit</a> |
            <a href="index.php?hapus=<?= $p['nomorProgram'] ?>"
               onclick="return confirm('Hapus?')">Delete</a>
        </td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
