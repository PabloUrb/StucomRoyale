
<?php

function conectar($database) {
    $con = mysqli_connect("localhost", "root", "root", $database)
            or die("no se ha podido conectar a la BBDD");
    return $con;
}

function desconectar(){
    mysqli_close($conexion);
}

?>