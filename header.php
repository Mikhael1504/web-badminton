<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dashboard | Morvin - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    content="Premium Multipurpose Admin & Dashboard Template"
    name="description" />
  <meta content="Themesdesign" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/logo-badmin.jpg" />

  <!-- plugin css -->
  <link
    href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
    rel="stylesheet"
    type="text/css" />

  <!-- Bootstrap Css -->
  <link
    href="assets/css/bootstrap.min.css"
    id="bootstrap-style"
    rel="stylesheet"
    type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link
    href="assets/css/app.min.css"
    id="app-style"
    rel="stylesheet"
    type="text/css" />

</head>

<body>
  <!-- Begin page -->
  <div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="dashboard.php" class="logo logo-dark">
              <span class="logo-sm">
                <img src="assets/images/logo-badmin.jpg" alt="" height="40" />
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo-badmin.jpg" alt="" height="69" />
              </span>
            </a>

            <a href="dashboard.php" class="logo logo-light">
              <span class="logo-sm">
                <img src="assets/images/logo-badmin.jpg" alt="" height="40" />
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo-badmin.jpg" alt="" height="69" />
              </span>
            </a>
          </div>

          <button
            type="button"
            class="btn btn-sm px-3 font-size-24 header-item waves-effect"
            id="vertical-menu-btn">
            <i class="mdi mdi-menu"></i>
          </button>
        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
          <div class="search-bar">
            <input class="search-input form-control" placeholder="Search" />
            <a
              href="#"
              class="close-search toggle-search"
              data-target="#search-wrap">
              <i class="mdi mdi-close-circle"></i>
            </a>
          </div>
        </div>

        <div class="d-flex">
          <div class="dropdown d-inline-block">
            <button
              type="button"
              class="btn header-item waves-effect"
              id="page-header-user-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <img
                class="rounded-circle header-profile-user"
                src="assets/images/users/avatar-9.jpg"
                alt="Header Avatar" />
              <span class="d-none d-xl-inline-block ms-1"> <?= $_SESSION['username']; ?> </span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="#"><i
                  class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i>
                Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="logout.php"><i
                  class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i>
                Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
      <div data-simplebar class="h-100">
        <div class="user-sidebar text-center">
          <div class="dropdown">
            <div class="user-img">
              <img
                src="assets/images/users/avatar-9.jpg"
                alt=""
                class="rounded-circle" />
              <span class="avatar-online bg-success"></span>
            </div>
            <div class="user-info">
              <h5 class="mt-3 font-size-17 text-white"> <?= $_SESSION['username']; ?> </h5>
              <span class="font-size-13 text-white-50">Administrator</span>
            </div>
          </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
              <a href="dashboard.php" class="waves-effect">
                <i class="dripicons-home"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="chat.php" class=" waves-effect">
                <i class="dripicons-message"></i>
                <span>Chat</span>
              </a>
            </li>
            <li>
              <a href="anggota.php" class="waves-effect">
                <i class="fa fa-user"></i>
                <span>anggota</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-arrow-right"></i>
                <span>transaksi</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="sewa.php">Penyewaan</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

</html>