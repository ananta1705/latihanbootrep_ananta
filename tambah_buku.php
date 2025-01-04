<?php
    include "koneksi.php";
    $judul =@$_POST['Judulbuku'];
    $Pengarang =@$_POST['Pengarang'];
    $Penerbit =@$_POST['Penerbit'];
    $ThnTerbit =@$_POST['ThnTerbit'];
    $Sinopsis=@$_POST['Sinopsis'];
    $JmlHalaman=@$_POST['JmlHalaman'];
    $ISBN=@$_POST['ISBN'];
    if(@$_POST['simpan']){
    
    $sqli = mysqli_query($koneksi,"insert into buku values('','$judul','$Pengarang','$Penerbit','$ThnTerbit','$Sinopsis','$JmlHalaman','$ISBN')");
    header("location:index2.php?a=buku");
    }
?>
<div class="row col-md-12">
    <h2 class="col-md-8">Buku</h2>
    <div class="row">
        <div class="card col-md-12 bg-white">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Buku</h4>
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-2">Judul Buku</div>
                        <dix class="col-md-5">
                            <input type="text" name="Judulbuku" id="Judulbuku" class="form-control" placeholder="Masukan judul buku"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Pengarang</div>
                            <div class="col-md-5">
                                <input type="text" name="Pengarang" id="Pengarang" class="form-control" placeholder="Masukan pengarang"><br>
                                </div>
                                <div class="row">
                        <div class="col-md-2">Penerbit</div>
                        <dix class="col-md-5">
                            <input type="text" name="Penerbit" id="Penerbit" class="form-control" placeholder="Masukan penerbit"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">ThnTerbit</div>
                            <div class="col-md-5">
                                <input type="number" name="ThnTerbit" id="ThnTerbit" class="form-control" placeholder="Masukan tahun terbit "><br>
                            </div>  
                            <div class="row">
                            <div class="col-md-2">Sinopsis</div>
                        <dix class="col-md-5">
                            <input type="text" name="Sinopsis" id="Sinopsis" class="form-control" placeholder="Masukan sinopsis"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">JmlHalaman</div>
                            <div class="col-md-5">
                                <input type="number" name="JmlHalaman" id="JmlHalaman" class="form-control" placeholder="Masukan jml_Halaman"><br>
                            </div>  
                            <div class="row">
                            <div class="col-md-2">ISBN</div>
                            <div class="col-md-5">
                                <input type="number" name="ISBN" id="ISBN" class="form-control"> <br><br>
                            </div>  
                            <tr>
             <td><input type="submit" name="simpan" value="simpan"></td>
             <td><input type="reset" value="reset"></td>

                        </div>
                            
                    </div>
                </form>
            </div>
        </div>
</div>

