<?php
require "koneksiMVC.php";

class m_user {

    public function cekLogin($username, $password) {
        global $mysqli;
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $res = $mysqli->query($sql);
        return ($res && $res->num_rows > 0) ? $res->fetch_assoc() : false;
    }
}
?>
