<?php
    require_once("consultas.php");
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apellidoPaterno'];
    $apMaterno = $_POST['apellidoMaterno'];
    $email = $_POST['correoElectronico'];
    $pass = $_POST['pass'];

    if(empty($nombre) or empty($apPaterno) or empty($apMaterno) or empty($email) or empty($pass)){
        echo 'campos vacios';
        http_response_code(400);
    }else{        
        if(registarUsuario($nombre,$apPaterno,$apMaterno,$email,$pass)){
             echo 'Bienvenido a tu biblioteca';
        }else{
            echo 'ocurrio un error, intentalo mas tarde';
        }
    }
    

?>