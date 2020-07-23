<?php
include('../modelos/consultas.php');

$id_libro = $_POST['id_libro'];
// echo $id_libro;

if(agregarVista($id_libro)){
    echo "exito";
}else{
    echo "error";
}
?>
