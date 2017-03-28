<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrate</title>
    </head>
    <body>
    <from action="" method="POST">
        <p>Usuario: <input type="text" name="user"></p>
        <p>Contraseña: <input type="password" name="password"></p>
        <input type="submit" name="login" value="Login">
    </from>
    <?php
    require_once 'bbdduser.php';
    
    ?>
    </body>
</html>
