<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- KONEKSI DATABASE -->
        <?php
            include("koneksi.php");
            session_start();
            if($_SESSION['username'] == NULL){
                $belum_login = echo '';
            }
        ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php" style="color: black;">CV Kirana Bahari Indonesia</a>
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button> -->
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black">Silahkan Login  &nbsp;<i class="fas fa-user fa-fw" style="color:white"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" id="login" aria-labelledby="userDropdown" style="padding: 10px;">
                        <form action="login.php" method="post" enctype="multipart/form-data">
                            <label for="username">
                                Username
                                <input type="text" class="form-control" id="username" name="username" />
                            </label>
                            <label for="password">
                                Password
                                <input type="password" class="form-control" id="password" name="password" />
                            </label>
                            <button type="button" class="btn btn-danger">Batal</button>
                            <button type="submit" class="btn btn-success" name="login">Login</button>
                        </form>
                        <!-- <div class="dropdown-divider"></div> -->
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link border-blue" href="index.php">
                                <div class="sb-nav-link-icon"></div>
                                Dashboard
                            </a>
                            <a class="nav-link border-blue" href="supplier.php">
                                <div class="sb-nav-link-icon"></div>
                                Supplier
                            </a>
                            <a class="nav-link border-blue" href="produk_keluar.php">
                                <div class="sb-nav-link-icon"></div>
                                Produk Keluar
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <table width="50%">
                                          <tr>
                                            <td>Jumlah Produk</td>
                                            <td>:</td>
                                            <td>50 Kg</td>
                                          </tr>
                                          <tr>
                                            <td>Produk Terjual</td>
                                            <td>:</td>
                                            <td>50 Kg</td>
                                          </tr>
                                          <tr>
                                            <td>Produk Digudang</td>
                                            <td>:</td>
                                            <td>50 Kg</td>
                                          </tr>
                                          <tr>
                                            <td>MCO</td>
                                            <td>:</td>
                                            <td>50 Kg</td>
                                          </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                        <a href="tambah_data.php"><button class="btn btn-danger" type="button">Tambah</button></a>
                                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModalDownload">Download</button>
                                    </div>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Supplier</th>
                                                <th>Jenis Ikan</th>
                                                <th>Berat RM</th>
                                                <th>Hasil Produksi</th>
                                                <th>Rend.% Fillet</th>
                                                <th>Triming</th>
                                                <th>Kulit</th>
                                                <th>Billy</th>
                                                <th>Daging Kerok</th>
                                                <th>AFALAN</th>
                                                <th>Rend.% Afalan</th>
                                                <th>Soaking</th>
                                                <th>Bekuan Soaking</th>
                                                <th>Hasil Packing</th>
                                                <th>Jumlah MC (@10Kg)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1/12/2021</td>
                                                <td>Nizar</td>
                                                <td>Patin</td>
                                                <td>5174 Kg</td>
                                                <td>1789 Kg</td>
                                                <td>34,58%</td>
                                                <td>310 Kg</td>
                                                <td>250 Kg</td>
                                                <td>400 Kg</td>
                                                <td>122 Kg</td>
                                                <td>2234 Kg</td>
                                                <td>64,09%</td>
                                                <td>2532 Kg</td>
                                                <td>2346 Kg</td>
                                                <td>3901,5 Kg</td>
                                                <td>390 Kg</td>
                                                <td>
                                                    <a href="edit_data.php" role="button"><i class="fas fa-edit fa-fw"></i></a>
                                                    <a href="#" role="button" data-toggle="modal" data-target="#myModalHapus"><i class="fas fa-trash fa-fw"></i></a>
                                                    <!-- <button class="btn btn-danger" type="button">hapus</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1/12/2021</td>
                                                <td>Nizar</td>
                                                <td>Patin</td>
                                                <td>5174 Kg</td>
                                                <td>1789 Kg</td>
                                                <td>34,58%</td>
                                                <td>310 Kg</td>
                                                <td>250 Kg</td>
                                                <td>400 Kg</td>
                                                <td>122 Kg</td>
                                                <td>2234 Kg</td>
                                                <td>64,09%</td>
                                                <td>2532 Kg</td>
                                                <td>2346 Kg</td>
                                                <td>3901,5 Kg</td>
                                                <td>390 Kg</td>
                                                <td>
                                                    <a href="edit_data.php" role="button"><i class="fas fa-edit fa-fw"></i></a>
                                                    <a href="#" role="button" data-toggle="modal" data-target="#myModalLogin"><i class="fas fa-trash fa-fw"></i></a>
                                                    <!-- <button class="btn btn-danger" type="button">hapus</button> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Modal -->
                            <!-- Modal Login Dulu -->
                            <div class="modal fade" id="myModalLogin" role="dialog">
                                <div class="modal-dialog">
                                
                                <!-- Modal content-->
                                <div class="modal-content" style="text-align: center;">
                                    <div class="modal-body">
                                    <h6>Anda belum login</h6>
                                    <h6>Silahkan login terlebih dahulu</h6>
                                    <br>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                            <!-- Modal Hapus -->
                            <div class="modal fade" id="myModalHapus" role="dialog">
                                <div class="modal-dialog">
                                
                                <!-- Modal content-->
                                <div class="modal-content" style="text-align: center;">
                                    <div class="modal-body">
                                    <h6>Data akan dihapus</h6>
                                    <br>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Hapus</button>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                            <!-- Modal Download -->
                            <div class="modal fade" id="myModalDownload" role="dialog">
                                <div class="modal-dialog">
                                
                                <!-- Modal content-->
                                <div class="modal-content" style="text-align: center;">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Silahkan pilih tahun dan bulan</h4>
                                    </div>
                                    <div class="modal-body">
                                        <select name="tahun">
                                            <option selected="selected">Tahun</option>
                                            <?php
                                            for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                                                echo"<option value='$i'> $i </option>";
                                                }
                                            ?>
                                        </select>
                                        <select name="bulan">
                                            <option selected="selected">Januari</option>
                                            <option selected="selected">Februari</option>
                                            <option selected="selected">Maret</option>
                                            <option selected="selected">April</option>
                                            <option selected="selected">Mei</option>
                                            <option selected="selected">Juni</option>
                                            <option selected="selected">Juli</option>
                                            <option selected="selected">Agustus</option>
                                            <option selected="selected">September</option>
                                            <option selected="selected">Oktober</option>
                                            <option selected="selected">November</option>
                                            <option selected="selected">Desember</option>
                                        </select>
                                    <p></p>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Download</button>
                                    </div>
                                </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto bg-dark">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div>Copyright &copy; 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

     
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script>
            $( document ).ready(function() {
                // $('#dataTable_length').css("display","none");
                $('#dataTable_filter').css("display","none");
            });
        </script>
        <!-- FUNGSI ALERT -->
        <script>
            function myFunction() {
            alert("Anda belum login\nSilahkan login terlebih dahulu");
            }
        </script>
    </body>
</html>
