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
    
