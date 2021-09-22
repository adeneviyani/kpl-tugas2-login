<?php
include("koneksi.php");
$email=$_POST['email'];
$password=$_POST['password'];
$perintah="SELECT * FROM t_user WHERE email='$email' AND password='$password' ";
$hasil=$koneksi->query($perintah);
if ($hasil->num_rows > 0){
    $data=$hasil->fetch_array();
    $email=$data['email'];
    $password=$data['password'];
    echo"login berhasil";
}
else{
    echo"login gagal";
}