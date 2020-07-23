<?php
include('consultas.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if(empty($user) || empty($pass)){
    echo "campos vacios";
    http_response_code(400);
}else{
    if(login($user,$pass)){
        var_dump($datos);
    }
}
?>