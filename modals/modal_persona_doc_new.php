<!-- dialeg modal NEW -->
    <div  class="modal fade" id="myNewModalDocs" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Document Persona | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNewPersonaDoc" id="modalFormNewPersonaDoc" class="new-doc-validation" novalidate action="db/altaDocumentPersona.php" method="get">
                  <input type="hidden" id="idp" name="idp" value="<?php echo $_REQUEST['id']; ?>" />
                <div id="newBody" class="modal-body">
                            <div class="row mb-4">
                                <!-- row 0 -->
                                <div class=" col-md-3">
                                      <label for="registre">Registre:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input readonly type="text" name="id" class="form-control" id="iddpn" placeholder="Id"/>
                                      </div>
                                </div>
                                <div class=" col-md-3">
                                      <label for="nome">Temporada (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="7" class="form-control" name="temporada" id="temporadan" required />
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
                                      </div>
                                </div>

                                <div class=" col-md-3">
                                        <label for="nom">Vinculat a (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="vinculatdpn" name="vinculat" required>
                                            <option value=""></option>
                                            <option value="0">Sense vincle</option>
                                            <?php
                                              $query = "SELECT * FROM clubs ORDER BY nom_esportiu ASC";
                                              $rs = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".($row['nom_esportiu'])."</option>";
                                              }
                                            ?>
                                          </select>
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                <div class=" col-md-3">
                                      <label for="nom">Document :</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="documentn" name="document" />
                                      </div>
                                </div>

                              </div>
                              <div class="row mb-4">

                                <div class=" col-md-12">
                                      <label for="nom">Contingut :</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="contingutn" name="contingut" />
                                      </div>
                                </div>

                            </div>
                            <!-- end row 0 -->
                           <div class="row mb-4">

                                <div class=" col-md-4">
                                      <label for="inici">Premsa:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="premsan" name="premsa" maxlength="50" />
                                      </div>
                                </div>

                                <div class=" col-md-8">
                                      <label for="detalls">Altres:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="altresn" name="altres" />
                                      </div>
                                </div>

                            </div>
                            <div class="row mb-4">

                                <div class=" col-md-12">
                                                  <label for="foto">Detalls:</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">
                                                        <i class="fa fa-info-circle"></i>
                                                      </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="detallsn" name="detalls" maxlength="100" />
                                                  </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col"><hr></div>
                            </div>
                            <!--<div class="row mb-4">-->
                              <!-- Tabs (Fotos, ....) -->
                                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="fitxa-tab" data-toggle="tab" href="#fitxa" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-file"></i> Fitxa</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="fotos-tab" data-toggle="tab" href="#fotos" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-camera"></i> Fotos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="entrevistes-tab" data-toggle="tab" href="#entrevistes" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-microphone"></i> Entrevistes</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="reportatges-tab" data-toggle="tab" href="#reportatges" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-alt"></i> Reportatges</a>
                                  </li>
                                  <!--
                                  <li class="nav-item">
                                    <a class="nav-link" id="llibres-tab" data-toggle="tab" href="#llibres" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-book"></i> Llibres</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-video"></i> Videos</a>
                                  </li>
                                -->
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre1-tab" data-toggle="tab" href="#altre1" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-one"></i> Altre 1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre2-tab" data-toggle="tab" href="#altre2" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-two"></i> Altre 2</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre3-tab" data-toggle="tab" href="#altre3" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-three"></i> Altre 3</a>
                                  </li>
                                </ul>
                                <!-- tab contents -->
                                <div class="tab-content" id="myTabContent">

                                  <div class="tab-pane fade show active" id="fitxa" role="tabpanel" aria-labelledby="fitxa-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="foto">Fitxa:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="number" min="0" value="0" class="form-control" id="fitxan" name="fitxa" />
                                                </div>
                                          </div>

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="cfitxan" name="cfitxa" maxlength="50" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                <label for="foto">Detalls Fitxa:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="detallsfitxan" name="detallsfitxa" maxlength="100" />
                                                </div>
                                          </div>

                                      </div>
                                  </div>
                                  
                                  <div class="tab-pane fade" id="fotos" role="tabpanel" aria-labelledby="fotos-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="foto">Fotos:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="number" min="0" value="0" class="form-control" id="fotosn" name="fotos" />
                                                </div>
                                          </div>

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="cfoton" name="cfoto" maxlength="50" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                <label for="foto">Detalls Fotos:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="detallsfotosn" name="detallsfotos" maxlength="100" />
                                                </div>
                                          </div>

                                      </div>
                                  </div>

                                  <div class="tab-pane fade" id="entrevistes" role="tabpanel" aria-labelledby="entrevistes-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="entrevista">Entrevistes:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="number" min="0" value="0" class="form-control" id="entrevistan" name="entrevista" />
                                                </div>
                                          </div>

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="cfentrevistan" name="centrevista" maxlength="50" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                    <label for="foto">Detalls Entrevistes:</label>
                                                    <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                          <i class="fa fa-info-circle"></i>
                                                        </div>
                                                      </div>
                                                      <input type="text" class="form-control" id="detallsentrevistan" name="detallsentrevista" maxlength="100" />
                                                    </div>
                                          </div>

                                      </div>

                                  </div>

                                  <div class="tab-pane fade" id="reportatges" role="tabpanel" aria-labelledby="reportatges-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">
                                          <div class=" col-md-2">
                                                <label for="himne">Reportatges:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="number" min="0" value="0" class="form-control" id="reportatgen" name="reportatge" />
                                                </div>
                                          </div>

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="creportatgen" name="creportatge" maxlength="50" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                    <label for="foto">Detalls Reportatges:</label>
                                                    <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                          <i class="fa fa-info-circle"></i>
                                                        </div>
                                                      </div>
                                                      <input type="text" class="form-control" id="detallsreportatgen" name="detallsreportatge" maxlength="100" />
                                                    </div>
                                          </div>

                                      </div>

                                  </div>
                                  
                                  <!--
                                  <div class="tab-pane fade" id="llibres" role="tabpanel" aria-labelledby="llibres-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="Llibre">Llibres:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="number" min="0" value="0" class="form-control" id="llibren" name="llibre" />
                                                </div>
                                          </div>

                                          <div class=" col-md-10">
                                                            <label for="foto">Detalls Llibres:</label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                  <i class="fa fa-info-circle"></i>
                                                                </div>
                                                              </div>
                                                              <input type="text" class="form-control" id="detallsllibren" name="detallsllibre" maxlength="100" />
                                                            </div>
                                          </div>

                                      </div>

                                  </div>

                                  <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">

                                    <div class="row">
                                        <div class="col">&nbsp;</div>
                                    </div>

                                    <div class="row">

                                      <div class=" col-md-2">
                                            <label for="video">Videos:</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                  <i class="fa fa-info-circle"></i>
                                                </div>
                                              </div>
                                              <input type="number" min="0" value="0" class="form-control" id="videon" name="video" />
                                            </div>
                                      </div>    

                                      <div class=" col-md-10">
                                                          <label for="foto">Detalls Videos:</label>
                                                          <div class="input-group">
                                                            <div class="input-group-prepend">
                                                              <div class="input-group-text">
                                                                <i class="fa fa-info-circle"></i>
                                                              </div>
                                                            </div>
                                                            <input type="text" class="form-control" id="detallsvideon" name="detallsvideo" maxlength="100" />
                                                          </div>
                                        </div>

                                    </div>

                                  </div>                           
                                  -->

                                  <div class="tab-pane fade" id="altre1" role="tabpanel" aria-labelledby="altre1-tab">

                                  
                                    <div class="row">
                                        <div class="col">&nbsp;</div>
                                    </div>

                                    <div class="row">

                                        <div class=" col-md-2">
                                              <label for="altre">Altre 1:</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                    <i class="fa fa-info-circle"></i>
                                                  </div>
                                                </div>
                                                <input type="text" maxlength="20" class="form-control" id="altre1n" name="altre1" />
                                              </div>
                                        </div>

                                        <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="caltre1n" name="caltre1" maxlength="50" />
                                                </div>
                                          </div>

                                        <div class=" col-md-8">
                                                              <label for="foto">Detalls Altre 1:</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <div class="input-group-text">
                                                                    <i class="fa fa-info-circle"></i>
                                                                  </div>
                                                                </div>
                                                                <input type="text" class="form-control" id="detallsaltre1n" name="detallsaltre1" maxlength="100" />
                                                              </div>
                                        </div>

                                    </div> 

                                  </div>

                                  <div class="tab-pane fade" id="altre2" role="tabpanel" aria-labelledby="altre2-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="altre">Altre 2:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" maxlength="20" class="form-control" id="altre2n" name="altre2" />
                                                </div>
                                          </div>

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="caltre2n" name="caltre2" maxlength="50" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                <label for="detalls2">Detalls Altre 2:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" maxlength="100" class="form-control" id="detallsaltre2n" name="detallsaltre2" maxlength="100" />
                                                </div>
                                          </div>

                                      </div>
                                  </div>

                                  <div class="tab-pane fade" id="altre3" role="tabpanel" aria-labelledby="altre3-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="altre">Altre 3:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" maxlength="20" class="form-control" id="altre3n" name="altre3" />
                                                </div>
                                          </div>

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="caltre3n" name="caltre3" maxlength="50" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                <label for="detalls2">Detalls Altre 3:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" maxlength="100" class="form-control" id="detallsaltre3n" name="detallsaltre3" maxlength="100" />
                                                </div>
                                          </div>

                                      </div>
                                  </div>

                                </div>
                                <!-- end tab contents -->
                          <div class="row">
                              <div class="col">&nbsp;</div>
                          </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                    <button type="submit" class="btn btn-primary" id="btnNewEntitatDoc">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- fi del dialeg modal NEW -->

    <script>

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('new-doc-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

    </script>