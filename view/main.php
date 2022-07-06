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

    <div class="d-flex" id="wrapper" >

        <?php MostrarMenu();?>
        <?php MostrarNav();?>

        <div class="container-fluid">
        <br>
            <div class="row">

                <div class="col-3">
                    <div class="container-fluid" style = "background-color: #DCDCDC">
                        <h2>User Details</h2>
                    </div>
                </div>

                <div class="col-9">

                    <div class="row">
  
                          <div class="col-4">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Inicio</div>
                                <div class="card-body">
                                    <p class="card-text">Nombre usuario es parte de la comunidad desde 01/01/2022</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Role</div>
                                <div class="card-body">
                                    <p class="card-text">Se ha asignado un role de moderador</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Cantidad Mensajes</div>
                                <div class="card-body">
                                    <p class="card-text">El usuario ha posteado un total de cantidadMensajes</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row" style = "height: 150px">
                      <canvas id="myChart" style = "height: 150px"></canvas>
                    </div>

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