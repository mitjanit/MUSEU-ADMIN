<!-- dialeg modal NEW -->
    <div  class="modal fade" id="myNewModalActs" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Activitat Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNewEntitatAct" id="modalFormNewEntitatAct" class="new-act-validation" novalidate action="altaActEntitat.php" method="get">
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
                                        <input readonly type="text" name="registre" class="form-control" id="idaen" placeholder="Id"/>
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
                                        <input type="text" maxlength="4" class="form-control" name="temporadaaen" id="temporada" required />
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
                                      </div>
                                </div>

                                <div class=" col-md-2">
                                      <label for="nom">Tipus Activitat (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <select class="form-control" id="tipusaen" name="tipus" required>
                                          <option value=""></option>
                                          <?php
                                            $query = "SELECT * FROM temps_activitats ORDER BY nom ASC";
                                            $rs = mysqli_query($con01, $query) or die("Error: ".mysqli_error($con01));
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

                                <div class=" col-md-6">
                                      <label for="nom">Actuació (*):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="actuacioaen" name="actuacio" required />
                                        <div class="invalid-feedback">
                                          <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                        </div>
                                      </div>
                                </div>

                            </div>
                            <!-- end row 0 -->

                            
                           <div class="row mb-4">

                                <div class=" col-md-6">
                                      <label for="inici">Detalls 1:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" id="detalls1aen" name="detalls1" maxlength="50" />
                                      </div>
                                </div>

                                <div class=" col-md-6">
                                      <label for="detalls">Detalls 2:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="detalls2aen" name="detalls2" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="fotoaen" name="fotos" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="entrevistaaen" name="entrevista" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="reportatgeaen" name="reportatge" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="cartellaen" name="cartell" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="llibreaen" name="llibre" />
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
                                        <input type="number" min="0" value="0" class="form-control" id="videoaen" name="video" />
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
                                        <input type="text" maxlength="20" class="form-control" id="altre1aen" name="altre1" />
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
                                        <input type="text" maxlength="20" class="form-control" id="altre2aen" name="altre2" />
                                      </div>
                                </div>

                                <div class=" col-md-8">
                                      <label for="detalls3">Detalls 3:</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="text" maxlength="50" class="form-control" id="detalls3aen" name="detalls3" />
                                      </div>
                                </div>

                            </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                    <button type="submit" class="btn btn-primary" id="btnNewEntitatAct">Guardar</button>
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
          var forms = document.getElementsByClassName('new-act-validation');
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