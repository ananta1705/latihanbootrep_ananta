<?php
  require "koneksi.php"; // memanggil file koneksi.php

  $id= @$_GET['id']; //mengambil data id dari url
  $sql = mysqli_query($koneksi,"select * from buku where ID_BUKU = '$id'");
  while($data = mysqli_fetch_array($sql)){

    $Judul_buku =$data['JUDUL_BUKU'];
    $Pengarang =$data['PENGARANG'];
    $Penerbit =$data['PENERBIT'];
    $ThnTerbit =$data['TAHN_TERBIT'];
    $Sinopsis =$data['SINOPSIS'];
    $JmlHalaman =$data['JML_HALAMAN'];
    $ISBN =$data['ISBN'];
  }
    if(@$_POST ['edit']){
        $sqli = mysqli_query($koneksi,"update buku set JUDUL_BUKU = '$_POST[Judulbuku]', PENGARANG ='$_POST[Pengarang]',  PENERBIT = '$_POST[Penerbit]', TAHN_TERBIT = '$_POST[ThnTerbit]', SINOPSIS = '$_POST[sinopsis]', JML_HALAMAN = '$_POST[JmlHalaman]', ISBN = '$_POST[isbn]' where ID_BUKU = $id");
 
        header("location:index2.php?a=buku");
}
?>
    <div class="row col-md-12"> 
    <h2 class="col-md-8">Buku</h2>
    <div class="row">
        <div class="card col-md-12 bg-white">
            <div class="card-body">
                <h4 class="card-title">Edit Data Buku</h4>
                <form method="POST" action="">
                    <div class="row">
                    <div class="col-md-2">Judul_buku</div>
                            <div class="col-md-5">
                            <input type="text" name="Judulbuku" id="Judulbuku" class="form-control" placeholder="Masukan judul buku" value="<?= $Judul_buku; ?>"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Pengarang</div>
                            <div class="col-md-5">
                                <input type="text" name="Pengarang" id="Pengarang" class="form-control" placeholder="Masukan pengarang" value="<?= $Pengarang; ?>"><br>
                                </div>
                                <div class="row">
                        <div class="col-md-2">Penerbit</div>
                        <dix class="col-md-5">
                            <input type="text" name="Penerbit" id="Penerbit" class="form-control" placeholder="Masukan penerbit" value="<?= $Penerbit; ?>"><br>
                        </div>
                    <div class="row">
                        <div class="col-md-2">ThnTerbit</div>
                        <div class="col-md-5">
                            <input type="number" name="ThnTerbit" id="ThnTerbit" class="form-control" placeholder="Masukan penerbit" value="<?= $ThnTerbit; ?>"><br>
                        </div>  
                    <div class="row">
                        <div class="col-md-2">Sinopsis</div>
                    <div class="col-md-5">
                        <input type="text" name="Sinopsis" id="Sinopsis" class="form-control" placeholder="Masukan sinopsis" value="<?= $Sinopsis; ?>"><br>
                    </div>
                    <div class="row">
                        <div class="col-md-2">JmlHalaman</div>
                        <div class="col-md-5">
                            <input type="number" name="JmlHalaman" id="JmlHalaman" class="form-control" placeholder="Masukan jml_Halaman" value="<?= $JmlHalaman; ?>"><br>
                        </div>  
                        <div class="row">
                        <div class="col-md-2">ISBN</div>
                        <div class="col-md-5">
                            <input type="number" name="ISBN" id="ISBN" class="form-control" placeholder="Masukan ISBN" value="<?= $ISBN; ?>"><br><br>
                        </div>  
                        <tr>
                            <td><input type="submit" name="edit" value="edit"></td>
                            <td><input type="reset" value="reset"></td>

                    </div>
                        
                </div>
            </form>
        </div>
    </div>
</div>

