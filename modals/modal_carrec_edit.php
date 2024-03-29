<!-- dialeg modal NEW -->
    <div  class="modal fade" id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="myEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Edita Càrrec</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormEdit" id="modalFormEdit" class="edita-validation" novalidate action="db/editaCarrec.php" method="get">
                <div id="newBody" class="modal-body">
                    <p id="editMessage"></p>
                            <div class="row mb-4">
                                <!-- row 0 -->
                                <div class=" col-md-4">
                                      <label for="registre">Id:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input readonly type="text" name="id" class="form-control" id="e0" placeholder="Identificador"/>
                                      </div>
                                </div>
                                <div class=" col-md-4">
                                      <label for="nome">Nom (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" name="nom" id="e1" required />
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
                                      </div>
                                </div>

                                <div class=" col-md-4">
                                      <label for="nom">Directiu (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <select class="form-control" id="e2" name="directiu" required>
                                          <option value='N'>No</option>
                                          <option value='S'>Sí</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
                                      </div>
                                </div>

                                

                            </div>
                            <!-- end row 0 -->

                            <div class="row mb-4">

                              <div class=" col-md-12">
                                    <label for="nom">Descripció:</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <i class="fa fa-info-circle"></i>
                                        </div>
                                      </div>
                                      <input type="text" maxlength="50" class="form-control" id="e3" name="descripcio" />
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
          var forms = document.getElementsByClassName('needs-validation');
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