<?php
session_start();
if ($_SESSION["role"] !== "kepala") die("Akses ditolak.");

require "m_programKerja.php";
$model = new m_programKerja();

$id = $_GET["id"];
$data = $model->getProgramById($id);
?>
<!DOCTYPE html>
<html>
<body>
<h3>Edit Program Kerja</h3>

<form method="POST">
    Nomor Program: <input name="nomor" value="<?= $data['nomorProgram'] ?>" readonly><br><br>
    Nama Program: <input name="nama" value="<?= $data['namaProgram'] ?>"><br><br>
    Surat Keterangan: <input name="surat" value="<?= $data['suratKeterangan'] ?>"><br><br>
    <button name="submit">Update</button>
</form>

<?php
if (isset($_POST["submit"])) {
    $model->updateProgramKerja($_POST["nomor"], $_POST["nama"], $_POST["surat"]);
    header("Location: index.php");
}
?>
</body>
</html>
