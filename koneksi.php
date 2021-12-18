<?php
$con = mysqli_connect("localhost","root","","monitoringkolamikan");
 
// Melihat koneksi error atau tidak
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>