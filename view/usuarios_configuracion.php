<?php 
  include 'componentes.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Bootstrap Template</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<style>
    .btnSize {
        width:  250px; 
        height: 50px; 
    }
    .divSize {
        height: 250px;
    }
</style>

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>

        <div class="container-fluid">
            <br>
            <div class="row">

                <div class="col-3" style='margin-top: auto; margin-bottom: auto; padding-top: 8px'>

                    <div class="container-fluid"
                        style="background-color: #ececec; border-radius: 25px; height: 800px;  text-align: center;">

                        <h2 style='padding: 15px'>Perfil</h2>

                        <picture>
                            <source srcset="../componentes/img/sample_profile.jpg" type="image/svg+xml">
                            <img src="../componentes/img/sample_profile.jpg" class="img-circle" alt="profile"
                                style="height: 150px; width: 150px; border-radius: 50%">
                        </picture>

                        <p style='padding: 25px'>
                            Nombre de Usuario: <br><br>
                            Tipo de Accesso: <br>
                        </p>

                        <a href="../view/main.php" class="btn btn-secondary">Perfil</a>

                    </div>

                </div>

                <div class="col-9">

                <div class = "container d-flex align-items-center justify-content-center" style = 'margin-top: 75px'>

                    <form action="">
                        <div class="form-group">
                            <label for="nombreUsuario">Nombre Usuario</label>
                            <input type="text" class="form-control" id="nombreUsuario" aria-describedby="nombreUsuario"
                                placeholder="Introduzca su nombre">
                        </div>

                        <div class="form-group">
                            <label for="nombreUsuario">Correo Electronico</label>
                            <input type="email" class="form-control" id="nombreUsuario" aria-describedby="nombreUsuario"
                                placeholder="Introduzca su correo">
                        </div>

                        <div class="form-group">
                            <label for="passwordUsuario">Contrase??a</label>
                            <input type="password" class="form-control" id="nombreUsuario"
                                aria-describedby="nombreUsuario" placeholder="Introduzca su contrase??a">
                        </div>

                        <div class="form-group">
                            <label for="passwordUsuario">Confirme su contrase??a</label>
                            <input type="password" class="form-control" id="nombreUsuario"
                                aria-describedby="nombreUsuario" placeholder="Introduzca su contrase??a">
                        </div>

                        <button type="button" class="btn btn-outline-info btnSize">Guardar Cambios</button>
                        <button type="button" class="btn btn-outline-info btnSize">Eliminar Cuenta</button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>
    <script src="..\vendor\chartJS\charts.js"></script>
    <script src="..\js\charts.js"></script>

</body>

</html>