<?php
//$koneksi1 = mysqli_connect("localhost","root","","food");
$koneksi1 = mysqli_connect("localhost","id10286545_buku",'12345',"id10286545_buku");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
