<?php
include "koneksi.php";
$email=$_POST['emailbaru'];
$password=$_POST['passwordbaru'];
$perintah="INSERT INTO t_user VALUES ('','" . addslashes($email) . "','" . addslashes($password) . "') ";
$hasil=$koneksi->query($perintah);
echo "user berhasil di tambahkan";