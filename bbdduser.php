<?php

require_once 'bbdd.php';

function verificarUser($username, $password){
    $con = conectar("royal");
    $query = "select * from user where username = '$username'
        and password = '$password'";
    $resultado = mysqli_query($con, $query);
    $filas = mysqli_num_rows($resultado);
    desconectar($con);
    if($filas > 0){
        return true;
    }else{
        return false;
    }
}
function getTipoUsuario($username) {
    $con = conectar("daw_steam");
    $query = "select type from user where username='$username'";
    $resultado = mysqli_query($con, $query);
    // Extraemos el tipo para devolver ya el string con el tipo de user
    $fila = mysqli_fetch_array($resultado);
    extract($fila);
    desconectar($con);
    return $type;
}
    
