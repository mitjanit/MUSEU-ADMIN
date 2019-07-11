<?php include("common/mysessions.php"); ?>
<?php include("common/head.php") ?>
<?php require_once('connexions/connexio01.php'); ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("common/navigation.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("common/notifications.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Administració</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Entitats -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-primary text-uppercase mb-1">Entitats</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $query1 = "SELECT COUNT(*) as numClubs FROM clubs";
                          $rs = mysqli_query($con01, $query1) or die("Error: ".mysqli_error($con01));
                          $row = mysqli_fetch_array($rs);
                          echo $row['numClubs'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shield-alt fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Persones -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-success text-uppercase mb-1">Persones</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $query2 = "SELECT COUNT(*) as numPersones FROM persones";
                          $rs2 = mysqli_query($con01, $query2) or die("Error: ".mysqli_error($con01));
                          $row2 = mysqli_fetch_array($rs2);
                          echo $row2['numPersones'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Competicions -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-info text-uppercase mb-1">Competicions</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $query3 = "SELECT COUNT(*) as numComps FROM competicions";
                          $rs3 = mysqli_query($con01, $query3) or die("Error: ".mysqli_error($con01));
                          $row3 = mysqli_fetch_array($rs3);
                          echo $row3['numComps'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-trophy fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Paisos -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-warning text-uppercase mb-1">Paisos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $query4 = "SELECT COUNT(*) as numPaisos FROM paisos";
                          $rs4 = mysqli_query($con01, $query4) or die("Error: ".mysqli_error($con01));
                          $row4 = mysqli_fetch_array($rs4);
                          echo $row4['numPaisos'];
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-globe-europe fa-4x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Associació Històrica Futbol Menorquí</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/logo.jpg" alt="">
                  </div>
                  <p>L'Associació Històrica del futbol Menorquí (AHFM) es va crear per recopilar la història del Futbol a Menorca i dels menorquins fora de l'illa.</p>
                  <a target="_blank" rel="nofollow" href="https://www.historiafutbolmenorqui.com">Web de l'Associació Històrica del Futbol Menorquí &rarr;</a>
                </div>
              </div>

              

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informació</h6>
                </div>
                <div class="card-body">
                  <p>Aquest és un projecte de gestió de dades del futbol menorquí gestionat per l'<b>Associació Històrica del Futbol Menorquí</b>.</p>
                  <p>Abans d'utilitzar aquesta aplicació o en cas de dubtes, es recomana consultar el <a target="_blank" rel="nofollow" href="docs/manual.pdf">Manual de l'Aplicació de Gestió de Dades del Museu del Futbol Menorquí &rarr;</a></p>
                </div>
              </div>

            </div>

            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include("common/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- MODALS -->

  <!-- modal de log out -->
  <?php include 'common/modalout.php'; ?>

  <?php include("common/end.php") ?>

</body>

</html>
