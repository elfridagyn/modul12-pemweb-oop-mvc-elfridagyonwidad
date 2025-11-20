<?php
$mysqli = new mysqli("localhost", "root", "", "prokerdb");

if ($mysqli->connect_errno) {
    echo "Gagal konek MySQL: " . $mysqli->connect_error;
    exit();
}
?>
