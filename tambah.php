<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$no_isbn = $_POST ['no_isbn'];
$tahun_terbit = $_POST ['tahun_terbit'];
$jml_halaman = $_POST ['jml_halaman'];
// menginput data ke database
mysqli_query($koneksi,"insert into tabel_buku values('','$id_buku,,'$judul_buku','$pengarang','$penerbit','$no_isbn','$tahun_terbit','$jml_halaman)");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php");
 
?>