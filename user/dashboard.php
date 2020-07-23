<?php include('../COMM/header.php')?>
<?php include('../COMM/navuser.php')?>
<?php include("../modelos/consultas.php") ;
session_start();
// echo $_SESSION['id'];
$libros = libros();
$favoritos = favoritos($_SESSION['id']);
// $f = array();
// foreach ($favoritos as $key => $value) {
//     $f=$key["id"];
    
// }
// var_dump($favoritos);


?>

<div class="container">
    <h1 class="text-primary">BIENVENIDO A ESTA BIBLIOTECA BRO</h1>
    <h2 class="">Libros mas leidos</h2>
 <div class="row  ">
    <?php foreach($libros as $libro):?>     
        <div class="col-md-3 my-2 img-content">
            <a href="../assets/libros/<?php echo $libro['libro']; ?> " target="_blank" onclick="vista(<?= $libro['id']; ?>)" >
           
                <div></div>
                <img class="img" src="../assets/portadas/<?php echo $libro['portada'];?>" alt="" width="100%" height="350"><br> 
                    <div class="nombre text-justify px-3">
                        <span><b>NOMBRE:</b><br> <?= $libro['nombre_libro'];?></span><br>
                        <span><b>AUTOR:</b><br> <?= $libro['autor'];?></span><br>
                        <span><b>AÑO:</b><br> <?= $libro['anio'];?></span><br>
                        <span><b>CATEGORIA:</b><br> <?= $libro['categoria'];?></span><br>
                        <span><b>VISTAS:</b> <?= $libro['vistas'];?></span><br>
                    </div>
            </a>
            <!-- <div class="iconofavorito"> -->
                <?php if(in_array($libro['id'], $favoritos)){ ?>
                     <div class="favorito" onclick="quitarFavorito(<?=$libro['id']?>,<?= $_SESSION['id']?>)"><img src="../assets/fav2.png" alt="" width = "30"></div>
                <?php }else{ ?>
                    <div class="favorito" onclick="agregarFavorito(<?= $libro['id'];?>,<?= $_SESSION['id'];?>)"><img src="../assets/fav.png" alt="" width = "30"></div>
                <?php } ?>
        <!-- </div> -->
        </div>
    <?php endforeach?>
    </div>
</div>
<script src="../js/dashboard.js"></script>
<?php include('../COMM/footer.php')?>