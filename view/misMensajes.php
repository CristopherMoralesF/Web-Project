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

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>

        <div class="container-fluid">

            <h2 class="text-secondary" style="padding: 15px"> Mis Mensajes </h2>

            <table class="table">

                <tr>
                    <td style = "width: 300px">
                        <div class="alert alert-primary" style = "width: 300px" role="alert">
                            Nombre del hilo
                        </div>
                    </td>
                    <td>
                        <div class="alert alert-info" role="alert">
                            mensaje
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style = "width: 300px">
                        <div class="alert alert-primary" style = "width: 300px" role="alert">
                            Nombre del hilo
                        </div>
                    </td>
                    <td>
                        <div class="alert alert-info" role="alert">
                            mensaje
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style = "width: 300px">
                        <div class="alert alert-primary" style = "width: 300px" role="alert">
                            Nombre del hilo
                        </div>
                    </td>
                    <td>
                        <div class="alert alert-info" role="alert">
                            mensaje
                        </div>
                    </td>
                </tr>
                
            </table>

        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>
    <script src="..\vendor\chartJS\charts.js"></script>
    <script src="..\js\charts.js"></script>

</body>

</html>