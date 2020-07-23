<?php
include("../modelos/consultas.php");
$id_libro = $_POST['libro_id'];
if(eliminarLibro($id_libro)){
    echo "libro eliminado con exito";
}else{
    echo "ohoh!. ocurrio un error, intenta mas tarde :)";
}
?>