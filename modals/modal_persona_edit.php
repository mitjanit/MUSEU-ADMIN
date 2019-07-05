<!-- dialeg modal NEW -->
<div  class="modal fade" id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content editModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Edita Persona</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormEdit" id="modalFormEdit" class="edita-validation" novalidate action="editaPersona.php" method="get">
                  <div id="newBody" class="modal-body">
                    <p id="editMessage"></p>
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
                                          <input readonly type="text" name="id" class="form-control" id="e0" placeholder="Num. Registre" />
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
                                          <input type="text" class="form-control" name="nome" id="e1" required maxlength="30" />
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
                                          <input type="text" class="form-control" id="e2" name="dni" >
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
                                          <input type="text" class="form-control" id="e3" name="llinatge1" required maxlength="30" />
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
                                          <input type="text" class="form-control" id="e4" name="llinatge2" required maxlength="30" />
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
                                          <input type="text" class="form-control" id="e5" name="nom" required maxlength="30" />
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
                                          <select class="form-control" id="e6" name="pais" required>
                                            <option value=""></option>
                                            <?php
                                              $queryPaisos = "SELECT * FROM paisos ORDER BY nom ASC";
                                              $rs = mysqli_query($con01, $queryPaisos) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".utf8_encode($row['nom'])."</option>";
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
                                          <select class="form-control" id="e7" name="provincia" required>
                                            <option value=""></option>
                                            <?php
                                              $queryProv = "SELECT * FROM provincies ORDER BY nom ASC";
                                              $rs = mysqli_query($con01, $queryProv) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".utf8_encode($row['nom'])."</option>";
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
                                          <select class="form-control" id="e8" name="poblacio" required>
                                            <option value=""></option>
                                            <?php
                                              $queryPob = "SELECT * FROM poblacions ORDER BY nom ASC";
                                              $rs = mysqli_query($con01, $queryPob) or die("Error: ".mysqli_error($con01));
                                              while ($row = mysqli_fetch_array($rs)){
                                                echo "<option value='".$row['id']."'>".utf8_encode($row['nom'])."</option>";
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
                                          <input type="text" maxlength="4" class="form-control" id="e9" name="naixement" />
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
                                          <input type="text" maxlength="4" class="form-control" id="e10" name="mort" />
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
                                          <input type="text" class="form-control" id="e11" name="detallsmort" maxlength="50" />
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
                                          <input type="text" class="form-control" id="e12" name="detalls" maxlength="100" />
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
                                          <input type="text" class="form-control" id="e13" name="materials" maxlength="100" />
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
                                          <input type="number" min="0" value="0" class="form-control" id="e14" name="ficha" placeholder="Ficha">
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
                                          <input type="number" min="0" value="0" class="form-control" id="e15" name="fotos" placeholder="Fotos">
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
                                          <input type="number" min="0" value="0" class="form-control" id="e16" name="entrevista" placeholder="Entrevistes">
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
                                          <input type="number" min="0" value="0" class="form-control" id="e17" name="reportatge" placeholder="Reportatges">
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
                                          <input type="text" class="form-control" id="e18" name="altre1" maxlength="30">
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
                                          <input type="text" class="form-control" id="e19" name="altre2" maxlength="30">
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
                                          <input type="text" class="form-control" id="e20" name="altre3" maxlength="30">
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
                                          <input type="text" class="form-control" id="e21" name="detalls2" maxlength="100">
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
          var forms = document.getElementsByClassName('edita-validation');
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