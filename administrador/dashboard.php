<?php include('../COMM/header.php')?>
<?php include('../COMM/nav.php')?>
<?php include("../modelos/consultas.php") ;
$libros = libros();
// var_dump($libros);

?>

<div class="container">
    <h1 class="text-warning">Agregar libros en la seccion de agregar</h1>
    <h2 class="">Libros mas leidos</h2>
 <div class="row  ">
    <?php foreach($libros as $libro):?>     
        <div class="col-md-3 my-2 img-content">
            <a href="../assets/libros/<?php echo $libro['libro'];?>">
                <img class="img" src="../assets/portadas/<?php echo $libro['portada'];?>" alt="" width="100%" height="350"><br> 
                    <div class="nombre text-justify px-3">
                        <span><b> NOMBRE:</b><br> <?= $libro['nombre_libro'];?></span><br>
                        <span><b>AUTOR:</b><br> <?= $libro['autor'];?></span><br>
                        <span><b>AÑO:</b><br> <?= $libro['anio'];?></span><br>
                        <span><b>CATEGORIA:</b><br> <?= $libro['categoria'];?></span><br>
                        <span><b>VISTAS:</b> <?= $libro['vistas'];?></span><br>
                    </div>
            </a>
            <div class="favorito"><img src="../assets/eliminar.png" alt="" width = "30" onclick="eliminarLibro(<?=$libro['id'];?>)"></div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<script src="../js/dashboard.js"></script>
<?php include('../COMM/footer.php')?>