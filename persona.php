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
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Informació de la <?php echo $nomTaula; ?> // <span class="infoPersona"></span>.</h6>

            </div>
            <div class="card-body overflow-hidden">
              <!--
              <div class="row">
                  <div class=" col-md-12">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalJugador"><i class="fas fa-plus-circle"></i> Alta</button>
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalJugador"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalJugador"><i class="fas fa-minus-circle"></i> Elimina</button>
                      </div>
                  </div>
              </div>
              -->

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
                                          $nomComplet = utf8_encode($row['ap1'])." ".utf8_encode($row['ap2']).", ".utf8_encode($row['nom']);
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

        <!-- Tabs (Jugador, Entrenador, Arbit, Directiu i Altres) -->
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="jugador-tab" data-toggle="tab" href="#jugador" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user-circle"></i> Jugador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="entrenador-tab" data-toggle="tab" href="#entrenador" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-user-circle"></i> Entrenador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="arbit-tab" data-toggle="tab" href="#arbit" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-user-circle"></i> Arbit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="directiu-tab" data-toggle="tab" href="#directiu" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-user-circle"></i> Directiu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="altre-tab" data-toggle="tab" href="#altre" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-user-circle"></i> Altre</a>
          </li>
        </ul>
        <!-- tab contents -->
        <div class="tab-content" id="myTabContent">
          
          <div class="tab-pane fade show active" id="jugador" role="tabpanel" aria-labelledby="jugador-tab">
            <div class="card">
              <!-- Jugador table -->
                <div class="card shadow mb-2">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectoria Jugador | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body ">
                    <div class="row mb-4" id="jugador-botons">
                        <div class="col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalJugador"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalJugador"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalJugador"><i class="fas fa-minus-circle"></i> Elimina</button>
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
              <!-- Relatos Jugador table -->
                <div class="card shadow">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments"></i> Relats Jugador | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body ">
                    <div class="row mb-4" id="relat-jugador-botons">
                        <div class="col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalRelatJugador"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalRelatJugador"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalRelatJugador"><i class="fas fa-minus-circle"></i> Elimina</button>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="table-responsive overflow-hidden">
                        <table class="table table-striped table-bordered table-hover display" id="dtRelatJugador" width="100%">
                            <thead>
                                <tr>
                                    <th class="none">Id</th>
                                    <th class="none">Id Persona</th>
                                    <th>Temporada</th>
                                    <th>Comentari</th>

                                </tr>
                            </thead>
                            <tbody><?php
                                      $sql ="SELECT * FROM caixo_persona
                                            WHERE id_persona='".$_REQUEST['id']."' AND role='J'
                                            ORDER BY temporada ASC";
                                      $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                      while ($row = mysqli_fetch_array($rs)){
                                  ?>
                                  <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['id_persona']; ?></td>
                                    <td><?php echo $row['temporada']; ?></td>
                                    <td><?php echo utf8_encode($row['comentari']); ?></td>
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
            </div>
          </div>

          <div class="tab-pane fade" id="entrenador" role="tabpanel" aria-labelledby="entrenador-tab">
            <div class="card">
              <!-- Entrenador table -->
                <div class="card shadow mb-2">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i></i> Trajectòria Entrenador | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body">
                    <div class="row mb-4" id="entrenador-botons">
                        <div class=" col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalEntrenador"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalEntrenador"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalEntrenador"><i class="fas fa-minus-circle"></i> Elimina</button>
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
              <!-- Relatos Entrenador table -->
                <div class="card shadow">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments"></i> Relats Entrenador | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body ">
                    <div class="row mb-4" id="relat-entrenador-botons">
                        <div class="col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalRelatEntrenador"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalRelatEntrenador"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalRelaetEntrenador"><i class="fas fa-minus-circle"></i> Elimina</button>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="table-responsive overflow-hidden">
                        <table class="table table-striped table-bordered table-hover display" id="dtRelatEntrenador" width="100%">
                            <thead>
                                <tr>
                                    <th class="none">Id</th>
                                    <th class="none">Id Persona</th>
                                    <th>Temporada</th>
                                    <th>Comentari</th>

                                </tr>
                            </thead>
                            <tbody><?php
                                      $sql ="SELECT * FROM caixo_persona
                                            WHERE id_persona='".$_REQUEST['id']."' AND role='E'
                                            ORDER BY temporada ASC";
                                      $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                      while ($row = mysqli_fetch_array($rs)){
                                  ?>
                                  <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['id_persona']; ?></td>
                                    <td><?php echo $row['temporada']; ?></td>
                                    <td><?php echo utf8_encode($row['comentari']); ?></td>
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
            </div>
          </div>

          <div class="tab-pane fade" id="arbit" role="tabpanel" aria-labelledby="arbit-tab">
            <div class="card">
              <!-- Arbit table -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectòria Arbit | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body">
                    <div class="row mb-4" id="arbit-botons">
                        <div class=" col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalArbit"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalArbit"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalArbit"><i class="fas fa-minus-circle"></i> Elimina</button>
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
              <!-- Relatos Arbit table -->
                <div class="card shadow">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments"></i> Relats Arbit | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body ">
                    <div class="row mb-4" id="relat-arbit-botons">
                        <div class="col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalRelatArbit"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalRelatArbit"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalRelatArbit"><i class="fas fa-minus-circle"></i> Elimina</button>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="table-responsive overflow-hidden">
                        <table class="table table-striped table-bordered table-hover display" id="dtRelatArbit" width="100%">
                            <thead>
                                <tr>
                                    <th class="none">Id</th>
                                    <th class="none">Id Persona</th>
                                    <th>Temporada</th>
                                    <th>Comentari</th>

                                </tr>
                            </thead>
                            <tbody><?php
                                      $sql ="SELECT * FROM caixo_persona
                                            WHERE id_persona='".$_REQUEST['id']."' AND role='A'
                                            ORDER BY temporada ASC";
                                      $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                      while ($row = mysqli_fetch_array($rs)){
                                  ?>
                                  <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['id_persona']; ?></td>
                                    <td><?php echo $row['temporada']; ?></td>
                                    <td><?php echo utf8_encode($row['comentari']); ?></td>
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
            </div>
          </div>
          
          <div class="tab-pane fade" id="directiu" role="tabpanel" aria-labelledby="directiu-tab">
            <div class="card">
              <!-- Directiu table -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectòria Directiu | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body">
                    <div class="row mb-4" id="directiu-botons">
                        <div class=" col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalDirectiu"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalDirectiu"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalDirectiu"><i class="fas fa-minus-circle"></i> Elimina</button>
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
              <!-- Relatos Arbit table -->
                <div class="card shadow">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments"></i> Relats Directiu | <span><?php echo $nomComplet; ?></span>.</h6>

                  </div>
                  <div class="card-body ">
                    <div class="row mb-4" id="relat-directiu-botons">
                        <div class="col-md-6">
                            <div class="btn-group"  role="group">
                                <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalRelatDirectiu"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalRelatDirectiu"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalRelatDirectiu"><i class="fas fa-minus-circle"></i> Elimina</button>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="table-responsive overflow-hidden">
                        <table class="table table-striped table-bordered table-hover display" id="dtRelatDirectiu" width="100%">
                            <thead>
                                <tr>
                                    <th class="none">Id</th>
                                    <th class="none">Id Persona</th>
                                    <th>Temporada</th>
                                    <th>Comentari</th>
                                </tr>
                            </thead>
                            <tbody><?php
                                      $sql ="SELECT * FROM caixo_persona
                                            WHERE id_persona='".$_REQUEST['id']."' AND role='D'
                                            ORDER BY temporada ASC";
                                      $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                      while ($row = mysqli_fetch_array($rs)){
                                  ?>
                                  <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['id_persona']; ?></td>
                                    <td><?php echo $row['temporada']; ?></td>
                                    <td><?php echo utf8_encode($row['comentari']); ?></td>
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
            </div>
          </div>
          
          <div class="tab-pane fade" id="altre" role="tabpanel" aria-labelledby="altre-tab">
            <!-- Altre table -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user"></i> Trajectòria Altres Càrrecs | <span><?php echo $nomComplet; ?></span>.</h6>

                </div>
                <div class="card-body">
                  <div class="row mb-4" id="altre-botons">
                      <div class=" col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalAltre"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalAltre"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalAltre"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>

                  <!-- row -->
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
            <!-- Relatos Altre table -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments"></i> Relats Altre Càrrec | <span><?php echo $nomComplet; ?></span>.</h6>

                </div>
                <div class="card-body ">
                  <div class="row mb-4" id="relat-altre-botons">
                      <div class="col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModalRelatAltre"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModalRelatAltre"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModalRelatAltre"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>
                  <div class="table-responsive overflow-hidden">
                      <table class="table table-striped table-bordered table-hover display" id="dtRelatAltre" width="100%">
                          <thead>
                              <tr>
                                  <th class="none">Id</th>
                                  <th class="none">Id Persona</th>
                                  <th>Temporada</th>
                                  <th>Comentari</th>

                              </tr>
                          </thead>
                          <tbody><?php
                                    $sql ="SELECT * FROM caixo_persona
                                          WHERE id_persona='".$_REQUEST['id']."' AND role='O'
                                          ORDER BY temporada ASC";
                                    $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                    while ($row = mysqli_fetch_array($rs)){
                                ?>
                                <tr>
                                  <td><?php echo $row['id']; ?></td>
                                  <td><?php echo $row['id_persona']; ?></td>
                                  <td><?php echo $row['temporada']; ?></td>
                                  <td><?php echo utf8_encode($row['comentari']); ?></td>
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
          </div>
        
        </div>

        
        <!-- end tab contents -->

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

  <?php include 'modals/modal_trajectoria_jugador_new.php'; ?>
  <?php include 'modals/modal_trajectoria_entrenador_new.php'; ?>
  <?php include 'modals/modal_trajectoria_arbit_new.php'; ?>
  <?php include 'modals/modal_trajectoria_directiu_new.php'; ?>
  <?php include 'modals/modal_trajectoria_altre_new.php'; ?>


  <?php //include 'modals/modal_relat_jugador_new.php'; ?>
  <?php //include 'modals/modal_relat_jugador_edit.php'; ?>
  <?php //include 'modals/modal_relat_entrenador_new.php'; ?>
  <?php //include 'modals/modal_relat_arbit_new.php'; ?>
  <?php //include 'modals/modal_relat_directiu_new.php'; ?>
  <?php //include 'modals/modal_relat_altre_new.php'; ?>

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
        $('.infoPersona').html(nomPersona);

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

        // Missatge max-length
        $('input[maxlength] , textarea').maxlength({
          alwaysShow: false, 
          warningClass: "form-text text-muted mt-1", 
          limitReachedClass: "form-text text-muted mt-1", 
          showMaxLength: true, 
          showCharsTyped: true, 
          placement: 'bottom-right-inside', 
        });

        // reset dels camps de formulari en tancar un modal
        $('.modal').on('hidden.bs.modal', function () {
          $(this).find('form').trigger('reset');
        });


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
        

        var tRelatJugador = $('#dtRelatJugador').DataTable({
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

        tRelatJugador.buttons().container().appendTo( '#relat-jugador-botons .col-md-6:eq(1)' );

        var tRelatEntrenador = $('#dtRelatEntrenador').DataTable({
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

        tRelatEntrenador.buttons().container().appendTo( '#relat-entrenador-botons .col-md-6:eq(1)' );

        var tRelatArbit = $('#dtRelatArbit').DataTable({
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

        tRelatArbit.buttons().container().appendTo( '#relat-arbit-botons .col-md-6:eq(1)' );

        var tRelatDirectiu = $('#dtRelatDirectiu').DataTable({
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

        tRelatDirectiu.buttons().container().appendTo( '#relat-directiu-botons .col-md-6:eq(1)' );

        var tRelatAltre = $('#dtRelatAltre').DataTable({
            responsive: true,
            select: true,
            columnDefs: [ { "width": "5%", "targets": 2 } ],
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

        tRelatAltre.buttons().container().appendTo( '#relat-altre-botons .col-md-6:eq(1)' );



    });

   </script>

</body>

</html>
