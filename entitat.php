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
                                          <td><?php echo utf8_encode($row['nom_esportiu']); ?></td>
                                          <td><?php echo utf8_encode($row['nom']); ?></td>
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
                                                  echo utf8_encode($rowprov['nom']);
                                              } 
                                          ?></td>
                                          <td>
                                              <?php 

                                              $query_pais = "SELECT * FROM paisos WHERE id='".$row['paisos_id']."'";
                                                  $rspais = mysqli_query($con01, $query_pais) or die("Error: ".mysqli_error($con01));
                                                  $rowpais = mysqli_fetch_array($rspais);
                                                  echo utf8_encode($rowpais['nom']); 
                                          ?>
                                              
                                          </td>
                                          <td><?php echo utf8_encode($row['inici']); ?></td>
                                          <td><?php echo utf8_encode($row['inici_detall']); ?></td>
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

        <!-- Documents table -->
          <div class="card shadow mb-4  ">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file"></i> Documents de l'Entitat // <span id="entitatDocs"></span>.</h6>

            </div>
            <div class="card-body ">
              <div class="row mb-4" id="docs-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
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
                              <th>Foto</th>
                              <th>Entre</th>
                              <th>Repor</th>
                              <th>Cartel</th>
                              <th>Llibre</th>
                              <th>Video</th>
                              <th>Altre</th>
                              <th class="none">Detalls</th>
                              
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
                              <td><?php echo utf8_encode($row['document']); ?></td>
                              <td><?php echo utf8_encode($row['continguts']); ?></td>
                              <td><?php echo $row['foto']; ?></td>
                              <td><?php echo $row['entrevista']; ?></td>
                              <td><?php echo $row['reportatge']; ?></td>
                              <td><?php echo $row['cartell']; ?></td>
                              <td><?php echo $row['llibre']; ?></td>
                              <td><?php echo $row['video']; ?></td>
                              <td><?php echo utf8_encode($row['altre']); ?></td>
                              <td><?php echo utf8_encode($row['detalls']); ?></td>
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

        <!-- Competicions table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-trophy"></i> Competicions de l'Entitat // <span id="entitatComps"></span>.</h6>

            </div>
            <div class="card-body">
              <div class="row mb-4" id="comps-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo" data-toggle="modal" data-target="#myHistoModal"><i class="fa fa-book"></i> Detalls</button>
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
                              <td><?php echo $row['id_competicio']; ?></td>
                              <td><?php echo $row['id_categoria']; ?></td>
                              <td><?php echo utf8_encode($row['tecnic']); ?></td>
                              <td><?php echo utf8_encode($row['detalls1']); ?></td>
                              <td><?php echo $row['pj']; ?></td>
                              <td><?php echo $row['pg']; ?></td>
                              <td><?php echo $row['pe']; ?></td>
                              <td><?php echo $row['pp']; ?></td>
                              <td><?php echo $row['gf']; ?></td>
                              <td><?php echo $row['gc']; ?></td>
                              <td><?php echo $row['punts']; ?></td>
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

        <!-- Activitats table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-calendar"></i> Activitats de l'Entitat // <span id="entitatActs"></span>.</h6>

            </div>
            <div class="card-body">
              <div class="row mb-4" id="acts-botons">
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
                                <th class="none">Detalls 3</th>
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
                                <td><?php echo $row['tipus_act']; ?></td>
                                <td><?php echo $row['actuacions']; ?></td>
                                <td><?php echo utf8_encode($row['detalls1']); ?></td>
                                <td><?php echo utf8_encode($row['detalls2']); ?></td>
                                <td><?php echo $row['fotos']; ?></td>
                                <td><?php echo $row['entrevistes']; ?></td>
                                <td><?php echo $row['croniques']; ?></td>
                                <td><?php echo $row['cartell']; ?></td>
                                <td><?php echo $row['programa']; ?></td>
                                <td><?php echo $row['video']; ?></td>
                                <td><?php echo utf8_encode($row['altre1']); ?></td>
                                <td><?php echo utf8_encode($row['altre2']); ?></td>
                                <td><?php echo utf8_encode($row['detalls3']); ?></td>
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
            aoColumnDefs: [ { "sWidth": "5%", "aTargets": [5, 6, 7, 8, 9, 10] } ],
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







    });

   </script>

</body>

</html>
