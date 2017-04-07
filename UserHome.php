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
        <?php
        session_start();
        if(isset($_SESSION["user"])){
            $username = $_SESSION["user"];
            echo "<h2> Hola $username!!</h2>";
            ?>
        <p><a href="ModificarUser.php">Modificar contraseña</a></p>
        <p><a href="VerPerfil.php">Ver perfil</a></p>
        <p><a href="ModificarUser.php">Batalla</a></p>
        <?php
        }else{
            echo "No estas autentificado.";
        }
        ?>
        </div>
    </body>
</html>
