<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
    <link rel="shortcut icon" href="KyuubinetSolo.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <title>Kyuubinet | Ingresar</title>
</head>

<body class="inicioSesion">
<header>
    <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" >
    <img src="KyuubinetSoloDos.png" width="170" height="30"  alt="Kyuubinet" >
    <img src="KyuubinetSolo.png" width="40" height="30"  alt="Kyuubinet" class="girar">
  </a>
</nav>
    </header>
    <div id="login">
    <div class="container ">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6 ">
                 <div id="login-box" class="col-md-12 bg-light text-dark">
                    <form id="formLogin" class="form " action="" method="POST"> <!--FORMULARIO-->
                        <h3 class="text-center text-dark">Iniciar sesión</h3>
                        <div class="form-group">
                            <label for="usuario" class="text-dark">Usuario</label> <!--USUARIO-->
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario"> 
                        </div>
                        <div class="form-group">
                            <label for="contraseña" class="text-dark">Contraseña</label>  <!--CONTRASEÑA-->
                            <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña">
                        </div>

                        <div class="form-gropu text-center">
                            <input type="submit" name="submit" class="btn btn-outline-dark btn-lg btn-block" value="iniciar">
                        </div>
                        <br>
                        <div id="UserContra" class="form-gropu text-center"> 
                            <a href>Recordar usuario y/o contraseña</a>
                        </div>
                        <hr>
                        <div id="UserContra" class="form-gropu text-center"> 
                        <br>
                        <em id="copyright"><p>&copy; 2020 gybrangaray@gmail.com<p></em>
                        </div>
                    </form>
                  
                </div> 

            </div>
        </div>
    </div>
    </div>




    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="popper/popper.min.js"></script>

    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script> <!--jquery ajax-->
</body>
</html>