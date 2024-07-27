<!DOCTYPE html>
<html lang="es" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">
<!-- PUSE MISMO NIVEL HEAD Y BODY PARA QUE NO SE EXTIENDA TANTO -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>ZEROTOPLAN ADMIN</title>

  <!-- Favicon IMPORTANTE Cambiar, esto es el icono de arriba -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Boxicons IMPORTANTE -->
  <link rel="stylesheet" href="../css/fonts/boxicons.css" />

  <!-- Fonts SE PUEDE CAMBIAR -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Nucleo CSS -->
  <link rel="stylesheet" href="../css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../css/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../css/apex-charts/apex-charts.css" />

  <!-- Helpers -->
  <script src="../js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo d-flex justify-content-center align-items-center">
          <div class="d-flex justify-content-center align-items-center">
            <a href="admin.php">
              <img alt="logo" style="width: 160px;" src="assets/img/Zerotoplan.png" />
            </a>
          </div>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">

          <?php $url = "http://".$_SERVER['HTTP_HOST']."/norte_app" ?>
          <!-- Dashboard -->
          <li class="<?php echo $menu == '1' ? 'menu-item active' : 'menu-item'; ?>">
            <a href="home.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Home</div>
            </a>
          </li>

          <!-- Corridor -->
          <?php if (($_SESSION["nivel"] == "orga") /*|| (($_SESSION["nivel"] == "arqu")) || (($_SESSION["nivel"] == "fina"))*/ || (($_SESSION["nivel"] == "brok")) || (($_SESSION["nivel"] == "data")) || (($_SESSION["nivel"] == "deve"))) { ?>
          <li class="<?php echo $menu == '2' ? 'menu-item active' : 'menu-item'; ?>">
            <a href="corredores.php" class="menu-link">
              <i class='menu-icon tf-icons bx bx-buildings'></i>
              <div data-i18n="Analytics">Development Corridor</div>
            </a>
          </li>
          <?php } ?>

          <!-- Massings -->
          <?php if (($_SESSION["nivel"] == "orga") || (($_SESSION["nivel"] == "arqu")) || (($_SESSION["nivel"] == "fina")) || (($_SESSION["nivel"] == "brok")) || (($_SESSION["nivel"] == "deve"))) { ?>
          <li class="<?php echo $menu == '3' ? 'menu-item active' : 'menu-item'; ?>">
            <a href="proyects.php" class="menu-link">
              <i class='menu-icon tf-icons bx bx-building'></i>
              <div data-i18n="Analytics">Building Massing</div>
            </a>
          </li>
          <?php } ?>

          <!-- Usuarios -->
          <?php if ($_SESSION["nivel"] == "orga") { ?>
          <li class="<?php echo $menu == '4' ? 'menu-item active' : 'menu-item'; ?>">
            <a href="admin_usuarios.php" class="menu-link">
              <i class='menu-icon tf-icons bx bx-user'></i>
              <div data-i18n="Analytics">Users</div>
            </a>
          </li>
          <?php } ?>


          <!-- Reportes -->
          <?php if ($_SESSION["nivel"] == "orga") { ?>
          <!-- <li class="<?php echo $menu == '6' ? 'menu-item active' : 'menu-item'; ?>">
              <a href="reportes.php" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-report'></i>
                <div data-i18n="Analytics">Reports</div>
              </a>
            </li> -->
          <?php } ?>

          <!-- Cerrar Session -->
          <hr style="color: #d9dee3;" size="4" width="100%" />

          <li class="<?php echo $menu == '40' ? 'menu-item active' : 'menu-item'; ?>">
            <a href="cerrar_sesion.php" class="menu-link">
              <i class='menu-icon tf-icons bx bx-exit'></i>
              <div data-i18n="Analytics">Log Out</div>
            </a>
          </li>

        </ul>
      </aside>
      <!-- / Menu -->