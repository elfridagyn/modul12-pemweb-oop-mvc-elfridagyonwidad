<?php
session_start();
if ($_SESSION["role"] !== "kepala") die("Akses ditolak.");

require "m_programKerja.php";
$model = new m_programKerja();

if (isset($_POST["submit"])) {
    $model->setProgramKerja($_POST["nomor"], $_POST["nama"], $_POST["surat"]);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h3>Tambah Program Kerja</h3>

<form method="POST">
    Nomor Program: <input name="nomor"><br><br>
    Nama Program: <input name="nama"><br><br>
    Surat Keterangan: <input name="surat"><br><br>
    <button name="submit">Simpan</button>
</form>

</body>
</html>
