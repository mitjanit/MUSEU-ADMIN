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
                                          <td><?php echo ($row['nom_esportiu']); ?></td>
                                          <td><?php echo ($row['ap1']); ?></td>
                                          <td><?php echo ($row['ap2']); ?></td>
                                          <td><?php echo ($row['nom']); ?></td>
                                          <td><?php echo ($row['detalls']); ?></td>
                                      </tr>
                                      <?php
                                          $nomComplet = ($row['ap1'])." ".($row['ap2']).", ".($row['nom']);
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
                                          <td><?php 
                                              if($row['poblacions_id']!=NULL){
                                                  $query_pob = "SELECT * FROM poblacions WHERE id='".$row['poblacions_id']."'";
                                                  $rsp = mysqli_query($con01, $query_pob) or die("Error: ".mysqli_error($con01));
                                                  $rowp = mysqli_fetch_array($rsp);
                                                  echo $rowp['nom'];
                                              }
                                          ?>
                                          </td>
                                          <td><?php if($row['provincia_id']!=NULL){
                                                  $query_prov = "SELECT * FROM provincies WHERE id='".$row['provincia_id']."'";
                                                  $rsprov = mysqli_query($con01, $query_prov) or die("Error: ".mysqli_error($con01));
                                                  $rowprov = mysqli_fetch_array($rsprov);
                                                  echo ($rowprov['nom']);
                                              } 
                                          ?>
                                          </td>
                                          <td><?php  if($row['paisos_id']!=NULL){
                                              $query_pais = "SELECT * FROM paisos WHERE id='".$row['paisos_id']."'";
                                                  $rspais = mysqli_query($con01, $query_pais) or die("Error: ".mysqli_error($con01));
                                                  $rowpais = mysqli_fetch_array($rspais);
                                                  echo ($rowpais['nom']); 
                                                }
                                          ?> 
                                          </td>
                                          <td><?php echo $row['data_naixament']; ?></td>
                                          <td><?php echo $row['mort']; ?></td>
                                          <td><?php echo ($row['mort_detall']); ?></td>
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
                                          <td><?php echo ($row['detalls2']); ?></td>
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
          <li class="nav-item">
            <a class="nav-link" id="docs-tab" data-toggle="tab" href="#docs" role="tab" aria-controls="docs" aria-selected="false"><i class="fas fa-file"></i> Documents</a>
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
                                <button type="button" class="btn btn-primary btn-new-jugador" data-toggle="modal" data-target="#myNewModalJugador"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-jugador" data-toggle="modal" data-target="#myEditModalJugador"><i class="fa fa-edit-jugador"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-jugador" data-toggle="modal" data-target="#myDeleteModalTrajectoria"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Entrenador</th>
                                    <th>Categoria</th>
                                    <th>Competició</th>
                                    <th>PJ</th>
                                    <th>Res</th>
                                    <th>PC</th>
                                    <th>PS</th>
                                    <th>GF</th>
                                    <th>GC</th>
                                    <!--<th>??</th>-->
                                    <th>Classif.</th>
                                    <th class="none">Detalls 1</th>
                                    <th class="none">Detalls 2</th>
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
                                    <td>
                                      <?php 
                                        if($row['id_demarcacio']!=NULL){
                                            $query = "SELECT * FROM demarcacions WHERE id='".$row['id_demarcacio']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom'];
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['id_club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_visitant']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['id_visitant']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php echo $row['entrenador']; ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_categoria']!=NULL){
                                            $query = "SELECT * FROM categories WHERE id='".$row['id_categoria']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_competicio']!=NULL){
                                            $query = "SELECT * FROM competicions WHERE id='".$row['id_competicio']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo $row['pj']; ?></td>
                                    <td><?php echo $row['resultat']; ?></td>
                                    <td><?php echo $row['pg']; ?></td>
                                    <td><?php echo $row['pe']; ?></td>
                                    <td><?php echo $row['gf']; ?></td>
                                    <td><?php echo $row['gc']; ?></td>
                                    <!--<td><?php //echo $row['pp']; ?></td>-->
                                    <td><?php echo $row['classificacio']; ?></td>
                                    <td><?php echo ($row['detalls1']); ?></td>
                                    <td><?php echo ($row['detalls2']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-relatJugador" data-toggle="modal" data-target="#myNewModalRelat"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-relatJugador" data-toggle="modal" data-target="#myEditModalRelat"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-relatJugador" data-toggle="modal" data-target="#myDeleteModalRelat"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Vinculat</th>
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
                                    <td>
                                      <?php 
                                        if($row['club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo ($row['comentari']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-entrenador" data-toggle="modal" data-target="#myNewModalEntrenador"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-entrenador" data-toggle="modal" data-target="#myEditModalEntrenador"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-entrenador" data-toggle="modal" data-target="#myDeleteModalTrajectoria"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>President</th>
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
                                    <td>
                                      <?php 
                                        if($row['id_club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['id_club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_visitant']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['id_visitant']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo $row['entrenador']; ?></td>
                                    <td>
                                      <?php 
                                        if($row['id_categoria']!=NULL){
                                            $query = "SELECT * FROM categories WHERE id='".$row['id_categoria']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_competicio']!=NULL){
                                            $query = "SELECT * FROM competicions WHERE id='".$row['id_competicio']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo ($row['detalls1']); ?></td>
                                    <td><?php echo $row['pj']; ?></td>
                                    <td><?php echo $row['resultat']; ?></td>
                                    <td><?php echo $row['pg']; ?></td>
                                    <td><?php echo $row['pe']; ?></td>
                                    <td><?php echo $row['pp']; ?></td>
                                    <td><?php echo $row['gf']; ?></td>
                                    <td><?php echo $row['gc']; ?></td>
                                    <td><?php echo $row['classificacio']; ?></td>
                                    <td><?php echo ($row['detalls2']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-relatEntrenador" data-toggle="modal" data-target="#myNewModalRelat"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-relatEntrenador" data-toggle="modal" data-target="#myEditModalRelat"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-relatEntrenador" data-toggle="modal" data-target="#myDeleteModalRelat"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Vinculat</th>
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
                                    <td>
                                      <?php 
                                        if($row['club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo ($row['comentari']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-arbit" data-toggle="modal" data-target="#myNewModalArbit"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-arbit" data-toggle="modal" data-target="#myEditModalArbit"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-arbit" data-toggle="modal" data-target="#myDeleteModalTrajectoria"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Representant</th>
                                    <th>Competició</th>
                                    <th class="none">Detalls</th>
                                    <th>Act</th>
                                    <th>Cat</th>
                                    <th>Sup</th>
                                    <th>Inf</th>
                                    <th>J.Lin</th>
                                    <!--<th>??</th>
                                    <th>??</th>-->
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
                                    <td>
                                      <?php 
                                        if($row['id_club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['id_club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo $row['actuacio']; ?></td>
                                    <td>
                                      <?php 
                                        if($row['id_categoria']!=NULL){
                                            $query = "SELECT * FROM categories WHERE id='".$row['id_categoria']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo $row['entrenador']; ?></td>
                                    <td>
                                      <?php 
                                        if($row['id_competicio']!=NULL){
                                            $query = "SELECT * FROM competicions WHERE id='".$row['id_competicio']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo ($row['detalls1']); ?></td>
                                    <td><?php echo $row['pj']; ?></td>
                                    <td><?php echo $row['resultat']; ?></td>
                                    <td><?php echo $row['pg']; ?></td>
                                    <td><?php echo $row['pe']; ?></td>
                                    <td><?php echo $row['pp']; ?></td>
                                    <!--
                                    <td><?php //echo $row['gf']; ?></td>
                                    <td><?php //echo $row['gc']; ?></td>
                                    -->
                                    <td><?php echo $row['classificacio']; ?></td>
                                    <td><?php echo ($row['detalls2']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-relatArbit" data-toggle="modal" data-target="#myNewModalRelat"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-relatArbit" data-toggle="modal" data-target="#myEditModalRelat"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-relatArbit" data-toggle="modal" data-target="#myDeleteModalRelat"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Vinculat</th>
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
                                    <td>
                                      <?php 
                                        if($row['club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo ($row['comentari']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-directiu" data-toggle="modal" data-target="#myNewModalDirectiu"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-directiu" data-toggle="modal" data-target="#myEditModalDirectiu"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-directiu" data-toggle="modal" data-target="#myDeleteModalTrajectoria"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                      <th>Representant</th>
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
                                      <td>
                                        <?php 
                                          if($row['id_club']!=NULL){
                                              $query = "SELECT * FROM clubs WHERE id='".$row['id_club']."'";
                                              $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                              $rowd = mysqli_fetch_array($rsd);
                                              echo $rowd['nom_esportiu'];
                                          }
                                        ?>
                                      </td>
                                      <td>
                                        <?php 
                                          if($row['id_carrec']!=NULL){
                                              $query = "SELECT * FROM carrecs WHERE id='".$row['id_carrec']."'";
                                              $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                              $rowd = mysqli_fetch_array($rsd);
                                              echo ($rowd['nom']);
                                          }
                                        ?>
                                      </td>
                                      <td>
                                        <?php 
                                          if($row['id_categoria']!=NULL){
                                              $query = "SELECT * FROM categories WHERE id='".$row['id_categoria']."'";
                                              $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                              $rowd = mysqli_fetch_array($rsd);
                                              echo ($rowd['nom']);
                                          }
                                        ?>
                                      </td>
                                      <td><?php echo $row['entrenador']; ?></td>
                                      <td><?php echo $row['num_equips']; ?></td>
                                      <td><?php echo ($row['detalls1']); ?></td>
                                      <td><?php echo $row['pj']; ?></td>
                                      <td><?php echo $row['resultat']; ?></td>
                                      <td><?php echo $row['pg']; ?></td>
                                      <td><?php echo $row['pe']; ?></td>
                                      <td><?php echo $row['pp']; ?></td>
                                      <td><?php echo $row['gf']; ?></td>
                                      <td><?php echo $row['gc']; ?></td>
                                      <td><?php echo $row['classificacio']; ?></td>
                                      <td><?php echo ($row['detalls2']); ?></td>
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
                                <button type="button" class="btn btn-primary btn-new-relatDirectiu" data-toggle="modal" data-target="#myNewModalRelat"><i class="fas fa-plus-circle"></i> Alta</button>
                                <button type="button" class="btn btn-primary btn-edit-relatDirectiu" data-toggle="modal" data-target="#myEditModalRelat"><i class="fa fa-edit"></i> Edita</button>
                                <button type="button" class="btn btn-primary btn-delete-relatDirectiu" data-toggle="modal" data-target="#myDeleteModalRelat"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Vinculat</th>
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
                                    <td>
                                      <?php 
                                        if($row['club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo ($row['comentari']); ?></td>
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
                              <button type="button" class="btn btn-primary btn-new-altre" data-toggle="modal" data-target="#myNewModalAltre"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-altre" data-toggle="modal" data-target="#myEditModalAltre"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-altre" data-toggle="modal" data-target="#myDeleteModalTrajectoria"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                    <th>Representant</th>
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
                                    <td>
                                      <?php 
                                        if($row['id_club']!=NULL){
                                            $query = "SELECT * FROM clubs WHERE id='".$row['id_club']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo $rowd['nom_esportiu'];
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_carrec']!=NULL){
                                            $query = "SELECT * FROM carrecs WHERE id='".$row['id_carrec']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <?php 
                                        if($row['id_categoria']!=NULL){
                                            $query = "SELECT * FROM categories WHERE id='".$row['id_categoria']."'";
                                            $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                            $rowd = mysqli_fetch_array($rsd);
                                            echo ($rowd['nom']);
                                        }
                                      ?>
                                    </td>
                                    <td><?php echo $row['entrenador']; ?></td>
                                    <td><?php echo $row['num_equips']; ?></td>
                                    <td><?php echo ($row['detalls1']); ?></td>
                                    <td><?php echo $row['pj']; ?></td>
                                    <td><?php echo $row['resultat']; ?></td>
                                    <td><?php echo $row['pg']; ?></td>
                                    <td><?php echo $row['pe']; ?></td>
                                    <td><?php echo $row['pp']; ?></td>
                                    <td><?php echo $row['gf']; ?></td>
                                    <td><?php echo $row['gc']; ?></td>
                                    <td><?php echo $row['classificacio']; ?></td>
                                    <td><?php echo ($row['detalls2']); ?></td>
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
                              <button type="button" class="btn btn-primary btn-new-relatAltre" data-toggle="modal" data-target="#myNewModalRelat"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-relatAltre" data-toggle="modal" data-target="#myEditModalRelat"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-relatAltre" data-toggle="modal" data-target="#myDeleteModalRelat"><i class="fas fa-minus-circle"></i> Elimina</button>
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
                                  <th>Vinculat</th>
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
                                  <td>
                                    <?php 
                                      if($row['club']!=NULL){
                                          $query = "SELECT * FROM clubs WHERE id='".$row['club']."'";
                                          $rsd = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                          $rowd = mysqli_fetch_array($rsd);
                                          echo $rowd['nom_esportiu'];
                                      }
                                    ?>
                                  </td>
                                  <td><?php echo ($row['comentari']); ?></td>
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

          <div class="tab-pane fade" id="docs" role="tabpanel" aria-labelledby="docs-tab">
            <!-- Altre table -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file"></i> Documents | <span><?php echo $nomComplet; ?></span>.</h6>

                </div>
                <div class="card-body">
                  <div class="row mb-4" id="docs-botons">
                      <div class=" col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new-doc" data-toggle="modal" data-target="#myNewModalDocs"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-docs" data-toggle="modal" data-target="#myEditModalDocs"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-docs" data-toggle="modal" data-target="#myDeleteModalDocs"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>

                  <!-- row -->
                  <div class="row mb-4" >
                    <div class="table-responsive overflow-hidden">
                          <table class="table table-striped table-bordered table-hover display" id="dtDocs" width="100%">
                            <thead>
                                <tr>
                                    <th class="none">Id Doc</th>
                                    <th class="none">Id Persona</th>
                                    <th>Temporada</th>
                                    <th>Document</th>
                                    <th>Continguts</th>
                                    <th>Premsa</th>
                                    <th class="none">Altres</th>
                                    <th>Fitxa</th>
                                    <th>Foto</th>
                                    <th>Entre</th>
                                    <th>Repor</th>
                                    <th class="none">Altre 1</th>
                                    <th class="none">Altre 2</th>
                                    <th class="none">Altre 3</th>
                                    <th class="none">Detalls</th>
                                    <th class="none">Detalls Fitxa</th>
                                    <th class="none">Detalls Fotos</th>
                                    <th class="none">Detalls Entrevistes</th>
                                    <th class="none">Detalls Reportatges</th>
                                    <th class="none">Detalls Altre 1</th>
                                    <th class="none">Detalls Altre 2</th>
                                    <th class="none">Detalls Altre 3</th>
                                </tr>
                            </thead>
                              <tbody><?php
                                        $sql ="SELECT * FROM document_persona
                                              WHERE id_persona='".$_REQUEST['id']."'
                                              ORDER BY temporada ASC";
                                        $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                        while ($row = mysqli_fetch_array($rs)){
                                    ?>
                                    <tr>
                                      <td><?php echo $row['id']; ?></td>
                                      <td><?php echo $row['id_persona']; ?></td>
                                      <td><?php echo $row['temporada']; ?></td>
                                      <td><?php echo ($row['document']); ?></td>
                                      <td><?php echo ($row['continguts']); ?></td>
                                      <td><?php echo ($row['premsa']); ?></td>
                                      <td><?php echo ($row['altres']); ?></td>
                                      <td><?php echo $row['fitxa']; ?></td>
                                      <td><?php echo $row['foto']; ?></td>
                                      <td><?php echo $row['entrevista']; ?></td>
                                      <td><?php echo $row['reportatge']; ?></td>
                                      <td><?php echo ($row['altre1']); ?></td>
                                      <td><?php echo ($row['altre2']); ?></td>
                                      <td><?php echo ($row['altre3']); ?></td>
                                      <td><?php echo ($row['detalls']); ?></td>
                                      <td><?php echo ($row['fitxad']); ?></td>
                                      <td><?php echo ($row['fotod']); ?></td>
                                      <td><?php echo ($row['entrevistad']); ?></td>
                                      <td><?php echo ($row['reportatged']); ?></td>
                                      <td><?php echo ($row['altre1d']); ?></td>
                                      <td><?php echo ($row['altre2d']); ?></td>
                                      <td><?php echo ($row['altre3d']); ?></td>
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

  <!-- modal de logout -->
  <?php include 'common/modalout.php'; ?>

  <?php include 'modals/modal_ok.php'; ?>

  <!-- modals trajectories -->
  <?php include 'modals/modal_trajectoria_jugador_new.php'; ?>
  <?php include 'modals/modal_trajectoria_jugador_edit.php'; ?>
  <?php include 'modals/modal_trajectoria_entrenador_new.php'; ?>
  <?php include 'modals/modal_trajectoria_entrenador_edit.php'; ?>
  <?php include 'modals/modal_trajectoria_arbit_new.php'; ?>
  <?php include 'modals/modal_trajectoria_arbit_edit.php'; ?>
  <?php include 'modals/modal_trajectoria_directiu_new.php'; ?>
  <?php include 'modals/modal_trajectoria_directiu_edit.php'; ?>
  <?php include 'modals/modal_trajectoria_altre_new.php'; ?>
  <?php include 'modals/modal_trajectoria_altre_edit.php'; ?>


  <?php include 'modals/modal_trajectoria_del.php'; ?>


  <!-- Modals relats -->
  <?php include 'modals/modal_relat_new.php'; ?>
  <?php include 'modals/modal_relat_edit.php'; ?>
  <?php include 'modals/modal_relat_del.php'; ?>

  <!-- Modals documents -->
  <?php include 'modals/modal_persona_doc_new.php'; ?>
  <?php include 'modals/modal_persona_doc_edit.php'; ?>
  <?php include 'modals/modal_persona_doc_del.php'; ?>


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


        // Documents
        var tDocs = $('#dtDocs').DataTable({
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

        tDocs.buttons().container().appendTo( '#docs-botons .col-md-6:eq(1)' );
        

        var tRelatJugador = $('#dtRelatJugador').DataTable({
            responsive: true,
            select: true,
            autoWidth: false,
            columnDefs: [ { "width": "10%", "targets": 2 }, { "width": "15%", "targets": 3 }  ],
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
            autoWidth: false,
            columnDefs: [ { "width": "10%", "targets": 2 }, { "width": "15%", "targets": 3 }  ],
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
            autoWidth: false,
            columnDefs: [ { "width": "10%", "targets": 2 }, { "width": "15%", "targets": 3 }  ],
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
            autoWidth: false,
            columnDefs: [ { "width": "10%", "targets": 2 }, { "width": "15%", "targets": 3 }  ],
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
            autoWidth: false,
            columnDefs: [ { "width": "10%", "targets": 2 }, { "width": "15%", "targets": 3 }  ],
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

    // Begin Modal EDIT Trajectoria

    $(".btn-edit-jugador").click(function() {

      var table = $('#dtJugador').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per editar.</b>');}
      else { 
        txt = $("<b></b>");
        $('#idje').val(data[0][0]);
        $('#temporadaje').val(data[0][2]);
        
        // Demarcació selected option
        $('#demarcacioje option').filter(function(){
            return $(this).text()==data[0][3];
        }).prop('selected', true);

        // Vinculat selected option
        $('#vinculatje option').filter(function(){
            return $(this).text()==data[0][4];
        }).prop('selected', true);

        // Visitant selected option
        $('#visitantje option').filter(function(){
            return $(this).text()==data[0][5];
        }).prop('selected', true);

        //Entrenador
        $('#entrenadorje').val(data[0][6]);

        // Categoria selected option
        $('#categoriaje option').filter(function(){
            return $(this).text()==data[0][7];
        }).prop('selected', true);

        // Competició selected option
        $('#competicioje option').filter(function(){
            return $(this).text()==data[0][8];
        }).prop('selected', true);

        $('#pjje').val(data[0][9]);
        $('#resultatje').val(data[0][10]);
        $('#pcje').val(data[0][11]);
        $('#psje').val(data[0][12]);
        $('#gfje').val(data[0][13]);
        $('#gcje').val(data[0][14]);
        //$('#x1je').val(data[0][14]);
        $('#classje').val(data[0][15]);
        $('#detallsje').val(data[0][16]);
        $('#detalls2je').val(data[0][17]);
      }
      $('#editMessageJugador').html(txt);
      $('.infoTrajectoria').html("Jugador");
            
    });

    $(".btn-edit-entrenador").click(function() {

      var table = $('#dtEntrenador').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per editar.</b>');}
      else { 
        txt = $("<b></b>");
        $('#idee').val(data[0][0]);
        $('#temporadaee').val(data[0][2]);
        
        // Vinculat selected option
        $('#vinculatee option').filter(function(){
            return $(this).text()==data[0][3];
        }).prop('selected', true);

        // Visitant selected option
        $('#visitantee option').filter(function(){
            return $(this).text()==data[0][4];
        }).prop('selected', true);

        //Entrenador-President
        $('#presidentee').val(data[0][5]);

        // Categoria selected option
        $('#categoriaee option').filter(function(){
            return $(this).text()==data[0][6];
        }).prop('selected', true);

        // Competició selected option
        $('#competicioee option').filter(function(){
            return $(this).text()==data[0][7];
        }).prop('selected', true);

        $('#detalls1ee').val(data[0][8]);

        $('#pjee').val(data[0][9]);
        $('#resultatee').val(data[0][10]);
        $('#pgee').val(data[0][11]);
        $('#peee').val(data[0][12]);
        $('#ppee').val(data[0][13]);
        $('#gfee').val(data[0][14]);
        $('#gcee').val(data[0][15]);
        //$('#x1je').val(data[0][14]);
        $('#classifee').val(data[0][16]);
        $('#detalls2ee').val(data[0][17]);
      }
      $('#editMessageEntrenador').html(txt);
      $('.infoTrajectoria').html("Entrenador");
            
    });

    $(".btn-edit-arbit").click(function() {

      var table = $('#dtArbit').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per editar.</b>');}
      else { 
        txt = $("<b></b>");
        $('#idae').val(data[0][0]);
        $('#temporadaae').val(data[0][2]);
        
        // Vinculat selected option
        $('#vinculatae option').filter(function(){
            return $(this).text()==data[0][3];
        }).prop('selected', true);

        //Actuació
        $('#actuacioae').val(data[0][4]);

        // Categoria selected option
        $('#categoria_ae option').filter(function(){
            return $(this).text()==data[0][5];
        }).prop('selected', true);

        //Entrenador-President-Representant
        $('#representantae').val(data[0][6]);

        // Competició selected option
        $('#competicioae option').filter(function(){
            return $(this).text()==data[0][7];
        }).prop('selected', true);

        // Detalls 1
        $('#detalls1ae').val(data[0][8]);

        $('#actae').val(data[0][9]);
        $('#categae').val(data[0][10]);
        $('#supae').val(data[0][11]);
        $('#infae').val(data[0][12]);
        $('#jlineaae').val(data[0][13]);
        $('#classifae').val(data[0][14]);
        $('#detalls2ae').val(data[0][15]);
      }
      $('#editMessageArbit').html(txt);
      $('.infoTrajectoria').html("Arbit");
            
    });

    $(".btn-edit-directiu").click(function() {

      var table = $('#dtDirectiu').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per editar.</b>');}
      else { 
        txt = $("<b></b>");
        $('#idde').val(data[0][0]);
        $('#temporadade').val(data[0][2]);
        
        // Vinculat selected option
        $('#vinculatde option').filter(function(){
            return $(this).text()==data[0][3];
        }).prop('selected', true);

        // Carrec selected option
        $('#carrecde option').filter(function(){
            return $(this).text()==data[0][4];
        }).prop('selected', true);

        // Categoria selected option
        $('#categoriade option').filter(function(){
            return $(this).text()==data[0][5];
        }).prop('selected', true);

        //Entrenador-President-Representant
        $('#representantde').val(data[0][6]);

        //Num Equips
        $('#nequipsde').val(data[0][7]);

        // Detalls 1
        $('#detalls1de').val(data[0][8]);

        $('#pjde').val(data[0][9]);
        $('#resultatde').val(data[0][10]);
        $('#pgde').val(data[0][11]);
        $('#pede').val(data[0][12]);
        $('#ppde').val(data[0][13]);
        $('#gfde').val(data[0][14]);
        $('#gcde').val(data[0][15]);
        $('#classifde').val(data[0][16]);
        $('#detalls2de').val(data[0][17]);
      }
      $('#editMessageDirectiu').html(txt);
      $('.infoTrajectoria').html("Directiu");
            
    });

    $(".btn-edit-altre").click(function() {

      var table = $('#dtAltre').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per editar.</b>');}
      else { 
        txt = $("<b></b>");
        $('#idoe').val(data[0][0]);
        $('#temporadaoe').val(data[0][2]);
        
        // Vinculat selected option
        $('#vinculatoe option').filter(function(){
            return $(this).text()==data[0][3];
        }).prop('selected', true);

        // Carrec selected option
        $('#carrecoe option').filter(function(){
            return $(this).text()==data[0][4];
        }).prop('selected', true);

        // Categoria selected option
        $('#categoriaoe option').filter(function(){
            return $(this).text()==data[0][5];
        }).prop('selected', true);

        //Entrenador-President-Representant
        $('#representantoe').val(data[0][6]);

        //Num Equips
        $('#nequipsoe').val(data[0][7]);

        // Detalls 1
        $('#detalls1oe').val(data[0][8]);

        $('#pjoe').val(data[0][9]);
        $('#resultatoe').val(data[0][10]);
        $('#pgoe').val(data[0][11]);
        $('#peoe').val(data[0][12]);
        $('#ppoe').val(data[0][13]);
        $('#gfoe').val(data[0][14]);
        $('#gcoe').val(data[0][15]);
        $('#classifoe').val(data[0][16]);
        $('#detalls2oe').val(data[0][17]);
      }
      $('#editMessageAltre').html(txt);
      $('.infoTrajectoria').html("Altre Càrrec");
            
    });


    // End Modal EDIT Trajectoria

    
    // Begin Modal DELETE Trajectoria

    $(".btn-delete-jugador").click(function() {

      var table = $('#dtJugador').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades de la trajectòria?</b></p> "+
                      "<p><b> Jugador: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Club: </b>"+data[0][4]+"</p>");
        $('#idtrajectoriad').val(data[0][0]);
        $('#roled').val("Jugador");
      }
      $('#deleteMessageTrajectoria').html(txt);
      $('.infoTrajectoria').html("Jugador");
            
    });

    $(".btn-delete-entrenador").click(function() {

      var table = $('#dtEntrenador').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades de la trajectòria?</b></p> "+
                      "<p><b> Entrenador: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Club: </b>"+data[0][3]+"</p>");
        $('#idtrajectoriad').val(data[0][0]);
        $('#roled').val("Entrenador");
      }
      $('#deleteMessageTrajectoria').html(txt);
      $('.infoTrajectoria').html("Entrenador");
            
    });

    $(".btn-delete-arbit").click(function() {

      var table = $('#dtArbit').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades de la trajectòria?</b></p> "+
                      "<p><b> Arbit: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>");
        $('#idtrajectoriad').val(data[0][0]);
        $('#roled').val("Arbit");
      }
      $('#deleteMessageTrajectoria').html(txt);
      $('.infoTrajectoria').html("Arbit");
            
    });

    $(".btn-delete-directiu").click(function() {

      var table = $('#dtDirectiu').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades de la trajectòria?</b></p> "+
                      "<p><b> Directiu: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Club: </b>"+data[0][3]+"</p>");
        $('#idtrajectoriad').val(data[0][0]);
        $('#roled').val("Directiu");
      }
      $('#deleteMessageTrajectoria').html(txt);
      $('.infoTrajectoria').html("Directiu");
            
    });

    $(".btn-delete-altre").click(function() {

      var table = $('#dtAltre').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap trajectòria per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades de la trajectòria?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Club: </b>"+data[0][3]+"</p>");
        $('#idtrajectoriad').val(data[0][0]);
        $('#roled').val("Altre Càrrec");
      }
      $('#deleteMessageTrajectoria').html(txt);
      $('.infoTrajectoria').html("Altre Càrrec");
            
    });

    // End Modal DELETE Trajectoria



    // Modal NEW Relat 
    $(".btn-new-relatJugador").click(function() {
        $('.infoRelat').html("Jugador");
        $('#role').val("J"); 
    });

    $(".btn-new-relatEntrenador").click(function() {
        $('.infoRelat').html("Entrenador");
        $('#role').val("E"); 
    });

    $(".btn-new-relatArbit").click(function() {
        $('.infoRelat').html("Arbit");
        $('#role').val("A"); 
    });

    $(".btn-new-relatDirectiu").click(function() {
        $('.infoRelat').html("Directiu");
        $('#role').val("D"); 
    });

    $(".btn-new-relatAltre").click(function() {
        $('.infoRelat').html("Altre Càrrec");
        $('#role').val("O"); 
    });

    // End Modal NEW Relat

    // Modal EDIT Relat 
    $(".btn-edit-relatJugador").click(function() {

      var esEditable = false;

      var table = $('#dtRelatJugador').DataTable();
      var data=table.rows( { selected: true }).data();

      var numSelected = table.rows( { selected: true }).count();
      if(numSelected==0) {
          var txt = $('<b>ERROR: No has seleccionat cap relat per editar.</b>');
          $('#editMessageRelat').html(txt);
      }
      else {
          var txt = $('<b></b>');
          esEditable = true;
          $('#editMessageRelat').html(txt);
      }

      if(esEditable){
          $('#ide').attr("value", data[0][0]); // Id Relat
          $('#temporadae').val(data[0][2]); // Temporada
          //Club Vinculat
          $('#clube option').filter(function(){
              return $(this).text()==data[0][3];
          }).prop('selected', true);
          $('#relate').html(data[0][4]); // Relat
          $('#role').val("J");  // Rol Jugador
      }
      
      $('.infoRelat').html("Jugador");

    });

    $(".btn-edit-relatEntrenador").click(function() {

      var esEditable = false;

      var table = $('#dtRelatEntrenador').DataTable();
      var data=table.rows( { selected: true }).data();

      var numSelected = table.rows( { selected: true }).count();
      if(numSelected==0) {
          var txt = $('<b>ERROR: No has seleccionat cap relat per editar.</b>');
          $('#editMessageRelat').html(txt);
      }
      else {
          var txt = $('<b></b>');
          esEditable = true;
          $('#editMessageRelat').html(txt);
      }

      if(esEditable){
          $('#ide').attr("value", data[0][0]); // Id Relat
          $('#temporadae').val(data[0][2]); // Temporada
          //Club Vinculat
          $('#clube option').filter(function(){
              return $(this).text()==data[0][3];
          }).prop('selected', true);
          $('#relate').html(data[0][4]); // Relat
          $('#role').val("E");  // Rol Entrenador
      }
      
      $('.infoRelat').html("Entrenador");

    });

    $(".btn-edit-relatArbit").click(function() {

      var esEditable = false;

      var table = $('#dtRelatArbit').DataTable();
      var data=table.rows( { selected: true }).data();

      var numSelected = table.rows( { selected: true }).count();
      if(numSelected==0) {
          var txt = $('<b>ERROR: No has seleccionat cap relat per editar.</b>');
          $('#editMessageRelat').html(txt);
      }
      else {
          var txt = $('<b></b>');
          esEditable = true;
          $('#editMessageRelat').html(txt);
      }

      if(esEditable){
          $('#ide').attr("value", data[0][0]); // Id Relat
          $('#temporadae').val(data[0][2]); // Temporada
          //Club Vinculat
          $('#clube option').filter(function(){
              return $(this).text()==data[0][3];
          }).prop('selected', true);
          $('#relate').html(data[0][4]); // Relat
          $('#role').val("A");  // Rol Arbit
      }
      
      $('.infoRelat').html("Arbit");

    });

    $(".btn-edit-relatDirectiu").click(function() {

      var esEditable = false;

      var table = $('#dtRelatDirectiu').DataTable();
      var data=table.rows( { selected: true }).data();

      var numSelected = table.rows( { selected: true }).count();
      if(numSelected==0) {
          var txt = $('<b>ERROR: No has seleccionat cap relat per editar.</b>');
          $('#editMessageRelat').html(txt);
      }
      else {
          var txt = $('<b></b>');
          esEditable = true;
          $('#editMessageRelat').html(txt);
      }

      if(esEditable){
          $('#ide').attr("value", data[0][0]); // Id Relat
          $('#temporadae').val(data[0][2]); // Temporada
          //Club Vinculat
          $('#clube option').filter(function(){
              return $(this).text()==data[0][3];
          }).prop('selected', true);
          $('#relate').html(data[0][4]); // Relat
          $('#role').val("D");  // Rol Directiu
      }
      
      $('.infoRelat').html("Directiu");

    });

    $(".btn-edit-relatAltre").click(function() {

      var esEditable = false;

      var table = $('#dtRelatAltre').DataTable();
      var data=table.rows( { selected: true }).data();

      var numSelected = table.rows( { selected: true }).count();
      if(numSelected==0) {
          var txt = $('<b>ERROR: No has seleccionat cap relat per editar.</b>');
          $('#editMessageRelat').html(txt);
      }
      else {
          var txt = $('<b></b>');
          esEditable = true;
          $('#editMessageRelat').html(txt);
      }

      if(esEditable){
          $('#ide').attr("value", data[0][0]); // Id Relat
          $('#temporadae').val(data[0][2]); // Temporada
          //Club Vinculat
          $('#clube option').filter(function(){
              return $(this).text()==data[0][3];
          }).prop('selected', true);
          $('#relate').html(data[0][4]); // Relat
          $('#role').val("O");  // Rol Altre (Otro)
      }
      
      $('.infoRelat').html("Altre Càrrec");

    });

    // End Modal EDIT Relat

    // Begin Modal DELETE Relat
    $(".btn-delete-relatJugador").click(function() {

      var table = $('#dtRelatJugador').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap relat per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades del relat?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Comentari: </b>"+data[0][3]+"</p>");
        $('#idrelatd').val(data[0][0]);
      }
      $('#deleteMessageRelat').html(txt);
      $('.infoRelat').html("Jugador");
            
    });

    $(".btn-delete-relatEntrenador").click(function() {

      var table = $('#dtRelatEntrenador').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap relat per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades del relat?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Comentari: </b>"+data[0][3]+"</p>");
        $('#idrelatd').val(data[0][0]);
      }
      $('#deleteMessageRelat').html(txt);
      $('.infoRelat').html("Entrenador");
            
    });

    $(".btn-delete-relatArbit").click(function() {

      var table = $('#dtRelatArbit').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap relat per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades del relat?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Comentari: </b>"+data[0][3]+"</p>");
        $('#idrelatd').val(data[0][0]);
      }
      $('#deleteMessageRelat').html(txt);
      $('.infoRelat').html("Arbit");
            
    });

    $(".btn-delete-relatDirectiu").click(function() {

      var table = $('#dtRelatDirectiu').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap relat per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades del relat?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Comentari: </b>"+data[0][3]+"</p>");
        $('#idrelatd').val(data[0][0]);
      }
      $('#deleteMessageRelat').html(txt);
      $('.infoRelat').html("Directiu");
            
    });

    $(".btn-delete-relatAltre").click(function() {

      var table = $('#dtRelatAltre').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap relat per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades del relat?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+"</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                      "<p><b> Comentari: </b>"+data[0][3]+"</p>");
        $('#idrelatd').val(data[0][0]);
      }
      $('#deleteMessageRelat').html(txt);
      $('.infoRelat').html("Altre Càrrec");
            
    });


    $('#btnDeleteRelat').click(function() {
            $('form[name="modalFormDeleteRelat"]').submit();
    });

    // End Modal DELETE Relat


    // Documents Persona

    // Modal EDIT Docs

    $(".btn-edit-docs").click(function() {

      var table = $('#dtDocs').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap document per editar.</b>');}
      else { 
        txt = $("<b></b>");
        
        $('#iddpe').val(data[0][0]);
        $('#idpe').val(data[0][1]);
        $('#temporadadpe').val(data[0][2]);
        $('#documentde').val(data[0][3]);
        $('#contingutde').val(data[0][4]);
        $('#premsade').val(data[0][5]);
        $('#altresde').val(data[0][6]);
        $('#fitxade').val(data[0][7]);
        $('#fotosde').val(data[0][8]);
        $('#entrevistade').val(data[0][9]);
        $('#reportatgede').val(data[0][10]);
        $('#altre1de').val(data[0][11]);
        $('#altre2de').val(data[0][12]);
        $('#altre3de').val(data[0][13]);
        $('#detallsdpe').val(data[0][14]);
        $('#detallsfitxade').val(data[0][15]);
        $('#detallsfotosde').val(data[0][16]);
        $('#detallsentrevistade').val(data[0][17]);
        $('#detallsreportatgede').val(data[0][18]);
        $('#detallsaltre1de').val(data[0][19]);
        $('#detallsaltre2de').val(data[0][20]);
        $('#detallsaltre3de').val(data[0][21]);

        
      }
      $('#editMessageDocs').html(txt);
            
    });

    $('#btnEditDocs').click(function() {
        $('form[name="modalFormEditDocPersona"]').validator();
        $('form[name="modalFormEditDocPersona"]').submit();
    });

    // Modal DELETE Docs Entitat

    $(".btn-delete-docs").click(function() {

      var table = $('#dtDocs').DataTable();
      var data=table.rows( { selected: true }).data();
      var numSelected = table.rows( { selected: true }).count();
      var txt;
      if(numSelected==0) {
        txt = $('<b>ERROR: No has seleccionat cap document per eliminar.</b>');}
      else { 
        txt = $("<p><b>Vols esborrar les dades del document?</b></p> "+
                      "<p><b> Persona: </b><?php echo $nomComplet;?>"+".</p>"+
                      "<p><b> Temporada: </b>"+data[0][2]+".</p>"+
                      "<p><b> Document: </b>"+data[0][3]+".</p>");
        $('#iddocpd').val(data[0][0]);
      }
      $('#deleteMessageDocs').html(txt);
            
    });

    $('#btnDeleteDoc').click(function() {
            $('form[name="modalFormDeleteDocs"]').submit();
    });


    <?php 

      if(isset($_REQUEST['msgOk'])){
        echo "$('#myOkModal').modal();";
      }
    ?>

   </script>

</body>

</html>
