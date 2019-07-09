<!-- dialeg modal NEW -->
<div  class="modal fade" id="myNewModalArbit" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Trajectòria Arbit | <?php echo $nomComplet; ?>.</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNewArbit" id="modalFormNewArbit" class="new-arbit-validation" novalidate action="db/altaTrajectoria.php" method="get">
                  <input type="hidden" id="rolearbit" name="role" value="A" />
                  <input type="hidden" id="idparbit" name="idp" value="<?php echo $_REQUEST['id']; ?>" />
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
                                          <input readonly type="text" name="id" class="form-control" id="idan" placeholder="Identificador" />
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
                                          <input type="text" class="form-control" name="temporada" id="temporadaan" required maxlength="4" />
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
                                          <select class="form-control" id="vinculatan" name="vinculat" required>
                                            <option value=""></option>
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
                                        <label for="nom">Actuació:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="actuacioan" name="actuacio" required maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>


                              </div>
                              <div class="row mb-4">
                                  <!-- row 0 -->

                                  <div class=" col-md-3">
                                        <label for="nom">Representant:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="representantan" name="representant" required maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>

                                  <div class=" col-md-3">
                                        <label for="nom">Categoria (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="categoriaan" name="categoria" required>
                                            <option value=""></option>
                                            <?php
                                              $query = "SELECT * FROM categories ORDER BY nom ASC";
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

                                  <div class=" col-md-3">
                                        <label for="nom">Competició (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="competicioan" name="competicio" required>
                                            <option value=""></option>
                                            <?php
                                              $query = "SELECT * FROM competicions ORDER BY nom ASC";
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
                                  

                              </div>

                              <div class="row mb-4">
                                  
                                  <div class=" col-md-12">
                                        <label for="detalls1">Detalls 1:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="detalls1an" name="detalls1" maxlength="100" />
                                        </div>
                                  </div>

                              </div> 
                              <!-- end row 0 -->

                              <div class="row">
                                  <div class="col"><hr></div>
                              </div>

                              <div class="row mb-4">

                                  <div class=" col-md-3">
                                    <label for="escut">Act. :</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="actan" name="act" />
                                      </div>
                                  </div>


                                  <div class=" col-md-3">
                                        <label for="escut">Categ.:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="categan" name="categ" />
                                        </div>
                                  </div>

                                  <div class=" col-md-3">
                                        <label for="sup">Sup.:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="supan" name="sup" />
                                        </div>
                                  </div>


                                  <div class=" col-md-3">
                                        <label for="escut">Inf.:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="infan" name="inf" />
                                        </div>
                                  </div>

                                                            

                              </div>


                              <div class="row mb-4">

                                  

                                  <div class=" col-md-3">
                                        <label for="cd">J. Línea:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="jlineaan" name="jlinea" />
                                        </div>
                                  </div>

                                  <!--
                                  <div class=" col-md-3">
                                        <label for="insignia">?? :</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="insignia" name="c12" placeholder="Reportatges">
                                        </div>
                                  </div>      

                                  <div class=" col-md-3">
                                        <label for="insignia">?? :</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="insignia" name="c12" placeholder="Reportatges">
                                        </div>
                                  </div>  
                                  -->
                                  <div class=" col-md-3">
                                        <label for="classif">Classificació:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="classifan" name="classif" />
                                        </div>
                                  </div>                                 

                              </div>

                              <div class="row mb-4">
                                  
                                  <div class=" col-md-12">
                                        <label for="detalls2">Detalls 2:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="detalls2an" name="detalls2" maxlength="100" />
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
          var forms = document.getElementsByClassName('new-arbit-validation');
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