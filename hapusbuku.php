<?php

require "koneksi.php";
$id =@$_GET['id'];

$sql = mysqli_query($koneksi,"delete from buku where ID_BUKU =$id");
header("location:index2.php?a=ID_BUKU");

?> 
