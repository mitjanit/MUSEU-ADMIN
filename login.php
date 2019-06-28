<?php //include("common/mysessions.php"); ?>
<?php include("common/head.php") ?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <i class="fa fa-futbol fa-8x"></i>
                    <p></p>
                    <h1 class="h4 text-gray-900 mb-4">Museu del Futbol Menorquí</h1>
                  </div>
                  <!-- error de login -->
                  <?php if(isset($_REQUEST['errorLog'])) { 
                            if($_REQUEST['errorLog']==1){
                                $msg = "Usuari i/o contrasenya incorrectes.";
                            }
                            else if($_REQUEST['errorLog']==2){
                                $msg = "Usuari sense accés a l'aplicació.";
                            }
                            ?>
                            <p id="messageLogin"><i class="fa fa-warning"></i><b> <?php echo $msg; ?></b></p>
                  <?php } ?>
                  <!-- fi error de login -->
                  <form class="user" action="login2.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="user" name="user" aria-describedby="userName" placeholder="User name">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recorda'm</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Entrar
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php include("common/end.php") ?>

</body>

</html>
