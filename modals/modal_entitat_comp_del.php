<!-- dialeg modal DELETE -->
    <!---->
    <div class="modal fade" id="myDeleteModalComps" tabindex="-1" role="dialog" aria-labelledby="myDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content deleteModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Elimina Competició Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormDeleteComps" id="modalFormDeleteComps" action="db/deleteCompEntitat.php" method="get">
                    <input type="hidden" name="id" id="idcompd" />
                    <input type="hidden" id="idclubcompd" name="idc" value="<?php echo $_REQUEST['id']; ?>" />
                        <div id="deleteBody" class="modal-body">
                            <p id="deleteMessageComps"></p>
                        </div>
                
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                            <button type="button" class="btn btn-primary" id="btnDeleteComp">Eliminar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<!---->