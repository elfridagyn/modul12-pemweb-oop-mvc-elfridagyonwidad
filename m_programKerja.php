<?php
require "koneksiMVC.php";

class m_programKerja {

    public function getSemuaProgramKerja() {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker");
        $data = [];
        while ($row = $rs->fetch_assoc()) $data[] = $row;
        return $data;
    }

    public function getProgramById($id) {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker WHERE nomorProgram='$id' LIMIT 1");
        return $rs->fetch_assoc();
    }

    public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {
        global $mysqli;
        return $mysqli->query(
            "INSERT INTO proker VALUES('$nomorProgram','$namaProgram','$suratKeterangan')"
        );
    }

    public function updateProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {
        global $mysqli;
        return $mysqli->query(
            "UPDATE proker SET namaProgram='$namaProgram', suratKeterangan='$suratKeterangan'
             WHERE nomorProgram='$nomorProgram'"
        );
    }

    public function deleteProgramKerja($nomorProgram) {
        global $mysqli;
        return $mysqli->query(
            "DELETE FROM proker WHERE nomorProgram='$nomorProgram'"
        );
    }
}
?>
