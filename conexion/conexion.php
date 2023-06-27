<?php
    $servidor = "localhost";
    $usuarioBD = "root";
    $password = "Luisfer25#";
    $baseDaotos = "tienda1";

   $conexion = mysqli_connect($servidor,$usuarioBD,$password,$baseDaotos);

    if(!$conexion == true){
        echo "Error al conectar al servidor :(";
    }

?>
