<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:login.php");
}
?>

<html>
    <head>
        <title>Latihan Bootstrap</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/jquery.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-drak">
            <div class="container-fluid" style="background-color:#A5BECC;">
                    <a class="navbar-brand" href="index2.html">Latihan Bootstrap</a>

                    <!-- Membuat button toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" >
                        <span class="navbar-toggler-icon"></span>

                    <!-- Membuat menu -->
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" href="index2.php?a=Beranda">Beranda</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index2.php?a=Buku">Buku</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index2.php?a=Anggota">Anggota</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index2.php?a=Petugas">Petugas</a>
                          </li>
                            <a class="nav-link" href="index2.php?a=Informasi">Informasi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"></a>
                          </li>
                        </ul>
                      </div> 
                    </ul> 
                    <span class="navbar-text">
                      Administrator | <a class="nav-link" href="index2.php?a=logout">Logout</a>
                    </span>
                    <ul></ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                  </div>
                </div>
            </div>
        </nav> <!-- Penutup navbar-->

        <!-- Content -->
        <div class="container">
          <?php
                switch(@$_GET['a']){
                    case "Beranda":
                        require "beranda.php";
                        break;
                    case "Buku":
                        require "buku.php";
                        break;
                    case "Anggota":
                        require "anggota.php"; 
                        break;
                    case "Petugas":
                        require "petugas.php";
                        break;
                        case "Pengembalian":
                            require "pengembalian.php";
                            break;
                    case "Peminjaman":
                           require "peminjaman.php";
                          break;
                    case "tambah_buku":
                      require "tambah_buku.php";
                      break;
                    case "editbuku":
                        require "editbuku.php";
                        break;
                    case "tambahpetugas":
                          require "tambahpetugas.php";
                          break;
                    case "hapusbuku":
                            require "hapusbuku.php";
                            break;
                    case "tambah anggota":
                              require "tambah_anggota.php";
                              break;
                     case "hapusanggota":
                                require "hapusanggota.php";
                                break;
                    case "logout":
                                require "logout.php";
                                break;
                    case "editpetugas":
                                  require "editpetugas.php";
                                  break;
                    case "editanggota":
                                    require "editanggota.php";
                                    break;
                       case "hapuspetugas":
                                      require "hapuspetugas.php";
                                      break;          
                        


                }
          ?>
        </div>
                
        <!-- Footer -->
        <div class="footer">
          <div class="bg-light" style="height: 50;">
          <div style="background-color: #D0C9C0;text-align:center;padding:10px;margin-top:7px;">~ Copyright &copy; 2022 - Ananta. All Right Reserved.</div>
          </div>
   </div>
    </body>
</html>