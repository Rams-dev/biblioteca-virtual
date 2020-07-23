<?php
session_start();
include("../modelos/consultas.php");
 $idLibro = $_POST["libro_id"];
 $userId = $_POST['userId'];
 agregarAFavoritos($idLibro, $userId);
?>