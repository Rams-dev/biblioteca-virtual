<?php
require_once("../conexion.php");

 $conexion = conexion();

    $nombre_libro = $_POST["nombre_libro"];
    $autor = $_POST["autor"];
    $editorial = $_POST["editorial"];
    $anio = $_POST["ano"];
    $categoria = $_POST["categoria"];
    $libro = $_FILES["libro"];
    $portada = $_FILES["portada"];
    // echo $nombre_libro, $editorial;
    //   foreach ($libro as $key => $value) {
    //       echo ($key . " " . $value . "=>"); 
    //   }
    //exit;
    if(empty($nombre_libro) or empty($autor) or empty($editorial) or empty($anio) or empty($categoria)){
       echo "sin datos";
        http_response_code(400);
      
    }else{
    if($libro["type"] == "application/pdf"){
         $libro_enc = md5($portada["tmp_name"]) . ".pdf";
        $rutaLibro = "../assets/libros/" . $libro_enc;
     if(!move_uploaded_file($libro["tmp_name"], $rutaLibro)){
        echo "no se subio";
        }
    }else{
        echo "el libro debe se en formato pdf";
        echo "\n";
        exit;
    }

    if($portada["type"] == "image/jpg" or $portada["type"] == "image/jpeg" ){
         $portada_enc = md5($portada["tmp_name"]) . ".jpg";
        $rutaPortada = "../assets/portadas/". $portada_enc;
        if(!move_uploaded_file($portada["tmp_name"], $rutaPortada)){
        echo "no jala weeeee";
        }              
    }else{
        echo "selecciona un archivo .jpg \n";
        exit;
    }
    
    $sql = "INSERT into libros (nombre_libro,autor,editorial,anio,categoria,libro,portada,vistas) values ('$nombre_libro','$autor','$editorial','$anio','$categoria','$libro_enc','$portada_enc',0)";
    $result=mysqli_query($conexion,$sql);
    if($result){
        echo  "Libro registrado";
    } else{
        echo  "ocurrio un error, intentalo de nuevo";
    }
}


?>