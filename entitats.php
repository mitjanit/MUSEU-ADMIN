<?php include("common/mysessions.php"); ?>
<?php include("common/head.php") ?>
<?php require_once('connexions/connexio01.php'); ?>

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
          <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-th-large"></i> Entitats</h1>
          <p class="mb-4">Gestió de les dades de la taula d'entitats.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-table"></i> Informació de la taula Entitats.</h6>

            </div>
            <div class="card-body">
              <div class="row" id="zona-botons">
                  <div class=" col-md-6">
                    <?php if($_SESSION['role']=="A" || $_SESSION['role']=="E") { ?>
                      <div class="btn-group"  role="group">
                          <button type="button" class="btn btn-primary btn-new" data-toggle="modal" data-target="#myNewModal"><i class="fas fa-plus-circle"></i> Alta</button>
                          <button type="button" class="btn btn-primary btn-edit" data-toggle="modal" data-target="#editaModal"><i class="fa fa-edit"></i> Edita</button>
                          <button type="button" class="btn btn-primary btn-delete" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-minus-circle"></i> Elimina</button>
                          <button type="button" class="btn btn-primary btn-histo"><i class="fas fa-info-circle"></i> Detalls</button>
                      </div>
                    <?php } ?>
                  </div>
                  <div class="col-md-6"></div>
              </div>

              <p></p>
              <div class="table-responsive overflow-hidden">
                <table class="table table-bordered" id="dt" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Registre</th>
                      <th>Nom Esportiu</th>
                      <th>Nom</th>
                      <th>Localitat</th>
                      <th>Provincia</th>
                      <th>Pais</th>
                      <th>Any Inici</th>
                      <th>Detalls</th>
                      <th class="none">Escut</th>
                      <th class="none">Himne</th>
                      <th class="none">CD/DVD</th>
                      <th class="none">Insignia</th>
                      <th class="none">Camiseta</th>
                      <th class="none">Bufanda</th>
                      <th class="none">Bandera</th>
                      <th class="none">Altre</th>
                      <th class="none">Detalls 2</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                        $query_rsGrups = "SELECT * FROM clubs ORDER BY nom";
                        $rs = mysqli_query($con01, $query_rsGrups) or die("Error: ".mysqli_error($con01));
                        while ($row = mysqli_fetch_array($rs)){
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo ($row['nom_esportiu']); ?></td>
                            <td><?php echo ($row['nom']); ?></td>
                            <td><?php 

                                if($row['poblacions_id']!=NULL){
                                    $query_pob = "SELECT * FROM poblacions WHERE id='".$row['poblacions_id']."'";
                                    $rsp = mysqli_query($con01, $query_pob) or die("Error: ".mysqli_error($con01));
                                    $rowp = mysqli_fetch_array($rsp);
                                    echo $rowp['nom'];
                                }
                                 ?></td>
                            <td><?php if($row['provincia_id']!=NULL){
                                    $query_prov = "SELECT * FROM provincies WHERE id='".$row['provincia_id']."'";
                                    $rsprov = mysqli_query($con01, $query_prov) or die("Error: ".mysqli_error($con01));
                                    $rowprov = mysqli_fetch_array($rsprov);
                                    echo ($rowprov['nom']);
                                } 
                            ?></td>
                            <td>
                                <?php 
                                echo $row['paisos_id'];
                                $query_pais = "SELECT * FROM paisos WHERE id='".$row['pais_id']."'";
                                $rspais = mysqli_query($con01, $query_pais) or die("Error: ".mysqli_error($con01));
                                $rowpais = mysqli_fetch_array($rspais);
                                echo ($rowpais['nom']); 
                            ?>
                            </td>
                            <td><?php echo ($row['inici']); ?></td>
                            <td><?php echo ($row['inici_detall']); ?></td>
                            <td><?php echo $row['escut']; ?></td>
                            <td><?php echo $row['himne']; ?></td>
                            <td><?php echo $row['cd']; ?></td>
                            <td><?php echo $row['insignia']; ?></td>
                            <td><?php echo $row['camiseta']; ?></td>
                            <td><?php echo $row['bufanda']; ?></td>
                            <td><?php echo $row['bandera']; ?></td>
                            <td><?php echo ($row['altre']); ?></td>
                            <td><?php echo ($row['detalls2']); ?></td>
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

  <?php include 'modals/modal_ok.php'; ?>

  <?php include 'modals/modal_entitat_new.php'; ?>
  <?php include 'modals/modal_entitat_edit.php'; ?>
  <?php include 'modals/modal_entitat_del.php'; ?>

    <!-- dialeg modal HISTO -->
    <div class="modal fade" id="myHistoModal" tabindex="-1" role="dialog" aria-labelledby="myHistoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content histoModal">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Detalls Entitat</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div id="histoBody" class="modal-body">
                        <p id="editMessageHisto"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tancar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fi del dialeg modal HISTO -->


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

        // Edita persona

        $('#pais').change(function() {
          var pais = $("#pais option:selected").text();
          if(pais!="España"){
            $('#provincia option').filter(function(){
                return $(this).text()=="No Aplicable";
            }).prop('selected', true);
            $("#poblacio").empty();
            loadLocalitats(55, "#poblacio"); // Mostrar localitats extrangeres
          }
          else {
            $('#poblacio option').filter(function(){
                return $(this).val()=="";
            }).prop('selected', true);
          }

        });

        $('#provincia').change(function() {
          var provincia = $("#provincia option:selected").text();
          var idProvincia = $("#provincia option:selected").val();
          $("#poblacio").empty();
          if(provincia!=""){
            loadLocalitats(idProvincia, "#poblacio");
          }

        });

        // Editar entitat

        $(".btn-edit").click(function() {

                var esEditable = false;

                var table = $('#dt').DataTable();
                var data=table.rows( { selected: true }).data();

                var numSelected = table.rows( { selected: true }).count();
                if(numSelected==0) {
                    var txt = $('<b>ERROR: No has seleccionat cap entitat per editar.</b>');
                    $('#editMessage').html(txt);
                    //$('#e1').attr
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

                    // Pais select
                    $('#e3pais option').filter(function(){
                        return $(this).text()==data[0][5];
                    }).prop('selected', true);

                    // Provincia select
                    $('#e4 option').filter(function(){
                        return $(this).text()==data[0][4];
                    }).prop('selected', true);

                    // Localitat select
                    $('#e5 option').filter(function(){
                        return $(this).text()==data[0][3];
                    }).prop('selected', true);
                    
                    $('#e6').attr("value", data[0][6]);
                    $('#e7').attr("value", data[0][7]);
                    $('#e8').attr("value", data[0][8]);
                    $('#e9').attr("value", data[0][9]);
                    $('#e10').attr("value", data[0][10]);
                    $('#e11').attr("value", data[0][11]);
                    $('#e12').attr("value", data[0][12]);
                    $('#e13').attr("value", data[0][13]);
                    $('#e14').attr("value", data[0][14]);
                    $('#e15').attr("value", data[0][15]);
                    $('#e16').attr("value", data[0][16]);

                }


        });

        $('#btnEdit').click(function() {
            $('form[name="modalFormEdit"]').validator();
            $('form[name="modalFormEdit"]').submit();
        });

        $('#e3pais').change(function() {
          var pais = $("#e3pais option:selected").text();
          if(pais!="España"){
            $('#e4 option').filter(function(){
                return $(this).text()=="No Aplicable";
            }).prop('selected', true);
            $("#e5").empty();
            loadLocalitats(55, "#e5"); // Mostrar localitats extrangeres (idProv=) // Estranger
          }
          else {
            $('#e4 option').filter(function(){
                return $(this).val()=="";
            }).prop('selected', true);
          }

        });

        function loadLocalitats(idProv, selectID) {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              var localitats = JSON.parse(this.responseText);
              var item0 = $("<option/>", {value:"0", text:"Selecciona"});
              $(selectID).append(item0);
              for (l in localitats) {
                var id = localitats[l].id;
                var nom = localitats[l].nom;
                var id_prov = localitats[l].provincies_id;
                if(id_prov==idProv){
                  var item = $("<option/>", {value:id, text:nom});
                  $(selectID).append(item);
                }
              }
            }
          };
          xhttp.open("GET", "http://34.90.92.235/api/poblacions", true);
          xhttp.send();
        }

        $('#e4').change(function() {
          var provincia = $("#e4 option:selected").text();
          var idProvincia = $("#e4 option:selected").val();
          $("#e5").empty();
          if(provincia!=""){
            loadLocalitats(idProvincia, "#e5");
          }

        });


        /*** delete ****/

            $(".btn[data-target='#deleteModal']").click(function() {

                var table = $('#dt').DataTable();
                var data=table.rows( { selected: true }).data();

                var numSelected = table.rows( { selected: true }).count();
                var txt;
                if(numSelected==0) {
                  txt = $('<b>ERROR: No has seleccionat cap entitat per eliminar.</b>');}
                else { 
                  txt = $("<p><b>Vols esborrar les dades de l'entitat?</b></br/> "+
                          "<p><b>Entitat:</b> "+data[0][2]+" - "+data[0][1]+".</p>"+
                          "<p><b>Població:</b> "+data[0][3]+".</p>"+
                          "<p><b>Any:</b> "+ data[0][6]+".</p>");
                  $('#deleteBody').append('<input type="hidden" name="id" id="id" value="'+data[0][0]+'" />');
                }

                $('#deleteMessage').html(txt);

                
            });

            $('#btnDelete').click(function() {
                $('form[name="modalFormDelete"]').submit();
            });



        // Click botó obrir detalls de l'entitat

        $(".btn-histo").click(function() {

            var table = $('#dt').DataTable();
            var data=table.rows( { selected: true }).data();
            var numSelected = table.rows( { selected: true }).count();

            if(numSelected==0) {
                var txt = $('<b><i class="fas fa-exclamation-circle"></i> ERROR: No has seleccionat cap entitat per veure.</b>');
                $('#editMessageHisto').html(txt);
                $('#myHistoModal').modal();
            }
            else {
                var identitat=data[0][0];
                location.href = 'entitat.php?id='+identitat;
            }

        });

        $('#btnHisto').click(function() {
            $('form[name="modalFormHisto"]').submit();
        });


        $('input[maxlength]').maxlength({
          alwaysShow: false, 
          warningClass: "form-text text-muted mt-1", 
          limitReachedClass: "form-text text-muted mt-1", 
          showMaxLength: true, 
          showCharsTyped: true, 
          placement: 'bottom-right-inside', 
        });


        // reset dels camps de formulari en tancar un modal
        $('.modal').on('hidden.bs.modal', function () {
          $(this).find('form').trigger('reset');
        });


        <?php 

          if(isset($_REQUEST['msgOk'])){
            echo "$('#myOkModal').modal();";
          }
        ?>


    });

   </script>

</body>

</html>
