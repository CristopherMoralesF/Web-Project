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
            <br>
            <div class="row">

                <div class="col-3" style = 'margin-top: auto; margin-bottom: auto; padding-top: 8px'>

                    <div class="container-fluid" style="background-color: #ececec; border-radius: 25px; height: 800px;  text-align: center;">

                        <h2 style='padding: 15px'>User Details</h2>
                        
                        <picture>
                            <source srcset="../componentes/img/sample_profile.jpg" type="image/svg+xml">
                            <img src="../componentes/img/sample_profile.jpg" class="img-circle" alt="profile" style = "height: 150px; width: 150px; border-radius: 50%">
                        </picture>
                    
                        <p style = 'padding: 25px'>
                            Nombre de Usario: <br><br>
                            Tipo de Accesso: <br>
                        </p>

                        <button class='btn btn-primary' type="button" style = 'margin: 75px'>User Configuration</button>
                    </div>
                
                </div>

                <div class="col-9">

                    <div class="row">

                        <div class="col-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Inicio</div>
                                <div class="card-body">
                                    <p class="card-text">Nombre usuario es parte de la comunidad desde 01/01/2022</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Role</div>
                                <div class="card-body">
                                    <p class="card-text">Se ha asignado un role de moderador</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Cantidad Mensajes</div>
                                <div class="card-body">
                                    <p class="card-text">El usuario ha posteado un total de cantidadMensajes</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    
                    <div class="row" style="width: 100%; height: 600px"></>
                        <canvas id="myChart" canvas>
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