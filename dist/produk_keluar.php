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
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" style="padding: 10px;">
                        <label for="username">
                            Username
                            <input type="text" id="username" name="username" />
                        </label>
                        <label for="password">
                            Password
                            <input type="text" id="password" name="password" />
                        </label>
                        <button type="button" class="btn btn-danger">Batal</button>
                        <button type="button" class="btn btn-success">Login</button>
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
                        <h1 class="mt-4">Produk Keluar</h1>
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
                                        <a href="tambah_produk_keluar.php"><button class="btn btn-danger" type="button">Tambah</button></a>
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
                                                <th>Pembeli</th>
                                                <th>Jumlah Barang/Qty (Kg)</th>
                                                <th>Nama Barang</th>
                                                <th>No. Surat Jalan</th>
                                                <th>Harga/Kg (Rp)</th>
                                                <th>Total Harga (Rp)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1/12/2021</td>
                                                <td>Nizar</td>
                                                <td>2500 Kg</td>
                                                <td>Patin</td>
                                                <td>-</td>
                                                <td>Rp 24000</td>
                                                <td>Rp 60000000</td>
                                                <td>
                                                    <a href="edit_produk_keluar.php" role="button"><i class="fas fa-edit fa-fw"></i></a>
                                                    <a href="#" role="button" data-toggle="modal" data-target="#myModalHapus"><i class="fas fa-trash fa-fw"></i></a>
                                                    <!-- <button class="btn btn-danger" type="button">hapus</button> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>1/12/2021</td>
                                                <td>Nizar</td>
                                                <td>2500 Kg</td>
                                                <td>Patin</td>
                                                <td>-</td>
                                                <td>Rp 24000</td>
                                                <td>Rp 60000000</td>
                                                <td>
                                                    <a href="edit_produk_keluar.php" role="button"><i class="fas fa-edit fa-fw"></i></a>
                                                    <a href="#" role="button" data-toggle="modal" data-target="#myModalHapus"><i class="fas fa-trash fa-fw"></i></a>
                                                    <!-- <button class="btn btn-danger" type="button">hapus</button> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Modal -->
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
    </body>
</html>
