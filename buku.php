<div class="row col-md-12">
        <h2 style="background-color:  #DDDDDD;">Buku</h2>
            <div class="row">
              <div class="card col-md-12">
                <div class="card-body">
                  <p class="card-text">
                   <h6>DATA BUKU</h6> 
                  </p>
                  <a href="index2.php?a=tambah_buku">Tambah Buku</a><br><br>
                  
                  <table class="table table-striped table-hover table-bordered">
                    <tr>

                      <th>No</th>
                      <th>ID_BUKU</th>
                      <th>Judul Buku</th>
                      <th>Pengarang</th>
                      <th>Penerbit</th>
                      <th>Sinopsis</th>
                      <th>Jml Halaman</th>
                      <th>ISBN</th>

                    </tr>
                    <?php
                      include "koneksi.php";
                        $sql = mysqli_query($koneksi,"select * from buku");

                        $no =1;
                        while($data = mysqli_fetch_array($sql)){
                          echo"
                          <tr>
                            <td>$no</td>
                            <td>$data[ID_BUKU]</td>
                            <td>$data[JUDUL_BUKU]</td>
                            <td>$data[PENGARANG]</td>
                            <td>$data[PENERBIT]</td>
                            <td>$data[SINOPSIS]</td>
                            <td>$data[JML_HALAMAN]</td>
                            <td>$data[ISBN]</td>
                            <td>
                              <a href='index2.php?a=editbuku&id=$data[ID_BUKU]'>Edit</a> - 
                              <a href='index2.php?a=hapusbuku&id=$data[ID_BUKU]'>Hapus</a>
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