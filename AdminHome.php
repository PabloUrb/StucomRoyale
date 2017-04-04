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
        <?php
        session_start();
        if (isset($_SESSION["user"])){
        if (isset($_SESSION["user"])){
            $username=$_SESSION["user"];
            echo "<h2> hola $username </h2>";
            ?>
        <p><a href="NewUserAdmin.php">Alta de usuarios</a></p>
        <p><a href="NewGenre.php">Alta de generos</a></p>
        <?php
        }else{
            echo "No eres administrador.";
        }
        }else{
            echo "No estas eutentificado.";
        }
        
        ?>
    </body>
</html>
