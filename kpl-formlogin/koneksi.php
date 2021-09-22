<?php
    $host 		= 'localhost';
	$user 		= 'root';
	$password	= '';
	$namadb 	= 'db_nepot';
	
	$koneksi = new mysqli($host,$user,$password,$namadb);
	
	// if($koneksi->connect_error){
	// 	die('Koneksi Gagal'.$koneksi->connect_error);
	// } else{
    //     // echo "Koneksi Berhasil";
    // }

	// TRY AND CATCH
if ($koneksi= true){
    try {
        echo "koneksi berhasil";
        header('location: index.php');
        exit;
    } catch (Exception $error) {
        echo "<script>
        alert ('" . $error->getMessage() . "');
            document.location.href = 'login.php';
        </script>";
    }
}