<!-- dialeg modal EDIT -->
    <div  class="modal fade" id="myEditModalDocs" tabindex="-1" role="dialog" aria-labelledby="myEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Edita Document Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormEditEntitatDoc" id="modalFormEditEntitatDoc" class="new-doc-validation" novalidate action="db/editaDocument.php" method="get">
                  <input type="hidden" id="idce" name="idc" value="<?php echo $_REQUEST['id']; ?>" />
                <div id="newBody" class="modal-body">
                       <p id="editMessageDocs"></p>
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
                                        <input readonly type="text" name="id" class="form-control" id="ide" placeholder="Id"/>
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
                                        <input type="text" maxlength="4" class="form-control" name="temporada" id="temporadae" required />
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
                                        <input type="text" maxlength="50" class="form-control" id="documente" name="document" required />
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
                                        <input type="text" maxlength="50" class="form-control" id="contingute" name="contingut" required />
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
                                        <input type="text" class="form-control" id="premsae" name="premsa" maxlength="50" />
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
                                        <input type="text" maxlength="50" class="form-control" id="altrese" name="altres" />
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
                                                    <input type="text" class="form-control" id="detallse" name="detalls" maxlength="100" />
                                                  </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col"><hr></div>
                            </div>

                            <!--<div class="row mb-4">-->

                                <!-- Tabs (Fotos, ....) -->
                                <ul class="nav nav-tabs nav-justified" id="myTabe" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="fotos-tabe" data-toggle="tab" href="#fotose" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-camera"></i> Fotos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="entrevistes-tabe" data-toggle="tab" href="#entrevistese" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-microphone"></i> Entrevistes</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="reportatges-tabe" data-toggle="tab" href="#reportatgese" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-alt"></i> Reportatges</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="cartells-tabe" data-toggle="tab" href="#cartellse" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-image"></i> Cartells</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="llibres-tabe" data-toggle="tab" href="#llibrese" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-book"></i> Llibres</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="videos-tabe" data-toggle="tab" href="#videose" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-video"></i> Videos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre1-tabe" data-toggle="tab" href="#altre1e" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-one"></i> Altre 1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="altre2-tabe" data-toggle="tab" href="#altre2e" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-two"></i> Altre 2</a>
                                  </li>
                                </ul>

                                <!-- tab contents -->
                                <div class="tab-content" id="myTabContente">
                                  
                                  <div class="tab-pane fade show active" id="fotose" role="tabpanel" aria-labelledby="fotos-tabe">

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
                                                  <input type="number" min="0" value="0" class="form-control" id="fotosee" name="fotos" />
                                                </div>
                                          </div>

                                          <div class=" col-md-10">
                                                <label for="foto">Detalls Fotos:</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <i class="fa fa-info-circle"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" id="detallsfotose" name="detallsfotos" maxlength="100" />
                                                </div>
                                          </div>

                                      </div>
                                  </div>

                                  <div class="tab-pane fade" id="entrevistese" role="tabpanel" aria-labelledby="entrevistes-tabe">

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
                                                  <input type="number" min="0" value="0" class="form-control" id="entrevistae" name="entrevista" />
                                                </div>
                                          </div>

                                          <div class=" col-md-10">
                                                    <label for="foto">Detalls Entrevistes:</label>
                                                    <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                          <i class="fa fa-info-circle"></i>
                                                        </div>
                                                      </div>
                                                      <input type="text" class="form-control" id="detallsentrevistae" name="detallsentrevista" maxlength="100" />
                                                    </div>
                                          </div>

                                    </div>

                                  </div>

                                  <div class="tab-pane fade" id="reportatgese" role="tabpanel" aria-labelledby="reportatges-tabe">

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
                                                <input type="number" min="0" value="0" class="form-control" id="reportatgee" name="reportatge" />
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
                                                    <input type="text" class="form-control" id="detallsreportatgee" name="detallsreportatge" maxlength="100" />
                                                  </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane fade" id="cartellse" role="tabpanel" aria-labelledby="cartells-tabe">

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
                                                <input type="number" min="0" value="0" class="form-control" id="cartelle" name="cartell" />
                                              </div>
                                        </div>

                                        <div class=" col-md-10">
                                                      <label for="foto">Detalls Cartells:</label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <div class="input-group-text">
                                                            <i class="fa fa-info-circle"></i>
                                                          </div>
                                                        </div>
                                                        <input type="text" class="form-control" id="detallscartelle" name="detallscartell" maxlength="100" />
                                                      </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="llibrese" role="tabpanel" aria-labelledby="llibres-tabe">

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
                                              <input type="number" min="0" value="0" class="form-control" id="llibree" name="llibre" />
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
                                                          <input type="text" class="form-control" id="detallsllibree" name="detallsllibre" maxlength="100" />
                                                        </div>
                                      </div>

                                  </div>

                              </div>

                              <div class="tab-pane fade" id="videose" role="tabpanel" aria-labelledby="videos-tabe">

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
                                          <input type="number" min="0" value="0" class="form-control" id="videoe" name="video" />
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
                                                        <input type="text" class="form-control" id="detallsvideoe" name="detallsvideo" maxlength="100" />
                                                      </div>
                                    </div>

                                </div>

                              </div>                           


                              <div class="tab-pane fade" id="altre1e" role="tabpanel" aria-labelledby="altre1-tabe">

                                
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
                                            <input type="text" maxlength="20" class="form-control" id="altre1ee" name="altre1" />
                                          </div>
                                    </div>

                                    <div class=" col-md-10">
                                                          <label for="foto">Detalls Altre 1:</label>
                                                          <div class="input-group">
                                                            <div class="input-group-prepend">
                                                              <div class="input-group-text">
                                                                <i class="fa fa-info-circle"></i>
                                                              </div>
                                                            </div>
                                                            <input type="text" class="form-control" id="detallsaltre1e" name="detallsaltre1" maxlength="100" />
                                                          </div>
                                    </div>

                                </div> 

                              </div>

                              <div class="tab-pane fade" id="altre2e" role="tabpanel" aria-labelledby="altre2-tabe">

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
                                            <input type="text" maxlength="20" class="form-control" id="altre2ee" name="altre2" />
                                          </div>
                                    </div>

                                    <div class=" col-md-10">
                                          <label for="detalls2">Detalls Altre 2:</label>
                                          <div class="input-group">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <i class="fa fa-info-circle"></i>
                                              </div>
                                            </div>
                                            <input type="text" maxlength="50" class="form-control" id="detallsaltre2e" name="detallsaltre2" maxlength="100" />
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
          var forms = document.getElementsByClassName('edit-doc-validation');
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