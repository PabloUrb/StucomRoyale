<?php

require_once 'bbdd.php';

function verificarUser($username, $password) {
    $con = conectar("royal");
    $query = "select * from user where username='$username' 
            and password='$password'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if ($filas > 0) {
        return true;
    } else {    // Este else no hace falta
        return false;
    }
}
function getTipoUsuario($username) {
    $con = conectar("royal");
    $query = "select type from user where username='$username'";
    $resultado = mysqli_query($con, $query);
    // Extraemos el tipo para devolver ya el string con el tipo de user
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $type;
}
function getUser($username) {
    $con = conectar("royal");
    $query = "select * from user where username='$username'";
    $resultado = mysqli_query($con, $query);
    desconectar($con);
    return $resultado;
}

function updateUser($username, $pass) {
    $con = conectar("royal");
    $update = "update user set password='$pass' where username='$username'";
    if (mysqli_query($con, $update)) {
        echo "<p>Datos del perfil modificiados</p>";
        echo "<a href='index.php'>menu principal</a>";
    } else {
        echo mysqli_error($con);
    }
    desconectar($con);
}

function existeUsuario($nombre_usuario) {
    $conexion = conectar("royal");
    $consulta = "select * from user where username='$nombre_usuario';";
    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
    $contador = mysqli_num_rows($resultado);
    desconectar($conexion);
    // Si devuelve 1 es que ya existe un usuario con ese nombre de usuario
    // Si devuelve 0 no existe
    if ($contador == 0) {
        return false;
    } else {
        return true;
    }
    
}  
function insertUser($nusuario, $pass, $pass2, $tipo) {
    $conexion = conectar("royal");
    $insert = "insert into user values "
            . "('$nusuario', '$pass', '0', '0','1')";
    if (mysqli_query($conexion, $insert)) {
        echo "<p>Usuario dado de alta</p>";
    } else {
        echo mysqli_error($conexion);
    }
    desconectar($conexion);
}
function selectAllInfo($username) {
    // Primero conectamos con la BBDD
    $con = conectar("royal");
    // Definimos la consulta
    $query = "select * from user where username='$username'";
    // Ejecutamos la consulta, recogiendo el resultado
    $resultado = mysqli_query($con, $query);
    // desconectamos de la bbdd
    desconectar($con);
    // Devolvemos el resultado de la consulta
    return $resultado;
}
function existeCarta($carta) {
    $conexion = conectar("royal");
    $consulta = "select * from user where username='$nombre_usuario';";
    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Contamos cuantas filas tiene el resultado
    $contador = mysqli_num_rows($resultado);
    desconectar($conexion);
    // Si devuelve 1 es que ya existe un usuario con ese nombre de usuario
    // Si devuelve 0 no existe
    if ($contador == 0) {
        return false;
    } else {
        return true;
    }
    
}
