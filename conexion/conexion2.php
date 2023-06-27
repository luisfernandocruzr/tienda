<?php
    $servidor = "localhost";
    $usuarioBD = "root";
    $password = "Luisfer25#";
    $baseDaotos = "tienda2";

   $conexion2 = mysqli_connect($servidor,$usuarioBD,$password,$baseDaotos);

    if(!$conexion2 == true){
        echo "Error al conectar al servidor :(";
    }

?>
