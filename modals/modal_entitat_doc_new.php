<!-- dialeg modal NEW -->
    <div  class="modal fade" id="myNewModalDocs" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Document Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNewEntitatDoc" id="modalFormNewEntitatDoc" class="new-doc-validation" novalidate action="db/altaDocument.php" method="get">
                  <input type="hidden" id="idc" name="idc" value="<?php echo $_REQUEST['id']; ?>" />
                <div id="newBody" class="modal-body">
                            <div class="row mb-4">
                                <!-- row 0 -->
                                <div class=" col-md-2">
                                      <label for="registre">Registre:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input readonly type="text" name="id" class="form-control" id="idden" placeholder="Id"/>
                                      </div>
                                </div>
                                <div class=" col-md-2">
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

                                <div class=" col-md-4">
                                      <label for="nom">Document (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="documentn" name="document" required />
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
                                      </div>
                                </div>

                                <div class=" col-md-4">
                                      <label for="nom">Contingut (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="contingutn" name="contingut" required />
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
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
                                    <a class="nav-link active" id="fotos-tab" data-toggle="tab" href="#fotos" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-camera"></i> Fotos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="entrevistes-tab" data-toggle="tab" href="#entrevistes" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-microphone"></i> Entrevistes</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="reportatges-tab" data-toggle="tab" href="#reportatges" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-alt"></i> Reportatges</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="cartells-tab" data-toggle="tab" href="#cartells" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-image"></i> Cartells</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="llibres-tab" data-toggle="tab" href="#llibres" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-book"></i> Llibres</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-video"></i> Videos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre1-tab" data-toggle="tab" href="#altre1" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-one"></i> Altre 1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre2-tab" data-toggle="tab" href="#altre2" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-two"></i> Altre 2</a>
                                  </li>
                                </ul>
                                <!-- tab contents -->
                                <div class="tab-content" id="myTabContent">
                                  
                                  <div class="tab-pane fade show active" id="fotos" role="tabpanel" aria-labelledby="fotos-tab">

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
                                                  <input type="text" class="form-control" id="cfoton" name="cfoto" maxlength="12" />
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
                                                  <input type="text" class="form-control" id="centrevistan" name="centrevista" maxlength="12" />
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
                                                  <input type="text" class="form-control" id="creportatgen" name="creportatge" maxlength="12" />
                                                </div>
                                          </div>

                                          <div class=" col-md-10">
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

                                  <div class="tab-pane fade" id="cartells" role="tabpanel" aria-labelledby="cartells-tab">

                                      <div class="row">
                                          <div class="col">&nbsp;</div>
                                      </div>

                                      <div class="row">

                                          <div class=" col-md-2">
                                                <label for="cd">Cartells:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="number" min="0" value="0" class="form-control" id="cartelln" name="cartell" />
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
                                                  <input type="text" class="form-control" id="ccartelln" name="ccartell" maxlength="12" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
                                                        <label for="foto">Detalls Cartells:</label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                              <i class="fa fa-info-circle"></i>
                                                            </div>
                                                          </div>
                                                          <input type="text" class="form-control" id="detallscartelln" name="detallscartell" maxlength="100" />
                                                        </div>
                                          </div>
                                      </div>

                                  </div>

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

                                          <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="cllibren" name="cllibre" maxlength="12" />
                                                </div>
                                          </div>

                                          <div class=" col-md-8">
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

                                      <div class=" col-md-2">
                                                <label for="foto">Codi (XXXXX-XXXXXX):</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="cvideon" name="cvideo" maxlength="12" />
                                                </div>
                                          </div>

                                      <div class=" col-md-8">
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
                                                  <input type="text" class="form-control" id="caltre1n" name="caltre1" maxlength="12" />
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
                                                  <input type="text" class="form-control" id="caltre2n" name="caltre2" maxlength="12" />
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
                                                  <input type="text" maxlength="50" class="form-control" id="detallsaltre2n" name="detallsaltre2" maxlength="100" />
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