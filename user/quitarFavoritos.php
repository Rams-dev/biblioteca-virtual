<?php
include("../modelos/consultas.php");
 $libro_id = $_POST["libro_id"];
 $id = $_POST["id"];
// echo $libro_id,$id;
quitarAFavoritos($libro_id,$id);

?>