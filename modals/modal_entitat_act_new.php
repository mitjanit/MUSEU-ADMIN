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
                <form role="form" name="modalFormNewEntitatAct" id="modalFormNewEntitatAct" class="new-act-validation" novalidate action="db/altaActEntitat.php" method="get">
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
                                        <input readonly type="text" name="id" class="form-control" id="idaen" placeholder="Id"/>
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
                                        <input type="text" maxlength="7" class="form-control" name="temporada" id="temporadaaen" required />
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

                              <div class="row">
                                  <div class="col"><hr></div>
                              </div>
                              <!--<div class="row mb-4">-->
                                <!-- Tabs (Fotos, ....) -->
                                  <ul class="nav nav-tabs nav-justified" id="myTaba" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="fotos-taba" data-toggle="tab" href="#fotosa" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-camera"></i> Fotos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="entrevistes-taba" data-toggle="tab" href="#entrevistesa" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-microphone"></i> Entrevistes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="reportatges-taba" data-toggle="tab" href="#reportatgesa" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-alt"></i> Cròniques</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="cartells-taba" data-toggle="tab" href="#cartellsa" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-file-image"></i> Cartells</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="programes-taba" data-toggle="tab" href="#programesa" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-book"></i> Programes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="videos-taba" data-toggle="tab" href="#videosa" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-video"></i> Videos</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="altre1-taba" data-toggle="tab" href="#altre1a" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-one"></i> Altre 1</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="altre2-taba" data-toggle="tab" href="#altre2a" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-dice-two"></i> Altre 2</a>
                                    </li>
                                  </ul>
                                  <!-- tab contents -->
                                  <div class="tab-content" id="myTabContenta">
                                    
                                    <div class="tab-pane fade show active" id="fotosa" role="tabpanel" aria-labelledby="fotos-taba">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="fotosaen" name="fotos" />
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
                                                    <input type="text" class="form-control" id="detallsfotosaen" name="detallsfotos" maxlength="100" />
                                                  </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="entrevistesa" role="tabpanel" aria-labelledby="entrevistes-taba">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="entrevistaen" name="entrevista" />
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
                                                        <input type="text" class="form-control" id="detallsentrevistaen" name="detallsentrevista" maxlength="100" />
                                                      </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="reportatgesa" role="tabpanel" aria-labelledby="reportatges-taba">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="reportatgaen" name="reportatge" />
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
                                                        <input type="text" class="form-control" id="detallsreportatgaen" name="detallsreportatge" maxlength="100" />
                                                      </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="cartellsa" role="tabpanel" aria-labelledby="cartells-taba">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="cartellaen" name="cartell" />
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
                                                            <input type="text" class="form-control" id="detallscartellaen" name="detallscartell" maxlength="100" />
                                                          </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="programesa" role="tabpanel" aria-labelledby="programes-taba">

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
                                                    <input type="number" min="0" value="0" class="form-control" id="programaaen" name="programa" />
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
                                                                <input type="text" class="form-control" id="detallsprogramaaen" name="detallsprograma" maxlength="100" />
                                                              </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="videosa" role="tabpanel" aria-labelledby="videos-taba">

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
                                                <input type="number" min="0" value="0" class="form-control" id="videoaen" name="video" />
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
                                                              <input type="text" class="form-control" id="detallsvideoaen" name="detallsvideo" maxlength="100" />
                                                            </div>
                                          </div>

                                      </div>

                                    </div>                           


                                    <div class="tab-pane fade" id="altre1a" role="tabpanel" aria-labelledby="altre1-taba">

                                    
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
                                                  <input type="text" maxlength="20" class="form-control" id="altre1aen" name="altre1" />
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
                                                                  <input type="text" class="form-control" id="detallsaltre1aen" name="detallsaltre1" maxlength="100" />
                                                                </div>
                                          </div>

                                      </div> 

                                    </div>

                                    <div class="tab-pane fade" id="altre2a" role="tabpanel" aria-labelledby="altre2-taba">

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
                                                    <input type="text" maxlength="20" class="form-control" id="altre2aen" name="altre2" />
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
                                                    <input type="text" maxlength="50" class="form-control" id="detallsaltre2aen" name="detallsaltre2" maxlength="100" />
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