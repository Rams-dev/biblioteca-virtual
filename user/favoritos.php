<?php
include("../COMM/header.php");
include("../COMM/navuser.php");
include("../modelos/consultas.php");

session_start();
$favoritos = misFavoritos($_SESSION['id']);
// var_dump($favoritos);


?>

<div class="container">
    <?php if(empty($favoritos)){?>
        <h2>ohh.! aun no tienes libros favoritos</h2>
    <?php }else{?>
    <h1 class="">favoritos</h1>
 <div class="row  ">
    <?php foreach($favoritos as $libro):?>
        <div class="col-md-3 my-2 img-content">
            <a href="../assets/libros/<?php echo $libro['libro'];?>">
                <div></div>
                <img class="img" src="../assets/portadas/<?php echo $libro['portada'];?>" alt="" width="100%" height="350"><br>
                    <div class="nombre text-justify px-3">
                        <span><b>NOMBRE:</b><br> <?= $libro['nombre_libro'];?></span><br>
                        <span><b>AUTOR:</b><br> <?= $libro['autor'];?></span><br>
                        <span><b>AÑO:</b><br> <?= $libro['anio'];?></span><br>
                        <span><b>CATEGORIA:</b><br> <?= $libro['categoria'];?></span><br>
                        <span><b>VISTAS:</b> <?= $libro['vistas'];?></span><br>
                    </div>
                    <div class="favorito" onclick="quitarFavorito(<?=$libro['id']?>,<?= $_SESSION['id']?>)"><img src="../assets/eliminar.png" alt="" width = "30"></div>
            </a>
        </div>
    <?php endforeach?>
    </div>
   <?php } ?>
</div>
<script src="../js/dashboard.js"></script>
<?php include('../COMM/footer.php')?>