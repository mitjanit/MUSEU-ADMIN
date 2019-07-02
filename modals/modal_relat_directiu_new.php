<!-- dialeg modal NEW -->
<div  class="modal fade" id="myNewModalRelatDirectiu" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Relat Directiu</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNew" id="modalFormNew" class="new-relatdirectiu-validation" novalidate action="altaRelat.php" method="get">
                  <input type="hidden" id="role" name="role" value="D" />
                  <input type="hidden" id="idp" name="idp" value="<?php echo $_REQUEST['id']; ?>" />
                  <div id="newBody" class="modal-body">
                      <div class="row mb-4">
                          <!-- row 0 -->
                          <div class=" col-md-3">
                              <label for="registre">Identificador:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <i class="fa fa-info-circle"></i>
                                        </div>
                                    </div>
                                    <input readonly type="text" name="id" class="form-control" id="id" placeholder="Identificador" />
                                </div>
                          </div>

                          <div class=" col-md-6">
                            <label for="jugador">Directiu:</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fa fa-info-circle"></i>
                                    </div>
                                </div>
                                <input readonly type="text" name="jugador" class="form-control" id="entrenador" value="<?php echo $nomComplet; ?>" />
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
                                    <input type="text" class="form-control" name="temporada" id="temporadae" required maxlength="4" />
                                    <div class="invalid-feedback">
                                      <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                    </div>
                                  </div>
                          </div>
                      </div>

                      <div class="row mb-4">
                                  
                          <div class=" col-md-12">
                              <label for="relat">Relat:</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fa fa-info-circle"></i>
                                    </div>
                                  </div>
                                  <textarea rows="4" class="form-control" id="relate" name="relat" maxlength="100" ></textarea>
                                </div>
                          </div>

                        </div>      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                      <button type="submit" class="btn btn-primary" id="btnNew">Guardar</button>
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
          var forms = document.getElementsByClassName('new-relatentdirectiu-validation');
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