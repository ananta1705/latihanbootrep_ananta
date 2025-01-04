<?php 

$koneksi = mysqli_connect("localhost","root","","location:index2.php");
 
if (mysqli_connect_errno()){
	echo"koneksi Gagal";
}
?>