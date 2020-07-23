    


function agregarFavorito(idLibro, idUsuario){
  //  alert(idLibro,idUsuario)
  var id= idUsuario;
  $.ajax({
      type:"post",
      url:"../user/agregarFavoritos.php",
      data: {libro_id: idLibro, userId: id},
  })
  .done(function(response){
    console.log(response)
    // console.log("agregado")
    location.reload();

  })
  .fail(function(error){
      alert("algo salio mal");

  })
}

function quitarFavorito(id_libro,id){
    var id;
    $.ajax({
        type:"post",
        url:"../user/quitarFavoritos.php",
        data: {libro_id: id_libro, id:id},
    })
    .done(function(response){
      console.log(response)
      location.reload()
  
    })
    .fail(function(error){
        alert("algo salio mal");
  
    })
   
}

function eliminarLibro(id_libro){
  var id;
  $.ajax({
      type:"post",
      url:"../administrador/eliminarLibro.php",
      data: {libro_id: id_libro},
  })
  .done(function(response){
    console.log(response)
    location.reload()

  })
  .fail(function(error){
      alert("algo salio mal");

  })
 
}


 function vista(id){
// alert(id)
var id_libro;
 $.ajax({
    type: 'POST',
     url: '../user/vistas.php',
     data:{id_libro:id},
 })
 .done(function(response){
    console.log(response);
  })
  .fail(function(error){
    alert("algo salio mal");
  })

}

