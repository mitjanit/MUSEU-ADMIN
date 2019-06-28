<?php include("common/mysessions.php"); ?>
<?php include("common/head.php") ?>
<?php require_once('connexions/connexio01.php'); ?>

<?php

$nomTaula = "Persona";

?>

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
          <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-th-large"></i> <?php echo $nomTaula; ?></h1>
          <p class="mb-4">Gestió de dades de <?php echo $nomTaula; ?>.</p>


          <!-- DataTales Example -->
          <div class="card shadow mb-4 overflow-hidden">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Informació de la <?php echo $nomTaula; ?> // <span id="personaInfo"></span>.</h6>

            </div>
            <div class="card-body overflow-hidden">
              <div class="row">
                  <div class=" col-md-12">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
              </div>

                <div class="table-responsive overflow-hidden">
                  <table class="table table-bordered" id="dtPersona1" width="100%" cellspacing="0">
                                  <thead class="table-primary">
                                      <tr>
                                          <th>Registre</th>
                                          <th>Nom Esportiu</th>
                                          <th>1r Llinatge</th>
                                          <th>2n Llinatge</th>
                                          <th>Nom</th>
                                          <th>Detalls 1</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $sql ="SELECT * FROM persones
                                                 WHERE id='".$_REQUEST['id']."'";
                                          $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                          while ($row = mysqli_fetch_array($rs)){
                                      ?>
                                      <tr>
                                          <td><?php echo $row['id']; ?></td>
                                          <td><?php echo utf8_encode($row['nom_esportiu']); ?></td>
                                          <td><?php echo utf8_encode($row['ap1']); ?></td>
                                          <td><?php echo utf8_encode($row['ap2']); ?></td>
                                          <td><?php echo utf8_encode($row['nom']); ?></td>
                                          <td><?php echo utf8_encode($row['detalls']); ?></td>
                                      </tr>
                                      <?php
                                          }
                                      ?>
                                  </tbody>
                  </table>
                  <table class="table table-bordered" id="dtPersona2" width="100%" cellspacing="0">
                                  <thead  class="table-primary">
                                      <tr>
                                          <th>DNI</th>
                                          <th>Localitat</th>
                                          <th>Provincia</th>
                                          <th>Pais</th>
                                          <th>Naixement</th>
                                          <th>Mort</th>
                                          <th>Detalls Mort</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $sql ="SELECT * FROM persones
                                                 WHERE id='".$_REQUEST['id']."'";
                                          $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                          while ($row = mysqli_fetch_array($rs)){
                                      ?>
                                      <tr>
                                          <td><?php echo $row['dni']; ?></td>
                                          <td><?php echo $row['poblacions_id']; ?></td>
                                          <td><?php echo $row['provincia_id']; ?></td>
                                          <td><?php echo $row['paisos_id']; ?></td>
                                          <td><?php echo $row['data_naixament']; ?></td>
                                          <td><?php echo $row['mort']; ?></td>
                                          <td><?php echo utf8_encode($row['mort_detall']); ?></td>
                                      </tr>
                                      <?php
                                          }
                                      ?>
                                  </tbody>
                  </table>
                  <table class="table table-bordered" id="dtPersona3" width="100%" cellspacing="0">
                      <thead  class="table-primary">
                                      <tr>
                                          <th>Material</th>
                                          <th>Ficha</th>
                                          <th>Fotos</th>
                                          <th>Entrev</th>
                                          <th>Report</th>
                                          <th>Altre 1</th>
                                          <th>Altre 2</th>
                                          <th>Altre 3</th>
                                          <th>Detalls 2</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $sql ="SELECT * FROM persones
                                                 WHERE id='".$_REQUEST['id']."'";
                                          $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                          while ($row = mysqli_fetch_array($rs)){
                                      ?>
                                      <tr>
                                          <td><?php echo $row['material']; ?></td>
                                          <td><?php echo $row['ficha']; ?></td>
                                          <td><?php echo $row['fotos']; ?></td>
                                          <td><?php echo $row['entrevistes']; ?></td>
                                          <td><?php echo $row['croniques']; ?></td>
                                          <td><?php echo $row['dada1']; ?></td>
                                          <td><?php echo $row['dada2']; ?></td>
                                          <td><?php echo $row['dada3']; ?></td>
                                          <td><?php echo utf8_encode($row['detalls2']); ?></td>
                                      </tr>
                                      <?php
                                          }
                                      ?>
                                  </tbody>
                  </table>
                </div>
            
            </div>
        </div>

        <!-- Jugador table -->
          <div class="card shadow mb-4  ">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectoria Jugador // <span id="jugadorInfo"></span>.</h6>

            </div>
            <div class="card-body ">
              <div class="row mb-4" id="jugador-botons">
                  <div class="col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
                  <div class="col-md-6"></div>
              </div>
              <div class="table-responsive overflow-hidden">
                  <table class="table table-striped table-bordered table-hover display" id="dtJugador" width="100%">
                      <thead>
                          <tr>
                              <th class="none">Id</th>
                              <th class="none">Id Persona</th>
                              <th>Temporada</th>
                              <th>Demarcació</th>
                              <th>Club</th>
                              <th>Visitant</th>
                              <th>Categoria</th>
                              <th>Competició</th>
                              <th>PJ</th>
                              <th>Res</th>
                              <th>PC</th>
                              <th>PS</th>
                              <th>GF</th>
                              <th>GC</th>
                              <th>??</th>
                              <th>Classif.</th>
                              <th>Detalls</th>

                          </tr>
                      </thead>
                      <tbody><?php
                                $sql ="SELECT * FROM trajectoria_persona
                                      WHERE id_persona='".$_REQUEST['id']."' AND role='J'
                                      ORDER BY temporada ASC";
                                $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                while ($row = mysqli_fetch_array($rs)){
                            ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['id_persona']; ?></td>
                              <td><?php echo $row['temporada']; ?></td>
                              <td><?php echo $row['id_demarcacio']; ?></td>
                              <td><?php echo $row['id_club']; ?></td>
                              <td><?php echo $row['id_visitant']; ?></td>
                              <td><?php echo $row['id_categoria']; ?></td>
                              <td><?php echo $row['id_competicio']; ?></td>
                              <td><?php echo $row['pj']; ?></td>
                              <td><?php echo $row['resultat']; ?></td>
                              <td><?php echo $row['pg']; ?></td>
                              <td><?php echo $row['pe']; ?></td>
                              <td><?php echo $row['gf']; ?></td>
                              <td><?php echo $row['gc']; ?></td>
                              <td><?php echo $row['pp']; ?></td>
                              <td><?php echo $row['classificacio']; ?></td>
                              <td><?php echo utf8_encode($row['detalls1']); ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                  </table>
                  <!-- /.table-responsive -->
            </div>
            <!-- /.row -->
            
            </div>
        </div>

        <!-- Entrenador table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i></i> Trajectòria Entrenador // <span id="entrenadorInfo"></span>.</h6>

            </div>
            <div class="card-body">
              <div class="row mb-4" id="entrenador-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
                  <div class="col-md-6"></div>
              </div>

              <!-- row documentació entitat -->
            <div class="row mb-4" >
              <div class="table-responsive overflow-hidden">
                  <table class="table table-striped table-bordered table-hover display" id="dtEntrenador" width="100%">
                      <thead>
                          <tr>
                              <th class="none">Id</th>
                              <th class="none">Id Persona</th>
                              <th>Temporada</th>
                              <th>Club</th>
                              <th>Visitant</th>
                              <th>Categoria</th>
                              <th>Competició</th>
                              <th class="none">Detalls</th>
                              <th>PJ</th>
                              <th>Res</th>
                              <th>PG</th>
                              <th>PE</th>
                              <th>PP</th>
                              <th>GF</th>
                              <th>GC</th>
                              <th>Classif.</th>
                              <th class="none">Detalls2</th>
                          </tr>
                      </thead>
                      <tbody><?php
                                $sql ="SELECT * FROM trajectoria_persona
                                      WHERE id_persona='".$_REQUEST['id']."' AND role='E'
                                      ORDER BY temporada ASC";
                                $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                while ($row = mysqli_fetch_array($rs)){
                            ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['id_persona']; ?></td>
                              <td><?php echo $row['temporada']; ?></td>
                              <td><?php echo $row['id_club']; ?></td>
                              <td><?php echo $row['id_visitant']; ?></td>
                              <td><?php echo $row['id_categoria']; ?></td>
                              <td><?php echo $row['id_competicio']; ?></td>
                              <td><?php echo utf8_encode($row['detalls1']); ?></td>
                              <td><?php echo $row['pj']; ?></td>
                              <td><?php echo $row['resultat']; ?></td>
                              <td><?php echo $row['pg']; ?></td>
                              <td><?php echo $row['pe']; ?></td>
                              <td><?php echo $row['pp']; ?></td>
                              <td><?php echo $row['gf']; ?></td>
                              <td><?php echo $row['gc']; ?></td>
                              <td><?php echo $row['classificacio']; ?></td>
                              <td><?php echo utf8_encode($row['detalls2']); ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
            </div>
            <!-- /.row -->
            
            </div>
        </div>

        <!-- Arbit table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectòria Arbit // <span id="arbitInfo"></span>.</h6>

            </div>
            <div class="card-body">
              <div class="row mb-4" id="arbit-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
                  <div class="col-md-6"></div>
              </div>

              <!-- row activitats entitat -->
              <div class="row mb-4" >
                <div class="table-responsive overflow-hidden">
                    <table class="table table-striped table-bordered table-hover display" id="dtArbit" width="100%">
                      <thead>
                          <tr>
                              <th class="none">Id</th>
                              <th class="none">Id Persona</th>
                              <th>Temporada</th>
                              <th>Club</th>
                              <th>Actuació</th>
                              <th>Categoria</th>
                              <th>Competició</th>
                              <th class="none">Detalls</th>
                              <th>Act</th>
                              <th>Cat</th>
                              <th>Sup</th>
                              <th>Inf</th>
                              <th>J.Lin</th>
                              <th>??</th>
                              <th>??</th>
                              <th>Classif.</th>
                              <th class="none">Detalls2</th>
                          </tr>
                      </thead>
                      <tbody><?php
                                $sql ="SELECT * FROM trajectoria_persona
                                      WHERE id_persona='".$_REQUEST['id']."' AND role='A'
                                      ORDER BY temporada ASC";
                                $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                while ($row = mysqli_fetch_array($rs)){
                            ?>
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['id_persona']; ?></td>
                              <td><?php echo $row['temporada']; ?></td>
                              <td><?php echo $row['id_club']; ?></td>
                              <td><?php echo $row['actuacio']; ?></td>
                              <td><?php echo $row['id_categoria']; ?></td>
                              <td><?php echo $row['id_competicio']; ?></td>
                              <td><?php echo utf8_encode($row['detalls1']); ?></td>
                              <td><?php echo $row['pj']; ?></td>
                              <td><?php echo $row['resultat']; ?></td>
                              <td><?php echo $row['pg']; ?></td>
                              <td><?php echo $row['pe']; ?></td>
                              <td><?php echo $row['pp']; ?></td>
                              <td><?php echo $row['gf']; ?></td>
                              <td><?php echo $row['gc']; ?></td>
                              <td><?php echo $row['classificacio']; ?></td>
                              <td><?php echo utf8_encode($row['detalls2']); ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                  </table>
                    <!-- /.table-responsive -->
                  <!-- /.col -->
                </div>
              <!-- /.row -->
              </div>
          </div>
        </div>

        <!-- Directiu table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectòria Directiu // <span id="directiuInfo"></span>.</h6>

            </div>
            <div class="card-body">
              <div class="row mb-4" id="directiu-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
                  <div class="col-md-6"></div>

              </div>

              <!-- row activitats entitat -->
              <div class="row mb-4" >
                <div class="table-responsive overflow-hidden">
                      <table class="table table-striped table-bordered table-hover display" id="dtDirectiu" width="100%">
                        <thead>
                            <tr>
                                <th class="none">Id</th>
                                <th class="none">Id Persona</th>
                                <th>Temporada</th>
                                <th>Club</th>
                                <th>Càrrec</th>
                                <th>Categoria</th>
                                <th>N.Equips</th>
                                <th class="none">Detalls</th>
                                <th>PJ</th>
                                <th>Res</th>
                                <th>PG</th>
                                <th>PE</th>
                                <th>PP</th>
                                <th>GF</th>
                                <th>GC</th>
                                <th>Classif.</th>
                                <th class="none">Detalls2</th>
                            </tr>
                        </thead>
                        <tbody><?php
                                  $sql ="SELECT * FROM trajectoria_persona
                                        WHERE id_persona='".$_REQUEST['id']."' AND role='D'
                                        ORDER BY temporada ASC";
                                  $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                  while ($row = mysqli_fetch_array($rs)){
                              ?>
                              <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['id_persona']; ?></td>
                                <td><?php echo $row['temporada']; ?></td>
                                <td><?php echo $row['id_club']; ?></td>
                                <td><?php echo $row['id_carrec']; ?></td>
                                <td><?php echo $row['id_categoria']; ?></td>
                                <td><?php echo $row['num_equips']; ?></td>
                                <td><?php echo utf8_encode($row['detalls1']); ?></td>
                                <td><?php echo $row['pj']; ?></td>
                                <td><?php echo $row['resultat']; ?></td>
                                <td><?php echo $row['pg']; ?></td>
                                <td><?php echo $row['pe']; ?></td>
                                <td><?php echo $row['pp']; ?></td>
                                <td><?php echo $row['gf']; ?></td>
                                <td><?php echo $row['gc']; ?></td>
                                <td><?php echo $row['classificacio']; ?></td>
                                <td><?php echo utf8_encode($row['detalls2']); ?></td>
                              </tr>
                              <?php
                                  }
                              ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  <!-- /.col -->
                </div>
              <!-- /.row -->
              </div>
          </div>
        </div>

        <!-- Altre table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectòria Altres Càrrecs // <span id="altreInfo"></span>.</h6>

            </div>
            <div class="card-body">
              <div class="row mb-4" id="altre-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
                  <div class="col-md-6"></div>
              </div>

              <!-- row activitats entitat -->
              <div class="row mb-4" >
                <div class="table-responsive overflow-hidden">
                      <table class="table table-striped table-bordered table-hover display" id="dtAltre" width="100%">
                        <thead>
                            <tr>
                                <th class="none">Id</th>
                                <th class="none">Id Persona</th>
                                <th>Temporada</th>
                                <th>Club</th>
                                <th>Càrrec</th>
                                <th>Categoria</th>
                                <th>N.Equips</th>
                                <th class="none">Detalls</th>
                                <th>PJ</th>
                                <th>Res</th>
                                <th>PG</th>
                                <th>PE</th>
                                <th>PP</th>
                                <th>GF</th>
                                <th>GC</th>
                                <th>Classif.</th>
                                <th class="none">Detalls2</th>
                            </tr>
                        </thead>
                        <tbody><?php
                                  $sql ="SELECT * FROM trajectoria_persona
                                        WHERE id_persona='".$_REQUEST['id']."' AND role='O'
                                        ORDER BY temporada ASC";
                                  $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                  while ($row = mysqli_fetch_array($rs)){
                              ?>
                              <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['id_persona']; ?></td>
                                <td><?php echo $row['temporada']; ?></td>
                                <td><?php echo $row['id_club']; ?></td>
                                <td><?php echo $row['id_carrec']; ?></td>
                                <td><?php echo $row['id_categoria']; ?></td>
                                <td><?php echo $row['num_equips']; ?></td>
                                <td><?php echo utf8_encode($row['detalls1']); ?></td>
                                <td><?php echo $row['pj']; ?></td>
                                <td><?php echo $row['resultat']; ?></td>
                                <td><?php echo $row['pg']; ?></td>
                                <td><?php echo $row['pe']; ?></td>
                                <td><?php echo $row['pp']; ?></td>
                                <td><?php echo $row['gf']; ?></td>
                                <td><?php echo $row['gc']; ?></td>
                                <td><?php echo $row['classificacio']; ?></td>
                                <td><?php echo utf8_encode($row['detalls2']); ?></td>
                              </tr>
                              <?php
                                  }
                              ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  <!-- /.col -->
                </div>
              <!-- /.row -->
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

    <!-- dialeg modal NEW -->
    <div  class="modal fade" id="myNewModal" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Entitat</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div id="newBody" class="modal-body">
                        <form role="form" name="modalFormNew" action="altaEntitat.php" method="get" data-toggle="validator">
                            <div class="row mb-4">
                                <!-- row 0 -->
                                <div class=" col-md-4">
                                      <label for="reg">Registre:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" name="c1" class="form-control" id="reg" placeholder="Registre">
                                      </div>
                                </div>
                                <div class=" col-md-4">
                                      <label for="nome">Nom Esportiu:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" name="c2" id="nome" placeholder="Nom Esportiu">
                                      </div>
                                </div>

                                <div class=" col-md-4">
                                      <label for="nom">Nom:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="nom" name="c3"placeholder="Nom">
                                      </div>
                                </div>

                            </div>
                            <!-- end row 0 -->

                            <div class="row mb-4">

                                <div class=" col-md-4">
                                      <label for="pais">Pais:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="pais" name="c4"placeholder="Pais">
                                      </div>
                                </div>

                                <div class=" col-md-4">
                                      <label for="provincia">Provincia:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="provincia" name="c5"placeholder="Provincia">
                                      </div>
                                </div>

                                <div class=" col-md-4">
                                      <label for="localitat">Localitat:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="localitat" name="c6"placeholder="Localitat">
                                      </div>
                                </div>

                            </div>

                           <div class="row mb-4">

                                <div class=" col-md-4">
                                      <label for="inici">Any Inici:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="year" class="form-control" id="inici" name="c7"placeholder="Any Inici">
                                      </div>
                                </div>

                                <div class=" col-md-8">
                                      <label for="detalls">Detalls:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="detalls" name="c8"placeholder="Detalls">
                                      </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col"><hr></div>
                            </div>

                            <div class="row mb-4">

                                <div class=" col-md-2">
                                      <label for="escut">Escut:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="escut" name="c9" placeholder="Escut">
                                      </div>
                                </div>


                                <div class=" col-md-2">
                                      <label for="escut">Himne:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="himne" name="c10" placeholder="Himne">
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="cd">CD:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="cd" name="c11" placeholder="CD">
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="insignia">Insignia:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="insignia" name="c12" placeholder="CD">
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="camiseta">Camiseta:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="camiseta" name="c13" placeholder="CD">
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="bufanda">Bufanda:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="bufanda" name="c14" placeholder="Bufanda">
                                      </div>
                                </div>
                                

                            </div>

                            <div class="row">

                                <div class=" col-md-2">
                                      <label for="bandera">Bandera:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="bandera" name="c15" placeholder="Bandera">
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="altre">Altre:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="altre" name="c14" placeholder="Altre">
                                      </div>
                                </div>

                                <div class=" col-md-8">
                                      <label for="detalls2">Detalls:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="detalls2" name="c14" placeholder="Detalls">
                                      </div>
                                </div>

                            </div>


                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                    <button type="button" class="btn btn-primary" id="btnNew">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fi del dialeg modal NEW -->


  <?php include("common/end.php") ?>


  <script>


    $(document).ready(function() {


        var t = $('#dtPersona1').DataTable({
            responsive: false,
            select: true,
            paging: false,
            ordering: false,
            info: false,
            filter:false
        });
        var data=t.rows(0).data();
        var nomPersona = data[0][2]+" "+data[0][3]+", "+data[0][4];
        $('#personaInfo').html(nomPersona);
        $('#jugadorInfo').html(nomPersona);
        $('#entrenadorInfo').html(nomPersona);
        $('#arbitInfo').html(nomPersona);
        $('#directiuInfo').html(nomPersona);
        $('#altreInfo').html(nomPersona);

        $('#dtPersona2').DataTable({
            responsive: false,
            select: true,
            paging: false,
            ordering: false,
            info: false,
            filter:false,
            "aoColumnDefs": [
              { "sWidth": "5%", "aTargets": [ 0, 1, 2, 3, 4, 5, 6 ] }
            ]
        });

        $('#dtPersona3').DataTable({
            responsive: false,
            select: true,
            paging: false,
            ordering: false,
            info: false,
            filter:false,
            "aoColumnDefs": [
              { "sWidth": "5%", "aTargets": [ 1, 2, 3, 4 ] }
            ]
        });

        // Crec que sobra --->
        /*
        $('#dtDocsEntitat').DataTable({
            responsive: true,
            select: true,
            aoColumnDefs: [ { "sWidth": "5%", "aTargets": [5, 6, 7, 8, 9, 10] } ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              }
            }
        });*/


        var tJugador = $('#dtJugador').DataTable({
            responsive: true,
            select: true,
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fas fa-clone"></i> Copiar',
                    titleAttr: 'Copia'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                }
            ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              },
              "buttons": {
                              "copyTitle": '<i class="fas fa-clone"></i> Copiar Dades',
                              "copyKeys": 'Premeu <i>ctrl</i> o <i>\u2318</i> + <i>C</i> per copiar les dades de la taula al vostre porta-retalls. <br><br>Per cancel·lar, feu clic en aquest missatge o premeu Esc.',
                              "copySuccess": {
                                  _: '%d linies copiades',
                                  1: '1 linia copiada'
                              }
                          }
            }
        });

        tJugador.buttons().container().appendTo( '#jugador-botons .col-md-6:eq(1)' );

        var tEntrenador = $('#dtEntrenador').DataTable({
            responsive: true,
            select: true,
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fas fa-clone"></i> Copiar',
                    titleAttr: 'Copia'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                }
            ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              },
              "buttons": {
                              "copyTitle": '<i class="fas fa-clone"></i> Copiar Dades',
                              "copyKeys": 'Premeu <i>ctrl</i> o <i>\u2318</i> + <i>C</i> per copiar les dades de la taula al vostre porta-retalls. <br><br>Per cancel·lar, feu clic en aquest missatge o premeu Esc.',
                              "copySuccess": {
                                  _: '%d linies copiades',
                                  1: '1 linia copiada'
                              }
                          }
            }
        });

        tEntrenador.buttons().container().appendTo( '#entrenador-botons .col-md-6:eq(1)' );

        var tArbit = $('#dtArbit').DataTable({
            responsive: true,
            select: true,
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fas fa-clone"></i> Copiar',
                    titleAttr: 'Copia'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                }
            ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              },
              "buttons": {
                              "copyTitle": '<i class="fas fa-clone"></i> Copiar Dades',
                              "copyKeys": 'Premeu <i>ctrl</i> o <i>\u2318</i> + <i>C</i> per copiar les dades de la taula al vostre porta-retalls. <br><br>Per cancel·lar, feu clic en aquest missatge o premeu Esc.',
                              "copySuccess": {
                                  _: '%d linies copiades',
                                  1: '1 linia copiada'
                              }
                          }
            }
        });

        tArbit.buttons().container().appendTo( '#arbit-botons .col-md-6:eq(1)' );

        var tDirectiu = $('#dtDirectiu').DataTable({
            responsive: true,
            select: true,
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fas fa-clone"></i> Copiar',
                    titleAttr: 'Copia'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                }
            ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              },
              "buttons": {
                              "copyTitle": '<i class="fas fa-clone"></i> Copiar Dades',
                              "copyKeys": 'Premeu <i>ctrl</i> o <i>\u2318</i> + <i>C</i> per copiar les dades de la taula al vostre porta-retalls. <br><br>Per cancel·lar, feu clic en aquest missatge o premeu Esc.',
                              "copySuccess": {
                                  _: '%d linies copiades',
                                  1: '1 linia copiada'
                              }
                          }
            }
        });

        tDirectiu.buttons().container().appendTo( '#directiu-botons .col-md-6:eq(1)' );

        var tAltre = $('#dtAltre').DataTable({
            responsive: true,
            select: true,
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fas fa-clone"></i> Copiar',
                    titleAttr: 'Copia'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                }
            ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              },
              "buttons": {
                              "copyTitle": '<i class="fas fa-clone"></i> Copiar Dades',
                              "copyKeys": 'Premeu <i>ctrl</i> o <i>\u2318</i> + <i>C</i> per copiar les dades de la taula al vostre porta-retalls. <br><br>Per cancel·lar, feu clic en aquest missatge o premeu Esc.',
                              "copySuccess": {
                                  _: '%d linies copiades',
                                  1: '1 linia copiada'
                              }
                          }
            }
        });

        tAltre.buttons().container().appendTo( '#altre-botons .col-md-6:eq(1)' );
        



    });

   </script>

</body>

</html>
