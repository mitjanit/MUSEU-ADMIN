<!-- dialeg modal NEW -->
<div  class="modal fade" id="myNewModal" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Persona</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNew" id="modalFormNew" class="needs-validation" novalidate action="altaPersona.php" method="get">
                  <div id="newBody" class="modal-body">
                              <div class="row mb-4">
                                  <!-- row 0 -->
                                  <div class=" col-md-4">
                                        <label for="registre">Registre:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input readonly type="text" name="registre" class="form-control" id="registre" placeholder="Num. Registre" />
                                        </div>
                                  </div>
                                  <div class=" col-md-4">
                                        <label for="nome">Nom Esportiu (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" name="c2" id="nome" required maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  <div class=" col-md-4">
                                        <label for="nom">DNI:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="nom" name="c3" >
                                        </div>
                                  </div>

                              </div>
                              <div class="row mb-4">
                                  <!-- row 0 -->

                                  <div class=" col-md-4">
                                        <label for="nom">Llinatge 1 (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="nom" name="c3" required maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  <div class=" col-md-4">
                                        <label for="nom">Llinatge 2 (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="nom" name="c3" required maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  <div class=" col-md-4">
                                        <label for="nom">Nom (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="nom" name="c3" required maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  

                              </div>
                              <!-- end row 0 -->

                              <div class="row mb-4">

                                  <div class=" col-md-4">
                                        <label for="pais">Pais (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="pais" name="pais" required>
                                            <option value=""></option>
                                            <?php
                                              $queryPaisos = "SELECT * FROM paisos ORDER BY nom ASC";
                                              $rs = mysqli_query($con01, $queryPaisos) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".($row['nom'])."</option>";
                                              }
                                            ?>
                                          </select>
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  <div class=" col-md-4">
                                        <label for="provincia">Provincia (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="provincia" name="provincia" required>
                                            <option value=""></option>
                                            <?php
                                              $queryProv = "SELECT * FROM provincies ORDER BY nom ASC";
                                              $rs = mysqli_query($con01, $queryProv) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".($row['nom'])."</option>";
                                              }
                                            ?>
                                            <!--<option value="No Aplicable">No Aplicable</option>-->
                                          </select>
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  <div class=" col-md-4">
                                        <label for="poblacio">Població (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="poblacio" name="poblacio" required>
                                            <option value=""></option>
                                            <?php
                                              $queryPob = "SELECT * FROM poblacions ORDER BY nom ASC";
                                              $rs = mysqli_query($con01, $queryPob) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".($row['nom'])."</option>";
                                              }
                                            ?>
                                          </select>
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                              </div>

                             <div class="row mb-4">

                                  <div class=" col-md-3">
                                        <label for="inici">Any Naixement (AAAA):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" maxlength="4" class="form-control" id="naixement" name="naixement" />
                                        </div>
                                  </div>

                                  <div class=" col-md-3">
                                        <label for="inici">Any Mort (AAAA):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" maxlength="4" class="form-control" id="mort" name="mort" />
                                        </div>
                                  </div>

                                  <div class=" col-md-6">
                                        <label for="detalls">Detalls Mort:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="detalls" name="c8" maxlength="50" />
                                        </div>
                                  </div>

                                  

                              </div>

                              <div class="row  mb-4">

                                  <div class=" col-md-12">
                                        <label for="detalls">Detalls:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="detalls" name="c8" maxlength="100" />
                                        </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col"><hr></div>
                              </div>

                              <div class="row  mb-4">

                                  <div class=" col-md-12">
                                        <label for="materials">Materials:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="materials" name="c15" maxlength="100" />
                                        </div>
                                  </div>
                              </div>

                              <div class="row mb-4">

                                  <div class=" col-md-2">
                                        <label for="escut">Ficha:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="escut" name="c9" placeholder="Ficha">
                                        </div>
                                  </div>


                                  <div class=" col-md-2">
                                        <label for="escut">Fotos:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="himne" name="c10" placeholder="Fotos">
                                        </div>
                                  </div>

                                  <div class=" col-md-2">
                                        <label for="cd">Entrevistes:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="cd" name="c11" placeholder="Entrevistes">
                                        </div>
                                  </div>

                                  <div class=" col-md-2">
                                        <label for="insignia">Reportatges:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="insignia" name="c12" placeholder="Reportatges">
                                        </div>
                                  </div>

                                  <div class=" col-md-2">
                                        <label for="altre1">Altre 1:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="altre1" name="c13" maxlength="30">
                                        </div>
                                  </div>

                                  <div class=" col-md-2">
                                        <label for="altre2">Altre 2:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="altre2" name="c14" maxlength="30">
                                        </div>
                                  </div>
                                  

                              </div>

                              <div class="row">
                                  
                                  <div class=" col-md-2">
                                        <label for="altre2">Altre 3:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="altre2" name="c14" maxlength="30">
                                        </div>
                                  </div>


                                  <div class=" col-md-10">
                                        <label for="detalls2">Detalls 2:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="detalls2" name="c14" maxlength="100">
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