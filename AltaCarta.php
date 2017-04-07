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
        <title></title>
    </head>
    <body>
        <div>
            <h1>Crea una carta!!</h1>
            <form action="" method="POST">
                <p>Nombre de la carta: <input type="text" name="name"></p>
                <p>Tipo: <input type="text" name="type"></p>
                <p>Rareza: <input type="number" name="rarity"></p>
                <p>Hitpoints: <input type="number" name="hitpoints"></p>
                <p>Daño: <input type="number" name="damage"></p>
                <p>Coste: <input type="number" name="cost"></p>
                <input type="submit" value="Crear" name="alta">
            </form>
            <?php
            require_once 'bbdduser.php';
            // Si han pulsado el botón registramos el usuario
            if (isset($_POST["alta"])) {
                // Recogemos el nombre de usuario
                $carta = $_POST["name"];
                // Comprobamos si ya existe
                if (existeCarta($carta) == true) {
                    echo "<p>Ya existe esa carta</p>";
                } else {
                    // Recogemos el resto de datos
                    $pass = $_POST["pass"];
                    $pass2 = $_POST["pass2"];
                    if ($pass == $pass2) {
                        // Registramos el usuario en la bbdd
                        insertUser($nusuario, $pass, $pass2, "usuario");
                    } else {
                        echo "<p>Las contraseñas no coinciden</p>";
                    }
                }
            }
            ?>
            <p><a href="index.php">Inicio</a></p>
        </div>
    </body>
</html>
