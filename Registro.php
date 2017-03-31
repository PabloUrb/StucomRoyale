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
        <title>Registrate</title>
    </head>
    <body>
        <div>
    <from action="" method="POST">
        <p>Usuario: <input type="text" name="user"></p>
        <p>Contraseña: <input type="password" name="password"></p>
        <input type="submit" name="login" value="Login">
    </from>
    <?php
    require_once 'bbdduser.php';
    if (isset($_POST["login"])) {
        $username = $_POST["user"];
        $password = $_POST["password"];
        if (verificarUser($username, $password)) {
            session_start();
            $_SESSION["user"] = $username;
            $tipo = getTipoUsuario($username);
            $_SESSION["type"] = $tipo;
            if ($tipo = "usuario") {
                header("Location: UserHome.php");
            } else if ($tipo = "admin") {
                header("Location: AdminHome.php");
            } else {
                echo "tipo de usuario incorrecto";
            }
        }else {
            echo "Nombre de usuario o contraseña incorrectos";
            }
    }
    ?></div>
</body>
</html>
