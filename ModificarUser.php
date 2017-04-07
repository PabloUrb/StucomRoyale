<!DOCTYPE html>
<!--  Formulario para modificar perfil del usuario -->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="algo.css" rel="stylesheet" type="text/css"/>
        <title>Modificar perfil</title>
    </head>
    <body>
        <div>
            <?php
            session_start();
            require_once 'bbdduser.php';
            if (isset($_SESSION["user"])) {
                $username = $_SESSION["user"];
                if (isset($_POST["modificar"])) {
                    $pass = $_POST["pass"];
                    updateUser($username, $pass);
                } else {
                    // Traemos los datos actuales del usuario
                    $datos = getUser($username);
                    $fila = mysqli_fetch_array($datos);
                    extract($fila);
                    echo "<form action='' method='POST'>";
                    echo "<p>Perfil de $username</p>";
                    echo "<p>Password: <input type='password' name='pass' value='$password'></p>";
                    echo "<p><input type='submit' name='modificar' value='Modificar'></p>";
                    echo "</form>";
                }
            } else {
                echo "Usuario no autentificado";
                echo "<a href='index.php'>menu principal</a>";
            }
            ?>
            
            
        </div>
    </body>
</html>
