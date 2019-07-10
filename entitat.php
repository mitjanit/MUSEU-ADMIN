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
          <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-th-large"></i> Entitat</h1>
          <p class="mb-4">Gestió de dades de l'Entitat.</p>


          <!-- DataTales Example -->
          <div class="card shadow mb-4 overflow-hidden">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Informació de l'Entitat // <span id="entitatInfo"></span>.</h6>

            </div>
            <div class="card-body overflow-hidden">
              <!--
              <div class="row">
                  <div class=" col-md-12">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
                      </div>
                  </div>
              </div>
              -->
                <div class="table-responsive overflow-hidden">
                  <table class="table table-bordered" id="dtEntitat" width="100%" cellspacing="0">
                                  <thead class="table-primary">
                                      <tr>
                                          <th>Registre</th>
                                          <th>Nom Esportiu</th>
                                          <th>Nom</th>
                                          <th>Localitat</th>
                                          <th>Provincia</th>
                                          <th>Pais</th>
                                          <th>Any Inici</th>
                                          <th>Detalls 1</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $sql ="SELECT * FROM clubs
                                                 WHERE id='".$_REQUEST['id']."'";
                                          $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                          while ($row = mysqli_fetch_array($rs)){
                                      ?>
                                      <tr>
                                          <td><?php echo $row['id']; ?></td>
                                          <td><?php echo ($row['nom_esportiu']); 
                                          $nomComplet=$row['nom_esportiu']; ?></td>
                                          <td><?php echo ($row['nom']); ?></td>
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
                                          ?></td>
                                          <td>
                                              <?php 

                                              $query_pais = "SELECT * FROM paisos WHERE id='".$row['pais_id']."'";
                                                  $rspais = mysqli_query($con01, $query_pais) or die("Error: ".mysqli_error($con01));
                                                  $rowpais = mysqli_fetch_array($rspais);
                                                  echo ($rowpais['nom']); 
                                          ?>
                                              
                                          </td>
                                          <td><?php echo ($row['inici']); ?></td>
                                          <td><?php echo ($row['inici_detall']); ?></td>
                                      </tr>
                                      <?php
                                          }
                                      ?>
                                  </tbody>
                  </table>
                  <table class="table table-bordered" id="dtNumsEntitat" width="100%" cellspacing="0">
                                  <thead  class="table-primary">
                                      <tr>
                                          <th>Escut</th>
                                          <th>Himne</th>
                                          <th>CD/DVD</th>
                                          <th>Insignia</th>
                                          <th>Camiseta</th>
                                          <th>Bufanda</th>
                                          <th>Bandera</th>
                                          <th>Altre</th>
                                          <th>Detalls 2</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          $sql ="SELECT * FROM clubs
                                                 WHERE id='".$_REQUEST['id']."'";
                                          $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                          while ($row = mysqli_fetch_array($rs)){
                                      ?>
                                      <tr>
                                          <td><?php echo $row['escut']; ?></td>
                                          <td><?php echo $row['himne']; ?></td>
                                          <td><?php echo $row['cd']; ?></td>
                                          <td><?php echo $row['insignia']; ?></td>
                                          <td><?php echo $row['camiseta']; ?></td>
                                          <td><?php echo $row['bufanda']; ?></td>
                                          <td><?php echo $row['bandera']; ?></td>
                                          <td><?php echo utf8_encode($row['altre']); ?></td>
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
            <a class="nav-link active" id="docs-tab" data-toggle="tab" href="#docs" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-file"></i> Documents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="comps-tab" data-toggle="tab" href="#comps" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-trophy"></i> Competicions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="acts-tab" data-toggle="tab" href="#acts" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-calendar"></i> Activitats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="relats-tab" data-toggle="tab" href="#relats" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-comments"></i> Relats</a>
          </li>
        </ul>

        <!-- tab contents -->
        <div class="tab-content" id="myTabContent">
          
          <div class="tab-pane fade show active" id="docs" role="tabpanel" aria-labelledby="docs-tab">
            <!-- Documents table -->
              <div class="card shadow mb-4  ">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file"></i> Documents de l'Entitat // <span id="entitatDocs"></span>.</h6>

                </div>
                <div class="card-body ">
                  <div class="row mb-4" id="docs-botons">
                      <div class=" col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new-docs" data-toggle="modal" data-target="#myNewModalDocs"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-docs" data-toggle="modal" data-target="#myEditModalDocs"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-docs" data-toggle="modal" data-target="#myDeleteModalDocs"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>
                  <div class="table-responsive overflow-hidden">
                      <table class="table table-striped table-bordered table-hover display" id="dtDocsEntitat" width="100%">
                          <thead>
                              <tr>
                                  <th class="none">Id Doc</th>
                                  <th class="none">Id Entitat</th>
                                  <th>Temporada</th>
                                  <th>Document</th>
                                  <th>Continguts</th>
                                  <th>Premsa</th>
                                  <th class="none">Altres</th>
                                  <th>Foto</th>
                                  <th>Entre</th>
                                  <th>Repor</th>
                                  <th>Cartel</th>
                                  <th>Llibre</th>
                                  <th>Video</th>
                                  <th class="none">Altre 1</th>
                                  <th class="none">Altre 2</th>
                                  <th class="none">Detalls</th>
                                  <th class="none">Detalls Fotos</th>
                                  <th class="none">Detalls Entrevistes</th>
                                  <th class="none">Detalls Reportatges</th>
                                  <th class="none">Detalls Cartells</th>
                                  <th class="none">Detalls Llibres</th>
                                  <th class="none">Detalls Videos</th>
                                  <th class="none">Detalls Altre 1</th>
                                  <th class="none">Detalls Altre 2</th>
                                  
                              </tr>
                          </thead>
                          <tbody><?php
                                    $sql ="SELECT * FROM document_entitat
                                          WHERE id_entitat='".$_REQUEST['id']."'
                                          ORDER BY temporada ASC";
                                    $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                    while ($row = mysqli_fetch_array($rs)){
                                ?>
                                <tr>
                                  <td><?php echo $row['id']; ?></td>
                                  <td><?php echo $row['id_entitat']; ?></td>
                                  <td><?php echo $row['temporada']; ?></td>
                                  <td><?php echo ($row['document']); ?></td>
                                  <td><?php echo ($row['continguts']); ?></td>
                                  <td><?php echo ($row['premsa']); ?></td>
                                  <td><?php echo ($row['altres']); ?></td>
                                  <td><?php echo $row['foto']; ?></td>
                                  <td><?php echo $row['entrevista']; ?></td>
                                  <td><?php echo $row['reportatge']; ?></td>
                                  <td><?php echo $row['cartell']; ?></td>
                                  <td><?php echo $row['llibre']; ?></td>
                                  <td><?php echo $row['video']; ?></td>
                                  <td><?php echo ($row['altre1']); ?></td>
                                  <td><?php echo ($row['altre2']); ?></td>
                                  <td><?php echo ($row['detalls']); ?></td>
                                  <td><?php echo ($row['fotod']); ?></td>
                                  <td><?php echo ($row['entrevistad']); ?></td>
                                  <td><?php echo ($row['reportatged']); ?></td>
                                  <td><?php echo ($row['cartelld']); ?></td>
                                  <td><?php echo ($row['llibred']); ?></td>
                                  <td><?php echo ($row['videod']); ?></td>
                                  <td><?php echo ($row['altre1d']); ?></td>
                                  <td><?php echo ($row['altre2d']); ?></td>
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
                
          <div class="tab-pane fade" id="comps" role="tabpanel" aria-labelledby="comps-tab">
            <!-- Competicions table -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-trophy"></i> Competicions de l'Entitat // <span id="entitatComps"></span>.</h6>

                </div>
                <div class="card-body">
                  <div class="row mb-4" id="comps-botons">
                      <div class=" col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new-comps" data-toggle="modal" data-target="#myNewModalComps"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-comps" data-toggle="modal" data-target="#myEditModalComps"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-comps" data-toggle="modal" data-target="#myDeleteModalComps"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>

                  <!-- row competicions entitat -->
                <div class="row mb-4" >
                  <div class="table-responsive overflow-hidden">
                      <table width="100%" class="table table-striped table-bordered table-hover display" id="dtCompsEntitat">
                          <thead>
                              <tr>
                                  <th class="none">Id Comp</th>
                                  <th class="none">Id Entitat</th>
                                  <th>Temporada</th>
                                  <th>Competició</th>
                                  <th>Categoria</th>
                                  <th>Tècnic</th>
                                  <th>Detalls</th>
                                  <th>PJ</th>
                                  <th>PG</th>
                                  <th>PE</th>
                                  <th>PP</th>
                                  <th>GF</th>
                                  <th>GC</th>
                                  <th>Pts</th>
                                  <th>Clasif.</th>
                                  <th class="none">Detalls 2</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                  $sql ="SELECT *
                                          FROM competicio_entitat
                                          WHERE id_entitat='".$_REQUEST['id']."'
                                          ORDER BY temporada ASC";
                                  $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                  while ($row = mysqli_fetch_array($rs)){
                              ?>
                              <tr>
                                  <td><?php echo $row['id']; ?></td>
                                  <td><?php echo $row['id_entitat']; ?></td>
                                  <td><?php echo $row['temporada']; ?></td>
                                  <td>
                                    <?php 
                                      if($row['id_competicio']!=NULL){
                                        $query = "SELECT * FROM competicions WHERE id='".$row['id_competicio']."'";
                                         $rs2 = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                        $row2 = mysqli_fetch_array($rs2);
                                        echo ($row2['nom']);
                                      } 
                                    ?>
                                  </td>
                                  <td>
                                    <?php 
                                      if($row['id_categoria']!=NULL){
                                        $query = "SELECT * FROM categories WHERE id='".$row['id_categoria']."'";
                                         $rs2 = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                        $row2 = mysqli_fetch_array($rs2);
                                        echo ($row2['nom']);
                                      } 
                                    ?>
                                  </td>
                                  <td><?php echo ($row['tecnic']); ?></td>
                                  <td><?php echo ($row['detalls1']); ?></td>
                                  <td><?php echo $row['pj']; ?></td>
                                  <td><?php echo $row['pg']; ?></td>
                                  <td><?php echo $row['pe']; ?></td>
                                  <td><?php echo $row['pp']; ?></td>
                                  <td><?php echo $row['gf']; ?></td>
                                  <td><?php echo $row['gc']; ?></td>
                                  <td><?php echo $row['punts']; ?></td>
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
          </div>

          <div class="tab-pane fade" id="acts" role="tabpanel" aria-labelledby="acts-tab">
            <!-- Activitats table -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-calendar"></i> Activitats de l'Entitat // <span id="entitatActs"></span>.</h6>

                </div>
                <div class="card-body">
                  <div class="row mb-4" id="acts-botons">
                      <div class=" col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new-acts" data-toggle="modal" data-target="#myNewModalActs"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-acts" data-toggle="modal" data-target="#myEditModalActs"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-acts" data-toggle="modal" data-target="#myDeleteModalActs"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>

                  <!-- row activitats entitat -->
                  <div class="row mb-4" >
                    <div class="table-responsive overflow-hidden">
                        <table width="100%" class="table table-striped table-bordered table-hover display" id="dtActsEntitat">
                            <thead>
                                <tr>
                                    <th class="none">Id Act</th>
                                    <th class="none">Id Entitat</th>
                                    <th>Temporada</th>
                                    <th>Tipus Act</th>
                                    <th>Actuacions</th>
                                    <th>Detalls 1</th>
                                    <th class="none">Detalls 2</th>
                                    <th>Fotos</th>
                                    <th>Entrev</th>
                                    <th>Report</th>
                                    <th>Cartel</th>
                                    <th>Prog</th>
                                    <th>Video</th>
                                    <th class="none">Altre 1</th>
                                    <th class="none">Altre 2</th>
                                    <th class="none">Detalls Foto</th>
                                    <th class="none">Detalls Entrevista</th>
                                    <th class="none">Detalls Reportatge</th>
                                    <th class="none">Detalls Cartell</th>
                                    <th class="none">Detalls Programa</th>
                                    <th class="none">Detalls Video</th>
                                    <th class="none">Detalls Altre 1</th>
                                    <th class="none">Detalls Altre 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql ="SELECT * FROM activitats_entitat
                                            WHERE id_entitat='".$_REQUEST['id']."'
                                            ORDER BY temporada ASC";
                                    $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                    while ($row = mysqli_fetch_array($rs)){
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['id_entitat']; ?></td>
                                    <td><?php echo $row['temporada']; ?></td>
                                    <td>
                                      <?php 
                                        if($row['tipus_act']!=NULL){
                                          $query = "SELECT * FROM temps_activitats WHERE id='".$row['tipus_act']."'";
                                           $rs2 = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                          $row2 = mysqli_fetch_array($rs2);
                                          echo ($row2['nom']);
                                        } 
                                      ?>
                                    </td>
                                    <td><?php echo $row['actuacions']; ?></td>
                                    <td><?php echo ($row['detalls1']); ?></td>
                                    <td><?php echo ($row['detalls2']); ?></td>
                                    <td><?php echo $row['fotos']; ?></td>
                                    <td><?php echo $row['entrevistes']; ?></td>
                                    <td><?php echo $row['croniques']; ?></td>
                                    <td><?php echo $row['cartell']; ?></td>
                                    <td><?php echo $row['programa']; ?></td>
                                    <td><?php echo $row['video']; ?></td>
                                    <td><?php echo ($row['altre1']); ?></td>
                                    <td><?php echo ($row['altre2']); ?></td>
                                    <td><?php echo ($row['fotod']); ?></td>
                                    <td><?php echo ($row['entrevistad']); ?></td>
                                    <td><?php echo ($row['cronicad']); ?></td>
                                    <td><?php echo ($row['cartelld']); ?></td>
                                    <td><?php echo ($row['programad']); ?></td>
                                    <td><?php echo ($row['videod']); ?></td>
                                    <td><?php echo ($row['altre1d']); ?></td>
                                    <td><?php echo ($row['altre2d']); ?></td>
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

          <div class="tab-pane fade" id="relats" role="tabpanel" aria-labelledby="relats-tab">
            <!-- Activitats table -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-calendar"></i> Relats de l'Entitat // <span id="entitatRelats"></span>.</h6>

                </div>
                <div class="card-body">
                  <div class="row mb-4" id="relats-botons">
                      <div class=" col-md-6">
                          <div class="btn-group"  role="group">
                              <button type="button" class="btn btn-primary btn-new-relats" data-toggle="modal" data-target="#myNewModalRelat"><i class="fas fa-plus-circle"></i> Alta</button>
                              <button type="button" class="btn btn-primary btn-edit-relats" data-toggle="modal" data-target="#myEditModalRelat"><i class="fa fa-edit"></i> Edita</button>
                              <button type="button" class="btn btn-primary btn-delete-relats" data-toggle="modal" data-target="#myDeleteModalRelat"><i class="fas fa-minus-circle"></i> Elimina</button>
                          </div>
                      </div>
                      <div class="col-md-6"></div>
                  </div>

                  <!-- row activitats entitat -->
                  <div class="row mb-4" >
                    <div class="table-responsive overflow-hidden">
                        <table width="100%" class="table table-striped table-bordered table-hover display" id="dtRelatsEntitat">
                            <thead>
                                <tr>
                                    <th class="none">Id</th>
                                    <th class="none">Id Entitat</th>
                                    <th>Temporada</th>
                                    <th>Relat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql ="SELECT * FROM caixo_club
                                            WHERE club='".$_REQUEST['id']."'
                                            ORDER BY temporada ASC";
                                    $rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
                                    while ($row = mysqli_fetch_array($rs)){
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['club']; ?></td>
                                    <td><?php echo $row['temporada']; ?></td>
                                    <td><?php echo ($row['comentari']); ?></td>
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

  <!-- modal de log out -->
  <?php include 'common/modalout.php'; ?>

  <?php include 'modals/modal_ok.php'; ?>

  <?php include 'modals/modal_entitat_comp_new.php'; ?>
  <?php include 'modals/modal_entitat_comp_edit.php'; ?>
  <?php include 'modals/modal_entitat_comp_del.php'; ?>

  <?php include 'modals/modal_entitat_doc_new.php'; ?>
  <?php include 'modals/modal_entitat_doc_edit.php'; ?>
  <?php include 'modals/modal_entitat_doc_del.php'; ?>

  <?php include 'modals/modal_entitat_act_new.php'; ?>
  <?php include 'modals/modal_entitat_act_edit.php'; ?>
  <?php include 'modals/modal_entitat_act_del.php'; ?>

  <?php include 'modals/modal_entitat_relat_new.php'; ?>
  <?php include 'modals/modal_entitat_relat_edit.php'; ?>
  <?php include 'modals/modal_entitat_relat_del.php'; ?>


  <?php include("common/end.php") ?>


  <script>


    $(document).ready(function() {


        var t = $('#dtEntitat').DataTable({
            responsive: false,
            select: true,
            paging: false,
            ordering: false,
            info: false,
            filter:false
        });
        var data=t.rows(0).data();
        var nomEntitat = data[0][2];
        $('#entitatInfo').html(nomEntitat);
        $('#entitatComps').html(nomEntitat);
        $('#entitatDocs').html(nomEntitat);
        $('#entitatActs').html(nomEntitat);
        $('#entitatRelats').html(nomEntitat);

        $('#dtNumsEntitat').DataTable({
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

        var tdocs = $('#dtDocsEntitat').DataTable({
            responsive: true,
            select: true,
            aoColumnDefs: [ { "sWidth": "5%", "aTargets": [2, 6, 7, 8, 9, 10, 11, 12] } ],
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

        tdocs.buttons().container().appendTo( '#docs-botons .col-md-6:eq(1)' );


        var tComps = $('#dtCompsEntitat').DataTable({
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

        tComps.buttons().container().appendTo( '#comps-botons .col-md-6:eq(1)' );

        var tActs = $('#dtActsEntitat').DataTable({
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

        tActs.buttons().container().appendTo( '#acts-botons .col-md-6:eq(1)' );

        var tRelats = $('#dtRelatsEntitat').DataTable({
            responsive: true,
            select: true,
            autoWidth: false,
            columnDefs: [ { "width": "10%", "targets": 2 }  ],
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

        tRelats.buttons().container().appendTo( '#relats-botons .col-md-6:eq(1)' );


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


        // Modal EDIT Comps

        $(".btn-edit-comps").click(function() {

          var table = $('#dtCompsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap competició per editar.</b>');}
          else { 
            txt = $("<b></b>");
            
            $('#idcee').val(data[0][0]);
            $('#temporadacee').val(data[0][2]);
            
            // Competició selected option
            $('#competiciocee option').filter(function(){
                return $(this).text()==data[0][3];
            }).prop('selected', true);

            // Categoria selected option
            $('#categoriacee option').filter(function(){
                return $(this).text()==data[0][4];
            }).prop('selected', true);

            //Entrenador
            $('#entrenadorcee').val(data[0][5]);

            //Detalls 1
            $('#detalls1cee').val(data[0][6]);

            
            $('#pjcee').val(data[0][7]);
            $('#pgcee').val(data[0][8]);
            $('#pecee').val(data[0][9]);
            $('#ppcee').val(data[0][10]);
            $('#gfcee').val(data[0][11]);
            $('#gccee').val(data[0][12]);
            $('#puntscee').val(data[0][13]);
            $('#classifcee').val(data[0][14]);
            $('#detalls2cee').val(data[0][15]);

            
          }
          $('#editMessageComps').html(txt);
                
        });

        $('#btnEditComps').click(function() {
            $('form[name="modalFormEditCompEntitat"]').validator();
            $('form[name="modalFormEditCompEntitat"]').submit();
        });

        // Modal DELETE Comps Entitat

        $(".btn-delete-comps").click(function() {

          var table = $('#dtCompsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap competició per eliminar.</b>');}
          else { 
            txt = $("<p><b>Vols esborrar les dades de la competició?</b></p> "+
                          "<p><b> Entitat: </b><?php echo $nomComplet;?>"+".</p>"+
                          "<p><b> Temporada: </b>"+data[0][2]+".</p>"+
                          "<p><b> Competició: </b>"+data[0][3]+" - "+ data[0][4]+".</p>");
            $('#idcompd').val(data[0][0]);
          }
          $('#deleteMessageComps').html(txt);
                
        });

        $('#btnDeleteComp').click(function() {
                $('form[name="modalFormDeleteComps"]').submit();
        });


        // Modal EDIT Docs

        $(".btn-edit-docs").click(function() {

          var table = $('#dtDocsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap document per editar.</b>');}
          else { 
            txt = $("<b></b>");
            
            $('#ide').val(data[0][0]);
            $('#temporadae').val(data[0][2]);
            $('#documente').val(data[0][3]);
            $('#contingute').val(data[0][4]);
            $('#premsae').val(data[0][5]);
            $('#altrese').val(data[0][6]);
            $('#fotosee').val(data[0][7]);
            $('#entrevistae').val(data[0][8]);
            $('#reportatgee').val(data[0][9]);
            $('#cartelle').val(data[0][10]);
            $('#llibree').val(data[0][11]);
            $('#videoe').val(data[0][12]);
            $('#altre1ee').val(data[0][13]);
            $('#altre2ee').val(data[0][14]);
            $('#detallse').val(data[0][15]);
            $('#detallsfotose').val(data[0][16]);
            $('#detallsentrevistae').val(data[0][17]);
            $('#detallsreportatgee').val(data[0][18]);
            $('#detallscartelle').val(data[0][19]);
            $('#detallsllibree').val(data[0][20]);
            $('#detallsvideoe').val(data[0][21]);
            $('#detallsaltre1e').val(data[0][22]);
            $('#detallsaltre2e').val(data[0][23]);

            
          }
          $('#editMessageDocs').html(txt);
                
        });

        $('#btnEditDocs').click(function() {
            $('form[name="modalFormEditDocEntitat"]').validator();
            $('form[name="modalFormEditDocEntitat"]').submit();
        });

        // Modal DELETE Docs Entitat

        $(".btn-delete-docs").click(function() {

          var table = $('#dtDocsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap document per eliminar.</b>');}
          else { 
            txt = $("<p><b>Vols esborrar les dades del document?</b></p> "+
                          "<p><b> Entitat: </b><?php echo $nomComplet;?>"+"</p>"+
                          "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                          "<p><b> Document: </b>"+data[0][3]+"</p>");
            $('#iddocd').val(data[0][0]);
          }
          $('#deleteMessageDocs').html(txt);
                
        });

        $('#btnDeleteDoc').click(function() {
                $('form[name="modalFormDeleteDocs"]').submit();
        });


        // Modal EDIT Acts

        $(".btn-edit-acts").click(function() {

          var table = $('#dtActsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap activitat per editar.</b>');}
          else { 
            txt = $("<b></b>");
            
            $('#idaee').val(data[0][0]);
            $('#temporadaaee').val(data[0][2]);
            // Tipus Activitat selected option
            $('#tipusaee option').filter(function(){
                return $(this).text()==data[0][3];
            }).prop('selected', true);
            $('#actuacioaee').val(data[0][4]);
            $('#detalls1aee').val(data[0][5]);
            $('#detalls2aee').val(data[0][6]);

            $('#fotosaee1').val(data[0][7]);
            $('#entrevistaee1').val(data[0][8]);
            $('#reportatgaee1').val(data[0][9]);
            $('#cartellaee1').val(data[0][10]);
            $('#programaaee1').val(data[0][11]);
            $('#videoaee1').val(data[0][12]);
            $('#altre1aee').val(data[0][13]);
            $('#altre2aee').val(data[0][14]);
            $('#detallsfotosaee').val(data[0][15]);
            $('#detallsentrevistaee').val(data[0][16]);
            $('#detallsreportatgaee').val(data[0][17]);
            $('#detallscartellaee').val(data[0][18]);
            $('#detallsprogramaaee').val(data[0][19]);
            $('#detallsvideoaee').val(data[0][20]);
            $('#detallsaltre1aee').val(data[0][21]);
            $('#detallsaltre2aee').val(data[0][22]);

            
          }
          $('#editMessageActs').html(txt);
                
        });

        $('#btnEditActs').click(function() {
            $('form[name="modalFormEditActEntitat"]').validator();
            $('form[name="modalFormEditActEntitat"]').submit();
        });


        // Modal DELETE Acts Entitat

        $(".btn-delete-acts").click(function() {

          var table = $('#dtActsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap activitat per eliminar.</b>');}
          else { 
            txt = $("<p><b>Vols esborrar les dades de l'activitat?</b></p> "+
                          "<p><b> Entitat: </b><?php echo $nomComplet;?>"+"</p>"+
                          "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                          "<p><b> Activitat: </b>"+data[0][3]+"</p>");
            $('#idactd').val(data[0][0]);
          }
          $('#deleteMessageActs').html(txt);
                
        });

        $('#btnDeleteAct').click(function() {
                $('form[name="modalFormDeleteActs"]').submit();
        });


        // MODAL EDIT Relat Entitat

        // Modal EDIT Relat 
        $(".btn-edit-relats").click(function() {

          var esEditable = false;

          var table = $('#dtRelatsEntitat').DataTable();
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
              $('#idre').attr("value", data[0][0]); // Id Relat
              $('#temporadare').val(data[0][2]); // Temporada
              $('#relatre').html(data[0][3]); // Relat
          }
          
        });

        // MODAL DELETE Relats Entitat

        $(".btn-delete-relats").click(function() {

          var table = $('#dtRelatsEntitat').DataTable();
          var data=table.rows( { selected: true }).data();
          var numSelected = table.rows( { selected: true }).count();
          var txt;
          if(numSelected==0) {
            txt = $('<b>ERROR: No has seleccionat cap relat per eliminar.</b>');}
          else { 
            txt = $("<p><b>Vols esborrar les dades del relat?</b></p> "+
                          "<p><b> Entitat: </b><?php echo $nomComplet;?>"+"</p>"+
                          "<p><b> Temporada: </b>"+data[0][2]+"</p>"+
                          "<p><b> Comentari: </b>"+data[0][3]+"</p>");
            $('#idrelatd').val(data[0][0]);
          }
          $('#deleteMessageRelat').html(txt);
                
        });


        <?php 

          if(isset($_REQUEST['msgOk'])){
            echo "$('#myOkModal').modal();";
          }
        ?>



    });

   </script>

</body>

</html>
