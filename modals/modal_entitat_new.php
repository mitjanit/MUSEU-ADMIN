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
                <form role="form" name="modalFormNew" id="modalFormNew" class="needs-validation" novalidate action="db/altaEntitat.php" method="get">
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
                                        <input readonly type="text" name="registre" class="form-control" id="registre" placeholder="Num. Registre"/>
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
                                        <input type="text" maxlength="50" class="form-control" name="nome" id="nome" required />
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
                                        <input type="text" maxlength="50" class="form-control" id="nom" name="nom" required />
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
                                          <option value="1">España</option>
                                          <option value="160">Desconocido</option>
                                          <option value="">------------</option>
                                          <?php
                                            $queryPaisos = "SELECT * FROM paisos ORDER BY nom ASC";
                                            $rs = mysqli_query($con01, $queryPaisos) or die("Error: ".mysqli_error($con01));
                                            while ($row = mysqli_fetch_array($rs)){
                                              if($row['nom']!="España" && $row['nom']!="Desconocido"){
                                                echo "<option value='".$row['id']."'>".($row['nom'])."</option>";
                                              }
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
                                          <option value="51">Menorca</option>
                                          <option value="7">Mallorca</option>
                                          <option value="52">Eivissa</option>
                                          <option value="56">Desconocido</option>
                                          <option value="">------------</option>
                                          <?php
                                            $queryProv = "SELECT * FROM provincies ORDER BY nom ASC";
                                            $rs = mysqli_query($con01, $queryProv) or die("Error: ".mysqli_error($con01));
                                            while ($row = mysqli_fetch_array($rs)){
                                              if($row['nom']!="Menorca" && $row['nom']!="Mallorca" && $row['nom']!="Eivissa" && $row['nom']!="Desconocido" ){
                                                echo "<option value='".$row['id']."'>".($row['nom'])."</option>";
                                              }
                                            }
                                          ?>
                                          <option value="No Aplicable">No Aplicable</option>
                                        </select>
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
                                          <option value="72">Desconocido</option>
                                          <?php
                                            $queryPob = "SELECT * FROM poblacions ORDER BY nom ASC";
                                            $rs = mysqli_query($con01, $queryPob) or die("Error: ".mysqli_error($con01));
                                            while ($row = mysqli_fetch_array($rs)){
                                              echo "<option value='".$row['id']."'>".($row['nom'])."</option>";
                                            }
                                          ?>
                                        </select>
                                      </div>
                                </div>

                            </div>

                           <div class="row mb-4">

                                <div class=" col-md-4">
                                      <label for="inici">Any Inici (YYYY):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="4" class="form-control" id="inici" name="inici" />
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
                                        <input type="text" maxlength="100" class="form-control" id="detalls" name="detalls" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="escut" name="escut" placeholder="Escut" />
                                      </div>
                                </div>


                                <div class=" col-md-2">
                                      <label for="himne">Himne:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="himne" name="himne" placeholder="Himne" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="cd" name="cd" placeholder="CD" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="insignia" name="insignia" placeholder="Insignia" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="camiseta" name="camiseta" placeholder="Camiseta" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="bufanda" name="bufanda" placeholder="Bufanda" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="bandera" name="bandera" placeholder="Bandera" />
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
                                        <input type="text" maxlength="20" class="form-control" id="altre" name="altre" />
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
                                        <input type="text" maxlength="100" class="form-control" id="detalls2" name="detalls2" />
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