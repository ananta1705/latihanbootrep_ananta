<?php
require "koneksi.php";
$id =@$_GET['id'];

$sql = mysqli_query($koneksi,"delete from anggota where ID_ANGGOTA =$id");
header("location:index2.php?a=ID_ANGGOTA");
?>