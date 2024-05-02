<?php 
// koneksi ke database
require 'functions.php';
$zis = query("SELECT * FROM zis");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data ZIS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Sistem ZIS Online</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "husni-1412220019");
        $query = "SELECT * FROM user LIMIT 1";
        $result = mysqli_query($conn, $query);
        if (!$result) {
          die("Error: " . mysqli_error($conn));
        }
        $user = mysqli_fetch_assoc($result);
        ?>
        <?php echo $user['username']; ?> <!-- Menampilkan username pengguna yang sedang login -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.php">Logout</a></li> <!-- Tambahkan link untuk logout -->
            </ul>
        </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link" href="data-zis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                Data ZIS
                            </a>
                            <a class="nav-link" href="penerima_zis.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
                                Data Penerima ZIS
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data ZIS</h1>
                        <a href="tambah-zis.php" class="btn btn-primary mb-3">
                      <i class="fas fa-plus mr-2"></i>
                      Tambah Data
                    </a>
          <div class="card-body">
        <table class="table table-bordered">
          <thead align="center">
            <tr>
              <th>No.</th>
              <th>Nama Muzakki</th>
              <th>Jenis ZIS</th>
              <th>Jumlah ZIS</th>
              <th>Tanggal Bayar</th>
              <th>Metode Pembayaran</th>
              <th>Sumber Dana</th>
              <th>Lembaga Penerima</th>
              <th>Penyaluran Dana</th>
              <th>Catatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody align="center">
                <?php $i = 1; ?>
                <?php foreach ($zis as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?php echo $row["nama_muzakki"]; ?></td>
                    <td><?php echo $row["jenis_zis"]; ?></td>
                    <td><?php echo $row["jumlah_zis"]; ?></td>
                    <td><?php echo $row["tanggal_bayar"]; ?></td>
                    <td><?php echo $row["metode_pembayaran"]; ?></td>
                    <td><?php echo $row["sumber_dana"]; ?></td>
                    <td><?php echo $row["lembaga_penerima"]; ?></td>
                    <td><?php echo $row["penyaluran_dana"]; ?></td>
                    <td><?php echo $row["catatan"]; ?></td>
                    <td>
                    <div class="btn-group" role="group">
                        <a href="ubah-zakat.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning btn-sm" onclick="return confirm('Yakin Data Akan Diubah?');">Ubah</a> &nbsp;
                        <a href="hapus-zakat.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Akan Dihapus?');">Hapus</a>
                    </div>
                </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
        </table>
      </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
