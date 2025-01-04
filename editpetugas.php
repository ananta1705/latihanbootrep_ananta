<?php
  require "koneksi.php"; // memanggil file koneksi.php

  $id= @$_GET['id']; //mengambil data id dari url
  $sql  = mysqli_query($koneksi,"select * from petugas where ID_PETUGAS = $id");
  while($data = mysqli_fetch_array($sql)){
    
    $NAMA_PETUGAS =$data['NAMA_PETUGAS'];
    $JABATAN =$data['JABATAN'];
    $SUREL =$data['SUREL'];
    $MEDSOS =$data['MEDSOS'];
    $FOTO =$data['FOTO'];
  }
  
  if(isset($_POST ['edit'])){


    $foto = @$_FILES['foto']['name'];
    $tmp = @$_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp,'fotopetugas/'. $foto);
    $sqli = mysqli_query($koneksi,"update petugas set  NAMA_PETUGAS ='$_POST[NAMA_PETUGAS]',  JABATAN = '$_POST[JABATAN]', SUREL = '$_POST[SUREL]', MEDSOS = '$_POST[MEDSOS]', FOTO = '$FOTO' where ID_PETUGAS= $id");

    header("location:index2.php?a=petugas");
}
?>
<div class="row col-md-12">
    <h2 class="col-md-8">Petugas</h2>
    <div class="row">
        <div class="card col-md-12 bg-white">
            <div class="card-body">
                <h4 class="card-title">Edit Petugas</h4>
                <form method="POST" action="" enctype="multipart/form-data" class="form-control">
                    <div class="row">
                        <div class="col-md-2">nama petugas</div>
                        <dix class="col-md-5">
                            <input type="text" name="NAMA_PETUGAS" id="NAMA_PETUGAS" class="form-control" placeholder="Masukan judul petugas" value="<?= $NAMA_PETUGAS; ?>"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Jabatan</div>
                            <div class="col-md-5">
                                <input type="text" name="JABATAN" id="JABATAN" class="form-control" placeholder="Masukan jabtan" value="<?= $JABATAN; ?>"><br>
                                </div>
                                <div class="row">
                        <div class="col-md-2">Surel</div>
                        <dix class="col-md-5">
                            <input type="text" name="SUREL" id="SUREL" class="form-control" placeholder="Masukan surel" value="<?= $SUREL; ?>"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Medsos</div>
                            <div class="col-md-5">
                                <input type="text" name="MEDSOS" id="MEDSOS" class="form-control" placeholder="Masukan medsos " value="<?= $MEDSOS; ?>"><br>
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
