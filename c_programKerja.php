<?php
session_start();
require "m_programKerja.php";

class c_programKerja {
    public $model;

    public function __construct() {
        $this->model = new m_programKerja();
    }

    public function invoke() {

        // wajib login
        if (!isset($_SESSION['role'])) {
            header("Location: login.php");
            exit();
        }

        // jika hapus → hanya kepala departemen
        if (isset($_GET["hapus"])) {
            if ($_SESSION["role"] !== "kepala") {
                die("Akses ditolak (Hanya Kepala Departemen).");
            }
            $this->model->deleteProgramKerja($_GET["hapus"]);
            header("Location: index.php");
            exit();
        }

        // tampilkan list
        $proker = $this->model->getSemuaProgramKerja();
        include "v_programKerja.php";
    }
}
?>
