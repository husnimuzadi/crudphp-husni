<?php 
// koneksi ke database
require 'functions.php';
$zis = query("SELECT * FROM zis");
$penerima_zis = query("SELECT * FROM penerima_zis");
$jumlah_zis = count($zis);
$jumlah_penerima = count($penerima_zis);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - ZIS ONLINE</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.php">Sistem ZIS Online</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
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
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <a class="nav-link" href="data-zis.php">
              <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
                Data ZIS
              </a>
              <a class="nav-link" href="penerima_zis.php">
              <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
                Data Penerima ZIS
              </a>
              <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="layout-static.html"
                    >Static Navigation</a
                  >
                  <a class="nav-link" href="layout-sidenav-light.html"
                    >Light Sidenav</a
                  >
                </nav>
              </div>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePages"
                aria-expanded="false"
                aria-controls="collapsePages"
              >
              </a>
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion"
              >
                <nav
                  class="sb-sidenav-menu-nested nav accordion"
                  id="sidenavAccordionPages"
                >
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false"
                    aria-controls="pagesCollapseAuth"
                  >
                    Authentication
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseAuth"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="login.html">Login</a>
                      <a class="nav-link" href="register.html">Register</a>
                      <a class="nav-link" href="password.html"
                        >Forgot Password</a
                      >
                    </nav>
                  </div>
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseError"
                    aria-expanded="false"
                    aria-controls="pagesCollapseError"
                  >
                    Error
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseError"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="401.html">401 Page</a>
                      <a class="nav-link" href="404.html">404 Page</a>
                      <a class="nav-link" href="500.html">500 Page</a>
                    </nav>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div class="sb-sidenav-footer">
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
        <div class="container-fluid px-4">
  <h1>Dashboard</h1>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card bg-primary text-white">
        <div class="card-header">
          <h5 class="card-title mb-0">Data ZIS</h5>
        </div>
        <div class="card-body">
          <h1><?php echo $jumlah_zis; ?></h1>
          <p class="card-text">Total ZIS yang sudah ditambahkan.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <a href="data-zis.php" class="btn btn-light">
            Lihat Detail Data ZIS <i class="fas fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card bg-warning text-white">
        <div class="card-header">
          <h5 class="card-title mb-0">Data Penerima ZIS</h5>
        </div>
        <div class="card-body">
          <h1><?php echo $jumlah_penerima; ?></h1>
          <p class="card-text">Total Penerima ZIS yang sudah ditambahkan.</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <a href="penerima_zis.php" class="btn btn-light">
            Lihat Detail Data ZIS <i class="fas fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card bg-success text-white">
        <div class="card-body">
          Success Card
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <a href="#" class="small text-white stretched-link">View Details</a>
          <i class="fas fa-angle-right small text-white"></i>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card bg-danger text-white">
        <div class="card-body">
          Danger Card
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
          <a href="#" class="small text-white stretched-link">View Details</a>
          <i class="fas fa-angle-right small text-white"></i>
        </div>
      </div>
    </div>
  </div>
</div>

        </main>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
