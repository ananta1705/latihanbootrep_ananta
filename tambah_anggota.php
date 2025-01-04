<?php
    require "koneksi.php";
    $id_anggota =@$_POST['id_anggota'];
    $nama_anggota =@$_POST['nama_anggota'];
    $jabatan =@$_POST['jabatan'];
    $email =@$_POST['email'];
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
                $lokasi ="fotoanggota/" .$FOTO;
                //echo $FOTO;
                //echo $lokasi;
                move_uploaded_file($tmp, $lokasi);
                $sql = mysqli_query($koneksi,"insert into anggota values('$id_anggota','$nama_anggota','$jabatan','$email','$FOTO')");
                header("location:index2.php?a=anggota");
           // }
        
    //}
           }
    ?>

    <div class="row col-md-12">
    <h2 class="col-md-8">Anggota</h2>
    <div class="row">
        <div class="card col-md-12 bg-white">
            <div class="card-body">
                <h4 class="card-title">Tambah  Data Angota</h4>
                <form method="POST" action="" enctype="multipart/form-data" class="form-control">
                    <div class="row">
                        <div class="col-md-2">ID Anggota</div>
                        <dix class="col-md-5">
                            <input type="text" name="id_anggota" id="id_anggota" class="form-control" placeholder="Masukan judul buku"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Nama Anggota</div>
                            <div class="col-md-5">
                                <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" placeholder="Masukan pengarang"><br>
                                </div>
                                <div class="row">
                        <div class="col-md-2">jabatan</div>
                        <dix class="col-md-5">
                            <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukan penerbit"><br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Email</div>
                            <div class="col-md-5">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Masukan tahun terbit "><br>
                            </div>
                            <div class="row">
                            <div class="col-md-2">FOTO</div>
                            <div class="col-md-5">
                                <input type="file" name="FOTO" id="FOTO" class="form-control" placeholder="Masukan foto "><br>
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