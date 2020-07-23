<?php include('../COMM/header.php')?>
<?php include('../COMM/nav.php')?>
<div class="container">
    <div class="form-group d-flex justify-content-around">
        <form action="" class="col-md-10 my-4 p-2 form-group " id="subirLibro" method="post" enctype="multipart/form-data">
        <div class="row ">
         <div class="col-md-6">
            <div class="nombre_libro">
                <label for="">Nombre del libro</label>
                <input type="text" name="nombre_libro" id="nombre_libro" class="form-control">
                <div id="errorNombreLibro"></div>
            </div><br>
            <div class="autor">
                <label for="">Autor del libro</label>
                <input type="text" name="autor" id="autor" class="form-control">
                <div id="errorAutor"></div>
            </div><br>
            <div class="editorial">
                <label for="">Editorial del libro</label>
                <input type="text" name="editorial" id="editorial" class="form-control">
                <div id="errorEditorial"></div>
            </div><br>
            <div class="ano">
                <label for="">Año del libro</label>
                <input type="text" name="ano" id="ano" class="form-control">
                <div id="errorAno"></div>
            </div><br>
            </div>
            <div class="col-md-6">
            <div class="categoria">
                <label for="">Categoria del libro</label>
                <input type="text" name="categoria" id="categoria" class="form-control">
                <div id="errorCategoria"></div>
            </div><br>
            <div class="libro">
                <label for="">Libro en PDF</label><br>
                <input type="file" name="libro" id="libro">
                <div id="errorLibro"></div>
            </div><br>
            <div class="portada">
                <label for="">Portada del libro</label><br>
                <input type="file" name="portada" id="portada">
                <div id="errorPortada"></div>
            </div><br>
            <div class="my-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-success btn-lg" id="agregarLibro">Agregar</button>
            </div>
            </div>
            </div>
        </form>
    </div>
    
</div>
<script src="../js/agregar_libro.js"></script>

<?php include('../COMM/footer.php')?>