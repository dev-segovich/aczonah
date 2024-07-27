<?php
$menu = '2';
require_once 'validate_sesion.php';
include 'templates/header.php';
require_once 'config.php';
?>


<!-- Obtener el boton "Guardar Cambios" por su ID -->
          <!-- Content wrapper -->
          
            <!-- Modals -->

            <!-- Layout container -->
            <div class="layout-page">
           
            <?php if ($_SESSION["nivel"] == "data") {
                include_once 'relleno_corredor/tabla_data.php';
            } else if ($_SESSION["nivel"] == "brok") {
              include_once 'relleno_corredor/tabla_brok.php';
            } else if ($_SESSION["nivel"] == "orga") {
              include_once 'relleno_corredor/tabla_orga.php';
            } 
            ?>

              
              

            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
          </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>


    <!-- / Layout wrapper -->
<?php include 'templates/footer.php' ?>