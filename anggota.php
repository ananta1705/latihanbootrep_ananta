<div class="row col-md-12">
        <h1 style="background-color: #DDDDDD;">Anggota</h1>
            <div class="row">
              <div class="card col-md-12">
              <div class="card-body">
                  <p class="card-text">
                   
                  <h6>DATA ANGGOTA</h6>
                  </p>
                  <a href="index2.php?a=tambah anggota">Tambah Anggota</a><br><br>
                  
                  <table class="table table-striped table-hover table-bordered">
                    <tr>

                      <th>No</th>
                      <th>ID_ANGGOTA</th>
                      <th>NAMA_ANGGOTA</th>
                      <th>JABATAN</th>
                      <th>EMAIL</th>
                      <th>FOTO</th>
                      

                    </tr>
                    <?php
                      include "koneksi.php";
                        $sql = mysqli_query($koneksi,"select * from anggota");

                        $no =1;
                        while($data = mysqli_fetch_array($sql)){
                          echo"
                          <tr>
                            <td>$no</td>
                            <td>$data[ID_ANGGOTA]</td>
                            <td>$data[NAMA_ANGGOTA]</td>
                            <td>$data[JABATAN]</td>
                            <td>$data[EMAIL]</td>
                            <td><img src=fotoanggota/$data[FOTO] height=100></td>
                            <td>
                              <a href='index2.php?a=editanggota&id=$data[ID_ANGGOTA]'>Edit</a>
                               - <a href='index2.php?a=hapusanggota&id=$data[ID_ANGGOTA]'>Hapus</a>
                            </td>
                          </tr>
                      
                    ";
                    $no++;
                    }
                      ?>
                    </table>

            </div>
        </div>
    </div>
 </div>