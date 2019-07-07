<!-- dialeg modal DELETE -->
    <!---->
    <div class="modal fade" id="myDeleteModalDocs" tabindex="-1" role="dialog" aria-labelledby="myDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content deleteModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Elimina Document Entitat | <?php echo $nomComplet; ?></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormDeleteDocs" id="modalFormDeleteDocs" action="deleteDocEntitat.php" method="get">
                    <input type="hidden" name="id" id="iddocd" />
                        <div id="deleteBody" class="modal-body">
                            <p id="deleteMessageDocs"></p>
                        </div>
                
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                            <button type="button" class="btn btn-primary" id="btnDeleteDoc">Eliminar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<!---->