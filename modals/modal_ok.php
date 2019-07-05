<!-- dialeg modal OK -->
    <!---->
    <div class="modal fade" id="myOkModal" tabindex="-1" role="dialog" aria-labelledby="myDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content deleteModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-check-square"></i> Operació sobre les Dades.
                  </h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div id="okBody" class="modal-body">
                    <p id="okMessage"><b>L'operació s'ha realitzat amb èxit.</b></p>
                    <p> S'ha guardat registre de l'acció per part de l'usuari <b><?php echo $_SESSION['usuari']; ?></b>.</p>
                </div>          
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>
                </div>
            </div>
        </div>
    </div>
<!---->