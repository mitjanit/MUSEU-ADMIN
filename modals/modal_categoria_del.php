<!-- dialeg modal DELETE -->
    <!---->
    <div class="modal fade" id="myDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content deleteModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Elimina Categoria</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form role="form" name="modalFormDelete" id="modalFormDelete" action="db/deleteCategoria.php" method="get">
                        <div id="deleteBody" class="modal-body">
                            <p id="deleteMessage"></p>
                        </div>
                
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
                            <button type="button" class="btn btn-primary" id="btnDelete">Eliminar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<!---->