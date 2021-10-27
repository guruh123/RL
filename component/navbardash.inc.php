<?php session_start(); 
include('../functions.php');
// $name = "givan";
// $password = "givan";
// $conn = mysqli_connect("localhost","root","","remotlab");
// $query = mysqli_query($conn, "SELECT * FROM user WHERE nama='" . $name . "' AND password='" . $password . "'")
//         or die('Error: ' . mysqli_connect_error());
// $row = mysqli_fetch_assoc($query);
?>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Dashboard.php">
        <div class="sidebar-brand-icon">
          <img src="../img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Remote Laboratory</div>
      </a>
      <hr class="sidebar-divider my-0">
      <br></br>
      <br></br>
      <br></br>
      <?php if ($_SESSION["hak"] == "1") : ?>
        <li class="nav-item active">
          <a class="nav-link" href="../dashboards/Dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mt-5" href="../data/users.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Users</span></a>
        </li>
      <?php elseif ($_SESSION["hak"] == "2") : ?>
        <li class="nav-item active">
          <a class="nav-link" href="../dashboards/dosen.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mt-5" href="../data/datadosen.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data Praktikum</span></a>
        </li>
      <?php elseif ($_SESSION["hak"] == "3") : ?>
        <li class="nav-item active">
          <a class="nav-link" href="../dashboards/mahasiswa.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
      <?php endif; ?>
      <br></br>
      <li class="nav-item active">
        <a class="nav-link" href="../data/HasilPraktikum.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Hasil Praktikum</span></a>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= tampilFoto("4");?>" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?= $_SESSION["name"]; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../settings.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400" href="#"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Akan Log Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Yakin akan logout?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="../logout.php" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">