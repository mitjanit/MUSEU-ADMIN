<!-- dialeg modal NEW -->
<div  class="modal fade" id="myNewModalComps" tabindex="-1" role="dialog" aria-labelledby="myNewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Alta Competició | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormNewCompEntitat" id="modalFormNewCompEntitat" class="new-comp-validation" novalidate action="db/altaCompEntitat.php" method="get">
                  <input type="hidden" id="idclubcomp" name="idc" value="<?php echo $_REQUEST['id']; ?>" />
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
                                          <input readonly type="text" name="id" class="form-control" id="idcen" placeholder="Identificador" />
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
                                          <input type="text" class="form-control" name="temporada" id="temporadacen" required maxlength="4" />
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
                                          <select class="form-control" id="competiciocen" name="competicio" required>
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

                                  <div class=" col-md-3">
                                        <label for="nom">Categoria (*):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <select class="form-control" id="categoriacen" name="categoria" required>
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


                              </div>
                              <div class="row mb-4">
                                  <!-- row 0 -->

                                  <div class=" col-md-3">
                                        <label for="nom">Entrenador:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="entrenadorcen" name="entrenador" maxlength="30" />
                                          <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle"></i> Camp obligatori.
                                          </div>
                                        </div>
                                  </div>
                                  
                                  <div class=" col-md-9">
                                        <label for="detalls1">Detalls 1:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="detalls1cen" name="detalls1" maxlength="100" />
                                        </div>
                                  </div>

                              </div> 
                              <!-- end row 0 -->

                              <div class="row">
                                  <div class="col"><hr></div>
                              </div>

                              <div class="row mb-4">

                                  <div class=" col-md-3">
                                    <label for="escut">Partits Jugats (PJ):</label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="fa fa-info-circle"></i>
                                          </div>
                                        </div>
                                        <input type="number" min="0" value="0" class="form-control" id="pjcen" name="pj" />
                                      </div>
                                  </div>

                                  <div class=" col-md-3">
                                        <label for="cd">Partits Guanyats (PG):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="pgcen" name="pg" />
                                        </div>
                                  </div>

                                  <div class=" col-md-3">
                                        <label for="pe">Partits Empatats (PE):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="pecen" name="pe" />
                                        </div>
                                  </div>      

                                  <div class=" col-md-3">
                                        <label for="pp">Partits Perduts (PP):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="ppcen" name="pp" />
                                        </div>
                                  </div>  


                                  

                                                            

                              </div>


                              <div class="row mb-4">

                                  <div class=" col-md-3">
                                        <label for="resultat">Punts:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="puntscen" name="punts" />
                                        </div>
                                  </div>

                                  <div class=" col-md-3">
                                        <label for="gf">Gols a Favor (GF):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="gfcen" name="gf" />
                                        </div>
                                  </div>


                                  <div class=" col-md-3">
                                        <label for="escut">Gols en Contra (GC):</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="number" min="0" value="0" class="form-control" id="gccen" name="gc" />
                                        </div>
                                  </div>

                                  

                                  <div class=" col-md-3">
                                        <label for="classif">Classificació:</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                              <i class="fa fa-info-circle"></i>
                                            </div>
                                          </div>
                                          <input type="text" class="form-control" id="classifcen" name="classif" />
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
                                          <input type="text" class="form-control" id="detalls2cen" name="detalls2" maxlength="100" />
                                        </div>
                                  </div>

                              </div>      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                      <button type="submit" class="btn btn-primary" id="btnNewCompEntitat">Guardar</button>
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
          var forms = document.getElementsByClassName('new-comp-validation');
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