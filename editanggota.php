<?php
require "koneksi.php"; // memanggil file koneksi.php

$id= @$_GET['id']; //mengambil data id dari url
$sql = mysqli_query($koneksi,"select * from anggota where ID_ANGGOTA = '$id'");
while($data = mysqli_fetch_array($sql)){
  $NAMA_ANGGOTA =$data['NAMA_ANGGOTA'];
  $JABATAN =$data['JABATAN'];
  $EMAIL =$data['EMAIL'];
  $FOTO =$data['FOTO'];
}

   

  if(isset($_POST['edit'])){
    
 
    $foto = @$_FILES['foto']['name'];
    $tmp = @$_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp,'fotoanggota/'. $foto);
      $sqli = mysqli_query($koneksi,"update anggota set  NAMA_ANGGOTA ='$_POST[NAMA_ANGGOTA]',  JABATAN = '$_POST[JABATAN]', EMAIL = '$_POST[EMAIL]', FOTO = '$foto' where ID_ANGGOTA = $id");

      header("location:index2.php?a=anggota");
}
?>
<div class="row col-md-12">
    <h2 class="col-md-8">Anggota</h2>
    <div class="row">
        <div class="card col-md-12 bg-white">
            <div class="card-body">
                <h4 class="card-title">Edit Anggota</h4>
                
                    <div class="row">
                    <form method="POST" action="" enctype="multipart/form-data" class="form-control">
                        <div class="row">
                            <div class="col-md-2">NAMA ANGGOTA</div>
                            <div class="col-md-5">
                                <input type="text" name="NAMA_ANGGOTA" id="NAMA_ANGGOTA" class="form-control" placeholder="Masukan NAMA ANGGOTA" value="<?= $NAMA_ANGGOTA; ?>"><br>
                                </div>
                                <div class="row">
                        <div class="col-md-2">NIS</div>
                        <dix class="col-md-5">
                            <input type="number" name="NIS" id="NIS" class="form-control" placeholder="Masukan NIS" ><br>
                        </div>
                            <div class="row">
                        <div class="col-md-2">JABATAN</div>
                        <div class="col-md-5">
                            <input type="text" name="JABATAN" id="JABATAN" class="form-control" placeholder="Masukan JABATAN" value="<?= $JABATAN; ?>"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">EMAIL</div>
                            <div class="col-md-5">
                                <input type="text" name="EMAIL" id="EMAIL" class="form-control" placeholder="Masukan EMAIL" value="<?= $EMAIL; ?>"> <br>
                            </div>
                            <div class="row">
                            <div class="col-md-2">Foto</div>
                            <div class="col-md-5">
                                <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukan foto " value="<?= $foto; ?>"><br>
                            </div>  
                        </div>
                            <tr>
                                <td>
                                    <input type="submit" name="edit" value="Edit">
                                    <input type="reset" value="reset">
                                </td>
                            </tr>
                        
                            
                    </div>
                </form>
            </div>
        </div>
</div>
