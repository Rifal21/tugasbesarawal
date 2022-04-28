<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Halaman Admin | Metode Pembayaran</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-computer"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />
        <!-- Heading -->
        <div class="sidebar-heading">Landing Page</div>

        <!-- Nav Item - Dashboard -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">
            <i class="fa-solid fa-fw fa-shop"></i>
            <span>Kembali ke Toko</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Kelola Toko</div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="produk.php">
            <i class="fa-solid fa-fw fa-box-open"></i>
            <span>Product</span></a
          >
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="jasa.php">
            <i class="fa-solid fa-handshake-simple"></i>
            <span>Services</span></a
          >
        </li>
        <!-- Nav Item - metode -->
        <li class="nav-item">
          <a class="nav-link" href="bayar.php">
          <i class="fa-solid fa-fw fa-sack-dollar"></i>
            <span>Metode Pembayaran</span></a
          >
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Kelola SDM</div>
        <!-- Nav Item - staff -->
        <li class="nav-item">
          <a class="nav-link" href="staff.php">
            <i class="fa-solid fa-user-group"></i>
            <span>Staff Administrasi</span></a
          >
        </li>
        <!-- Nav Item - customer -->
        <li class="nav-item">
          <a class="nav-link" href="customer.php">
            <i class="fa-solid fa-people-group"></i>
            <span>Customer</span></a
          >
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider" />
        <!-- Nav Item - customer -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a
          >
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>
              
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                  <img class="img-profile rounded-circle" src="../img/74483397_206827793646107_3904261442558534067_n-removebg-preview.png" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid m-auto">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-center text-gray-800">Kelola Metode Pembayaran</h1>
            <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-4">Tambah Metode</button>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Metode</th>
                <th scope="col">No.Rek</th>
                <!-- <th scope="col">Deskripsi</th> -->
                <th scope="col">Nama Pemilik</th>
                <th scope="col">Logo</th>
                <th scope="col">Action</th>
            
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Bank BRI</td>
                <td>0000000000000</td>
                <td>Rifal Kurniawan</td>
                <td>......</td>
                <td><a href="edit.html" class="badge badge-warning">Edit</a> | <a href="hapus.html" class="badge badge-danger">Delete</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bank BCA</td>
                <td>0000000000000</td>
                <td>Rifal Kurniawan</td>
                <td>......</td>
                <td><a href="edit.html" class="badge badge-warning">Edit</a> | <a href="hapus.html" class="badge badge-danger">Delete</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Dana</td>
                <td>0000000000000</td>
                <td>Rifal Kurniawan</td>
                <td>......</td>
                <td><a href="edit.html" class="badge badge-warning">Edit</a> | <a href="hapus.html" class="badge badge-danger">Delete</a></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Gojek</td>
                <td>0000000000000</td>
                <td>Rifal Kurniawan</td>
                <td>......</td>
                <td><a href="edit.html" class="badge badge-warning">Edit</a> | <a href="hapus.html" class="badge badge-danger">Delete</a></td>
              </tr>
              
            </tbody>
          </table>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Giantzord 2022</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
  </body>
</html>
