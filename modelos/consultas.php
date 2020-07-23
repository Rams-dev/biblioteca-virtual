<?php
include("../conexion.php");
// session_start();

function libros(){
$conexion = conexion();
    $sql = "SELECT * FROM libros order by vistas desc";
    $result = mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $result;
}

function librosMasVistos(){
    $conexion = conexion();
    $sql = "SELECT * FROM libros order by vistas desc";
    $result = mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $result;

}

function login($user,$password){
    $conexion = conexion();
    $sql = "SELECT * FROM usuarios where email= '$user' and pass= '$password'";
    $result = mysqli_query($conexion,$sql);
    $re = mysqli_fetch_array($result);
    if($re){
        if($re['rango'] == "0"){
            session_start();
            $_SESSION['usuario'] = $re['nombre'];
            $_SESSION['id'] = $re['id'];
            echo "user/dashboard.php";
        }
        if($re['rango'] == "1"){
            session_start();
            $_SESSION['usuario'] = $re['nombre'];
            $_SESSION['id'] = $re['id'];

            echo "administrador/dashboard.php";
        }
    }else{
        echo "error!, tus credenciales no estan registradas";
    }

}

function favoritos($id){
    $conexion = conexion();
    $sql = "SELECT * FROM favoritos where id_user= '$id'";
    $result = mysqli_query($conexion,$sql);
    $array = array();
    while($r = mysqli_fetch_array($result)){
       array_push($array, $r['libro_id']);

    }  
    return $array;
}

function agregarAFavoritos($libro_id, $idUser){
    $conexion = conexion();
    $sql = "INSERT into favoritos (libro_id,id_user,estado) values ('$libro_id',' $idUser','1')";
    $result = mysqli_query($conexion,$sql);
    
    if($result){
        echo "true";
       
    }else{
        echo "false";
    }
}

function quitarAFavoritos($libro_id,$idUsuario){
    $conexion = conexion();
    $sql = "DELETE from favoritos where libro_id = $libro_id and id_user= '$idUsuario'";
    $result = mysqli_query($conexion,$sql);    
    if($result){
        echo "true";
       
    }else{
        echo "false";
    }
}
function registarUsuario($n,$ap,$am,$email,$pass){
    $conexion = conexion();

    $sql= "INSERT INTO usuarios (nombre, apellidoPaterno,apellidoMaterno, email,pass,rango) values ('$n','$ap','$am','$email','$pass','0')"; 
    $result = mysqli_query($conexion,$sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

function misFavoritos($id){
    $conexion = conexion();
    $sql = "SELECT * from favoritos inner join libros on favoritos.libro_id = libros.id where favoritos.id_user ='$id'";
    $result = mysqli_query($conexion,$sql);
    if($result){
    return $result;
    }else{
        echo "consulta no ejecutada correctamente";
    }
}

function eliminarLibro($libro_id){
    $conexion = conexion();
    $sql ="DELETE from libros where id='$libro_id'";
    $result=mysqli_query($conexion,$sql);
    if($result){
        return true;
    }else{
        return false;
    }



}

function agregarVista($id){
    $conexion = conexion();
    $sql = "UPDATE libros SET vistas = vistas + 1 where id='$id'";
    $result=mysqli_query($conexion,$sql);
    if($result){
        return true;
    }else{
        return false;
    }
}

?>