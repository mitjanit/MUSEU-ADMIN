<!-- dialeg modal NEW -->
    <div  class="modal fade" id="myEditModalDocs" tabindex="-1" role="dialog" aria-labelledby="myEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Edita Document Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormEditEntitatDoc" id="modalFormEditEntitatDoc" class="edit-doc-validation" novalidate action="editaDocEntitat.php" method="get">
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
                                        <input readonly type="text" name="registre" class="form-control" id="iddee" />
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
                                        <input type="text" maxlength="4" class="form-control" name="temporada" id="temporadadee" required />
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
                                        <input type="text" maxlength="50" class="form-control" id="documentdee" name="document" required />
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
                                        <input type="text" maxlength="50" class="form-control" id="contingutdee" name="contingut" required />
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
                                        <input type="text" class="form-control" id="premsadee" name="premsa" maxlength="50" />
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
                                        <input type="text" maxlength="50" class="form-control" id="altresdee" name="altres" />
                                      </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col"><hr></div>
                            </div>

                            <div class="row mb-4">

                                <div class=" col-md-2">
                                      <label for="foto">Fotos:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="fotodee" name="fotos" />
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="entrevista">Entrev:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="entrevistadee" name="entrevista" />
                                      </div>
                                </div>


                                <div class=" col-md-2">
                                      <label for="himne">Report:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="reportatgedee" name="reportatge" />
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="cd">Cartell:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="cartelldee" name="cartell" />
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="Llibre">Llibre:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="llibredee" name="llibre" />
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="video">Video:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="videodee" name="video" />
                                      </div>
                                </div>                               

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
                                        <input type="text" maxlength="20" class="form-control" id="altre1dee" name="altre1" />
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="altre">Altre 2:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="20" class="form-control" id="altre2dee" name="altre2" />
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
                                        <input type="text" maxlength="50" class="form-control" id="detallsdee" name="detalls" />
                                      </div>
                                </div>

                            </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                    <button type="submit" class="btn btn-primary" id="btnEditEntitatDoc">Guardar</button>
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