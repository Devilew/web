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
                        <h1 class="mt-4">Edit Produk Keluar</h1>
                        <div class="card mb-4 border-0">
                            <div class="card-body">
                            <form action="input-aksi.php" method="post">		
                                <table>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td><input type="date" name="tanggal_produk_keluar"></td>					
                                    </tr>	
                                    <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="nama_pembeli"></td>					
                                    </tr>	
                                    <tr>
                                        <td>No. Surat Jalan</td>
                                        <td><input type="text" name="no_surat_jalan"></td>					
                                    </tr>		
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td><input type="text" name="nama_barang"></td>				
                                    </tr>		
                                    <tr>
                                        <td>Jumlah Barang/Qty</td>
                                        <td><input type="text" name="qty"></td>				
                                    </tr>		
                                    <tr>
                                        <td>Harga/kg</td>
                                        <td><input type="text" name="harga"></td>				
                                    </tr>
                                    <tr>
                                        <td><a href="produk_keluar.php"><button class="btn btn-danger" type="button">Batal</button></a></td>
                                        <td><button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModalEdit">Simpan</button></td>
                                        <!-- <td><input type="submit" value="Simpan"></td>					 -->
                                    </tr>				
                                </table>
                            </form>
                            </div>

                            <!-- Modal -->
                            <!-- Modal Edit -->
                            <div class="modal fade" id="myModalEdit" role="dialog">
                                <div class="modal-dialog">
                                
                                <!-- Modal content-->
                                <div class="modal-content" style="text-align: center;">
                                    <div class="modal-body">
                                    <h6>Data sebelumnya akan diubah dengan data sekarang</h6>
                                    <h6>Apakah seluruh data sudah benar?</h6>
                                    <br>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
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
                $('#dataTable_length').css("display","none");
                $('#dataTable_filter').css("display","none");
            });
        </script>
        <!-- FUNGSI ALERT -->
        <script>
            function myFunction() {
            alert("Anda belum login\nSilahkan login terlebih dahulu");
            }
        </script>
        <script>
            function tambahData() {
            alert("Data akan ditambahkan\nApakah seluruh data sudah benar?");
            }
        </script>
    </body>
</html>
