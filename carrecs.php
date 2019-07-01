<?php include("common/mysessions.php"); ?>
<?php include("common/head.php") ?>
<?php require_once('connexions/connexio01.php'); ?>

<?php

$nomTaula = "Càrrecs";

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("common/navigation.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("common/notifications.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-th-large"></i> <?php echo $nomTaula; ?></h1>
          <p class="mb-4">Gestió de les dades de la taula de <?php echo $nomTaula; ?>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Informació de la taula <?php echo $nomTaula; ?>.</h6>

            </div>
            <div class="card-body">
              <div class="row" id="zona-botons">
                  <div class=" col-md-6">
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModal"><i class="fas fa-plus-circle"></i> Alta</button>
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#myEditModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#myDeleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                      </div>
                  </div>
                  <div class="col-md-6"></div>
              </div>

              <p></p>
              <div class="table-responsive overflow-hidden">
                <table class="table table-bordered" id="dt" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Descripció</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                        $query_rsGrups = "SELECT * FROM carrecs ORDER BY nom ASC";
                        $rs = mysqli_query($con01, $query_rsGrups) or die("Error: ".mysqli_error($con01));
                        while ($row = mysqli_fetch_array($rs)){
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo utf8_encode($row['nom']); ?></td>
                            <td><?php echo utf8_encode($row['descripcio']); ?></td>
                        </tr>
                        <?php 
                            } 
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include("common/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- MODALS -->

  <!-- modal de log out -->
  <?php include 'common/modalout.php'; ?>

  <?php include 'modals/modal_carrec_new.php'; ?>
  <?php include 'modals/modal_carrec_edit.php'; ?>
  <?php include 'modals/modal_carrec_del.php'; ?>

  <?php include("common/end.php") ?>


  <script>


    $(document).ready(function() {

  
        var table= $('#dt').DataTable({
            responsive: true,
            select: true,
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fas fa-clone"></i> Copiar',
                    titleAttr: 'Copia'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'PDF'
                }
            ],
            language: {
              "lengthMenu": "Mostrar _MENU_ files per pàgina",
              "zeroRecords": "No s'han trobat dades",
              "info": "Mostrant pàgina _PAGE_ de _PAGES_",
              "infoEmpty": "Sense files disponibles",
              "infoFiltered": "(filtrats de _MAX_ de files)",
              "search": "Cercar",
              "sInfoPostFix":  "",
              "sSearch":       "Filtrar:",
              "sUrl": "",
              "oPaginate": {
                  "sFirst":    "Primer",
                  "sPrevious": "Anterior",
                  "sNext":     "Següent",
                  "sLast":     "Darrer"
              },
              "buttons": {
                              "copyTitle": '<i class="fas fa-clone"></i> Copiar Dades',
                              "copyKeys": 'Premeu <i>ctrl</i> o <i>\u2318</i> + <i>C</i> per copiar les dades de la taula al vostre porta-retalls. <br><br>Per cancel·lar, feu clic en aquest missatge o premeu Esc.',
                              "copySuccess": {
                                  _: '%d linies copiades',
                                  1: '1 linia copiada'
                              }
                          }
            }
        });

        table.buttons().container().appendTo( '#zona-botons .col-md-6:eq(1)' );

        // reset dels camps de formulari en tancar un modal
        $('.modal').on('hidden.bs.modal', function () {
          $(this).find('form').trigger('reset');
        });


        // Editar Tipus Activitat

        $(".btn-edit").click(function() {

                var esEditable = false;

                var table = $('#dt').DataTable();
                var data=table.rows( { selected: true }).data();

                var numSelected = table.rows( { selected: true }).count();
                if(numSelected==0) {
                    var txt = $('<b>ERROR: No has seleccionat cap càrrec per editar.</b>');
                    $('#editMessage').html(txt);
                }
                else {
                    var txt = $('<b></b>');
                    esEditable = true;
                    $('#editMessage').html(txt);
                }

                if(esEditable){

                    $('#e0').attr("value", data[0][0]);
                    $('#e1').attr("value", data[0][1]);
                    $('#e2').attr("value", data[0][2]);
                }


        });

        $('#btnEdit').click(function() {
            $('form[name="modalFormEdit"]').validator();
            $('form[name="modalFormEdit"]').submit();
        });


        // Eliminar Tipus Activitat

        $(".btn[data-target='#myDeleteModal']").click(function() {

                var table = $('#dt').DataTable();
                var data=table.rows( { selected: true }).data();

                var numSelected = table.rows( { selected: true }).count();
                var txt;
                if(numSelected==0) {
                  txt = $('<b>ERROR: No has seleccionat cap càrrec per eliminar.</b>');}
                else { 
                  txt = $("<p><b>Vols esborrar les dades del càrrec?</b></br/> "+
                          data[0][1]+".</p>");
                  $('#deleteBody').append('<input type="hidden" name="id" id="id" value="'+data[0][0]+'" />');
                }

              $('#deleteMessage').html(txt);

                
          });

          $('#btnDelete').click(function() {
            $('form[name="modalFormDelete"]').submit();
          });


    });

   </script>

</body>

</html>
