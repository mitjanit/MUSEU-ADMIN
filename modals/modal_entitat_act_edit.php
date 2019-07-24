<!-- dialeg modal EDIT -->
    <div  class="modal fade" id="myEditModalActs" tabindex="-1" role="dialog" aria-labelledby="myEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content newModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Edita Activitat Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormEditEntitatAct" id="modalFormEditEntitatAct" class="edit-act-validation" novalidate action="db/editaActEntitat.php" method="get">
                  <input type="hidden" id="idclubact" name="idc" value="<?php echo $_REQUEST['id']; ?>" />
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
                                        <input readonly type="text" name="id" class="form-control" id="idaee" placeholder="Id"/>
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
                                        <input type="text" maxlength="7" class="form-control" name="temporada" id="temporadaaee" required />
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
                                        <select class="form-control" id="tipusaee" name="tipus" required>
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
                                        <input type="text" maxlength="50" class="form-control" id="actuacioaee" name="actuacio" required />
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
                                        <input type="text" class="form-control" id="detalls1aee" name="detalls1" maxlength="50" />
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
                                        <input type="text" maxlength="50" class="form-control" id="detalls2aee" name="detalls2" />
                                      </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col"><hr></div>
                            </div>

                              <div class="row">
                                  <div class="col"><hr></div>
                              </div>
                              <!--<div class="row mb-4">-->
                                <!-- Tabs (Fotos, ....) -->
                                  <ul class="nav nav-tabs nav-justified" id="myTabae" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="fotos-tabae" data-toggle="tab" href="#fotosae" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-camera"></i> Fotos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="entrevistes-tabae" data-toggle="tab" href="#entrevistesae" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-microphone"></i> Entrevistes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="reportatges-tabae" data-toggle="tab" href="#reportatgesae" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-alt"></i> Cròniques</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="cartells-tabae" data-toggle="tab" href="#cartellsae" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-image"></i> Cartells</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="programes-tabae" data-toggle="tab" href="#programesae" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-book"></i> Programes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="videos-tabae" data-toggle="tab" href="#videosae" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-video"></i> Videos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="altre1-tabae" data-toggle="tab" href="#altre1ae" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-one"></i> Altre 1</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="altre2-tabae" data-toggle="tab" href="#altre2ae" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-two"></i> Altre 2</a>
                                    </li>
                                  </ul>
                                  <!-- tab contents -->
                                  <div class="tab-content" id="myTabContentae">
                                    
                                    <div class="tab-pane fade show active" id="fotosae" role="tabpanel" aria-labelledby="fotos-tabae">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="fotosaee1" name="fotos" />
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
                                                    <input type="text" class="form-control" id="detallsfotosaee" name="detallsfotos" maxlength="100" />
                                                  </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="entrevistesae" role="tabpanel" aria-labelledby="entrevistes-tabae">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="entrevistaee1" name="entrevista" />
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
                                                        <input type="text" class="form-control" id="detallsentrevistaee" name="detallsentrevista" maxlength="100" />
                                                      </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="reportatgesae" role="tabpanel" aria-labelledby="reportatges-tabae">

                                        <div class="row">
                                            <div class="col">&nbsp;</div>
                                        </div>

                                        <div class="row">
                                            <div class=" col-md-2">
                                                  <label for="himne">Cròniques:</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">
                                                        <i class="fa fa-info-circle"></i>
                                                      </div>
                                                    </div>
                                                    <input type="number" min="0" value="0" class="form-control" id="reportatgaee1" name="reportatge" />
                                                  </div>
                                            </div>

                                            <div class=" col-md-10">
                                                      <label for="foto">Detalls Cròniques:</label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <div class="input-group-text">
                                                            <i class="fa fa-info-circle"></i>
                                                          </div>
                                                        </div>
                                                        <input type="text" class="form-control" id="detallsreportatgaee" name="detallsreportatge" maxlength="100" />
                                                      </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="cartellsae" role="tabpanel" aria-labelledby="cartells-tabae">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="cartellaee1" name="cartell" />
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
                                                            <input type="text" class="form-control" id="detallscartellaee" name="detallscartell" maxlength="100" />
                                                          </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="programesae" role="tabpanel" aria-labelledby="programes-tabae">

                                        <div class="row">
                                            <div class="col">&nbsp;</div>
                                        </div>

                                        <div class="row">

                                            <div class=" col-md-2">
                                                  <label for="Llibre">Programa:</label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <div class="input-group-text">
                                                        <i class="fa fa-info-circle"></i>
                                                      </div>
                                                    </div>
                                                    <input type="number" min="0" value="0" class="form-control" id="programaaee1" name="programa" />
                                                  </div>
                                            </div>

                                            <div class=" col-md-10">
                                                              <label for="foto">Detalls Programa:</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <div class="input-group-text">
                                                                    <i class="fa fa-info-circle"></i>
                                                                  </div>
                                                                </div>
                                                                <input type="text" class="form-control" id="detallsprogramaaee" name="detallsprograma" maxlength="100" />
                                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="videosae" role="tabpanel" aria-labelledby="videos-tabae">

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
                                                <input type="number" min="0" value="0" class="form-control" id="videoaee1" name="video" />
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
                                                              <input type="text" class="form-control" id="detallsvideoaee" name="detallsvideo" maxlength="100" />
                                                            </div>
                                          </div>

                                      </div>

                                    </div>                           


                                    <div class="tab-pane fade" id="altre1ae" role="tabpanel" aria-labelledby="altre1-tabae">

                                    
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
                                                  <input type="text" maxlength="20" class="form-control" id="altre1aee" name="altre1" />
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
                                                                  <input type="text" class="form-control" id="detallsaltre1aee" name="detallsaltre1" maxlength="100" />
                                                                </div>
                                          </div>

                                      </div> 

                                    </div>

                                    <div class="tab-pane fade" id="altre2ae" role="tabpanel" aria-labelledby="altre2-tabae">

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
                                                    <input type="text" maxlength="20" class="form-control" id="altre2aee" name="altre2" />
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
                                                    <input type="text" maxlength="50" class="form-control" id="detallsaltre2aee" name="detallsaltre2" maxlength="100" />
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
                    <button type="submit" class="btn btn-primary" id="btnEditEntitatAct">Guardar</button>
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
          var forms = document.getElementsByClassName('edit-act-validation');
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