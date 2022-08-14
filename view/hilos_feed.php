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
    <link href="../css/hilos_feed.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>

        <div class="container-fluid">

            <div class="container mt-4 mb-5">
                <div class="d-flex justify-content-center row">

                    <div class="col-md-8">

                        <div class="feed p-2">

                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white border">
                                <div class="feed-text px-2">
                                    <form action="">
                                       
                                        <textarea name="newComment" id="newComment" cols="80" rows="3" 
                                        placeholder = 'What are you thinking?' class = 'form-control'></textarea>

                                    </form>
                                </div>
                                <div class="feed-icon px-2"><button class='btn btn-primary' id='btnGuardarComentario'
                                        name='btnGuardarComentario'><i
                                            class="fa fa-space-shuttle text-white-50"></button></i></div>
                            </div>

                            <div class="bg-white border mt-2">
                                <div>
                                    <div
                                        class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                                        <div class="d-flex flex-row align-items-center feed-text px-2"><img
                                                class="rounded-circle" src="https://i.imgur.com/aoKusnD.jpg" width="45">
                                            <div class="d-flex flex-column flex-wrap ml-2"><span
                                                    class="font-weight-bold">Thomson ben</span><span
                                                    class="text-black-50 time">40 minutes ago</span></div>
                                        </div>
                                        <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                                    </div>
                                </div>
                                <div class="p-2 px-3"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</span></div>
                                <div class="d-flex justify-content-end socials p-2 py-3"><i
                                        class="fa fa-thumbs-up"></i><i class="fa fa-comments-o"></i><i
                                        class="fa fa-share"></i></div>
                            </div>
                            <div class="bg-white border mt-2">
                                <div>
                                    <div
                                        class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                                        <div class="d-flex flex-row align-items-center feed-text px-2"><img
                                                class="rounded-circle" src="https://i.imgur.com/aoKusnD.jpg" width="45">
                                            <div class="d-flex flex-column flex-wrap ml-2"><span
                                                    class="font-weight-bold">Thomson ben</span><span
                                                    class="text-black-50 time">40 minutes ago</span></div>
                                        </div>
                                        <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                                    </div>
                                </div>
                                <div class="feed-image p-2 px-3"><img class="img-fluid img-responsive"
                                        src="https://i.imgur.com/aoKusnD.jpg"></div>
                                <div class="d-flex justify-content-end socials p-2 py-3"><i
                                        class="fa fa-thumbs-up"></i><i class="fa fa-comments-o"></i><i
                                        class="fa fa-share"></i></div>
                            </div>
                        </div>
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