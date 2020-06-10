<!-- dialeg modal DELETE -->
    <!---->
    <div class="modal fade" id="myDeleteModalRelat" tabindex="-1" role="dialog" aria-labelledby="myDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content deleteModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Elimina Relat <span class="infoRelat"></span></h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormDeleteRelat" id="modalFormDeleteRelat" action="db/deleteRelat.php" method="get">
                    <input type="hidden" name="relats" id="relats" />
                    <div id="deleteBodyRelat" class="modal-body">
                        <p id="deleteMessageRelat"></p>
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                        <button type="button" class="btn btn-primary" id="btnDeleteRelat">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!---->