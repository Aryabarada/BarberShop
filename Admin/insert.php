<?php
include('config.php');

$nama = $_POST['nama_bk'];
$nomerhp = $_POST['nomerhp_bk'];
$service = $_POST['service_bk'];
$waktu = $_POST['waktu_bk'];
$tanggal = $_POST['tanggal_bk'];
$pesan = $_POST['pesan_bk'];

$query =  "INSERT INTO booking(nama_booking , nomerhp_booking , service_booking, waktu_booking, tanggal_booking, pesan_booking) VALUES('$nama' , '$nomerhp' , '$service',  '$waktu', '$tanggal', '$pesan')";

if (mysqli_query($conn, $query)) {
	header("location:index.php");
} else {
	echo "ERROR, tidak berhasil" . mysqli_error($conn);
}

mysqli_close($conn);
