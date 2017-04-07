<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="algo.css" rel="stylesheet" type="text/css"/>
        <title>TU Perfil</title>
    </head>
    <body>
        <div>
            <?php
            session_start();
        if(isset($_SESSION["user"])){
            $username = $_SESSION["user"];
            echo "<h2> Hola $username!!</h2>";
// Necesitamos incluir el fichero para poder llamar las funciones de bbdd
            require_once 'bbdduser.php';

// Llamamos a la función y recogemos el resultado
            $matriz = selectAllInfo($username);

// Mostramos el resultado por pantalla
            echo "<h1>Tu perfil</h1>";
// Mientras haya filas en el resultado
            echo '<table>';
            echo "<tr><td>Nombre</td><td>Contraseña</td><td> Tipo</td><td> Victorias</td><td> Nivel</td>";
            while ($fila = mysqli_fetch_array($matriz)) {
                extract($fila);
                echo "<tr><td>$username</td><td> $password</td><td> $type</td><td> $wins</td><td> $level</td></tr><br><br>";
        }echo '</table>';}
        else{
            echo "No estas autentificado.";
        }
            ?>
        </div>
    </body>
</html>
