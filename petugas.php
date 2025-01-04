<div class="row col-md-12">
        <h1 style="background-color: #DDDDDD;;">Petugas</h1>
            <div class="row">
              <div class="card col-md-12">
                <div class="card-body">
                  <p class="card-text">
                    DATA PETUGAS
                  </p>
                  <a href="index2.php?a=tambahpetugas">Tambah Petugas</a><br><br>
                  
                  <table class="table table-striped table-hover table-bordered">
                    <tr>

                      <th>No</th>
                      <th>NAMA_PETUGAS</th>
                      <th>JABATAN</th>
                      <th>SUREL</th>
                      <th>MEDSOS</th>
                      <th>FOTO</th>

                    </tr>
                    <?php
                      include "koneksi.php";
                        $sql = mysqli_query($koneksi,"select * from petugas");

                        $no =1;
                        while($data = mysqli_fetch_array($sql)){
                          echo"
                          <tr>
                            <td>$no</td>
                            <td>$data[NAMA_PETUGAS]</td>
                            <td>$data[JABATAN]</td>
                            <td>$data[SUREL]</td>
                            <td>$data[MEDSOS]</td>
                            <td><img src=fotopetugas/$data[FOTO] height=100></td>
                            <td>
                              <a href='index2.php? a=editpetugas&id=$data[ID_PETUGAS]'>Edit</a> 
                              - <a href='index2.php? a=hapuspetugas'>Hapus</a>
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