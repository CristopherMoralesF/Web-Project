<?php

    include 'conexion.php'

    //función para traer la información de todos los usuarios
    function consultarUsurios(){

        try {
            
            $instancia = AbrirDB(); 
            $procedimiento = 'CALL VALIDATE_USUARIO;';
            $listaUsuarios = $instancia -> query($procedimiento);
            CerrarDB($instancia);

            return $listaUsuarios

        } catch (Exception $ex) {

            echo 'Se genero un error al conectar con la base de datos'
        }

    }
    
?>