<?php

    function MostrarMenu(){

    echo '
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Start </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-light">Productos</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Ventas</a>
                </div>
        </div>
    ';

    }    
?>

<?php

    function MostrarNav(){
        echo '
        <div id="page-content-wrapper">
    
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-info" id="menu-toggle">Menu</button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
            </div>
          </nav>
        ';
    }

?>