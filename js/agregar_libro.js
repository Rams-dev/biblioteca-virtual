
$("#nombre_libro").focus(function(){
    $("#errorNombreLibro").empty();
});
$("#autor").focus(function(){
    $("#errorAutor").empty();
});
$("#categoria").focus(function(){
    $("#errorCategoria").empty();
});
$("#ano").focus(function(){
    $("#errorAno").empty();
});
$("#editorial").focus(function(){
    $("#errorEditorial").empty();
});
$("#libro").focus(function(){
    $("#errorLibro").empty();
});
$("#portada").focus(function(){
    $("#errorPortada").empty();
});

var subirLibro = document.querySelector("#agregarLibro");
    
    // document.querySelector("#errorNombreLibro").classList.remove("text-danger");
subirLibro.addEventListener("click",function(e){
    e.preventDefault()
     
     var datos = new FormData($("#subirLibro")[0]);
     $.ajax({
         type: "post",
         data: datos,
         url: "../administrador/subir_libro.php",
         contentType: false,
        processData:false,
         beforesend: function(){
            $("<img src='../assets/salir.png'  style='position:relative;top:200px;left:200px;z-index:2000' id='loading-excel' />").appendTo("body");         
            },
        statusCode: {
            400: function(xhr){
                if(document.querySelector("#nombre_libro").value == ""){
                    document.querySelector("#errorNombreLibro").innerHTML = '<small class="text-danger">Rellena este campo</small>';
                }
                if(document.querySelector("#autor").value == ""){
                    document.querySelector("#errorAutor").innerHTML = '<small class="text-danger">Rellena este campo</small>';
                }
                if(document.querySelector("#editorial").value == ""){
                    document.querySelector("#errorEditorial").innerHTML = '<small class="text-danger">Rellena este campo</small>';
                }
                if(document.querySelector("#ano").value == ""){
                    document.querySelector("#errorAno").innerHTML = '<small class="text-danger">Rellena este campo</small>';
                }
                if(document.querySelector("#categoria").value == ""){
                    document.querySelector("#errorCategoria").innerHTML = '<small class="text-danger">Rellena este campo</small>';
                }
                if(document.querySelector("#libro").value == ""){
                    document.querySelector("#errorLibro").innerHTML = '<small class="text-danger">Rellena este campo</small>';             
                }
                if(document.querySelector("#portada").value == ""){
                    document.querySelector("#errorPortada").innerHTML = '<small class="text-danger">Rellena este campo</small>';
                }
            }

        },
         success: function(response){
             
            document.querySelector("#nombre_libro").value = "";
             document.querySelector("#autor").value = "";
             document.querySelector("#editorial").value = "";
             document.querySelector("#ano").value = "";
             document.querySelector("#categoria").value = "";
             document.querySelector("#libro").value = "";
             document.querySelector("#libro").value = "";
             document.querySelector("#portada").value = "";
            console.log(response);
            alert(response);
            sleep(10000)
         }

         });
         e.preventDefault();
   
});
