<?php
    include "koneksi.php";
    $nama_petugas =@$_POST['NAMA_PETUGAS'];
    $jabatan =@$_POST['JABATAN'];
    $surel =@$_POST['SUREL'];                   
    $medsos =@$_POST['MEDSOS'];
    $FOTO =@$_POST['FOTO'];
    if(@$_POST['simpan']){

        $FOTO = $_FILES ['FOTO']['name']; // mengambil nama file
        $tmp =$_FILES ['FOTO']['tmp_name']; // mengmabil temporay foto
        $size =$_FILES ['FOTO']['size']; // mengambil type file
        $size =$_FILES ['FOTO']['type']; // menggambil type foto

        //if($size > 900000){
           // echo "Gagal mengupload foto karena ukuran terlalu besar";
       // }else{
            $rename = $FOTO.time();
            $lokasi ="fotopetugas/" .$FOTO;
            //echo $FOTO;
            //echo $lokasi;
            move_uploaded_file($tmp, $lokasi);
            $sql = mysqli_query($koneksi,"insert into petugas values('$nama_petugas','$jabatan','$surel','$medsos','$FOTO')");
            header("location:index2.php?a=petugas");
        // }
        
//}
    }
?>
<div class="row col-md-12">
    <h2 class="col-md-8">Petugas</h2>
    <div class="row">
        <div class="card col-md-12 bg-white">
            <div class="card-body">
                <h4 class="card-title">Tambah  Data Petugas</h4>
                <form method="POST" action="" >
                    <div class="row">
                        <div class="col-md-2">nama_petugas</div>
                        <dix class="col-md-5">
                            <input type="text" name="namapetugas" id="namapetugas" class="form-control" placeholder="Masukan judul petugas"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Jabatan</div>
                            <div class="col-md-5">
                                <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukan jabtan"><br>
                                </div>
                                <div class="row">
                        <div class="col-md-2">Surel</div>
                        <dix class="col-md-5">
                            <input type="text" name="surel" id="surel" class="form-control" placeholder="Masukan surel"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Medsos</div>
                            <div class="col-md-5">
                                <input type="text" name="medsos" id="medsos" class="form-control" placeholder="Masukan medsos "><br>
                            </div>  
                            <div class="row">
                            <div class="col-md-2">FOTO</div>
                            <div class="col-md-5">
                                <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukan foto "><br>
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

