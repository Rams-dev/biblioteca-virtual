
$('#registroUserForm').submit(function(e){
    e.preventDefault()
    $("#nombre > input").focus(function(){
        $("#nombre > input").removeClass("is-invalid")
        $('#errorNombre').empty()
    })
    $("#apellidoPaterno > input").focus(function(){
        $("#apellidoPaterno > input").removeClass("is-invalid")
        $('#errorApellidoPaterno').empty()
    })
    $("#apellidoMaterno > input").focus(function(){
        $("#apellidoMaterno > input").removeClass("is-invalid")
        $('#errorApellidoMaterno').empty()
    })
    $("#correoElectronico > input").focus(function(){
        $("#correoElectronico > input").removeClass("is-invalid")
        $('#errorCorreoElectronico').empty()
    })
    $("#pass > input").focus(function(){
        $("#pass > input").removeClass("is-invalid")
        $('#errorPass').empty()
    })
        
    
    $.ajax({
        url: 'modelos/registroUsuarios.php',
        data: $(this).serialize(),
        type: 'post',
        // dataType: 'JSON',
    statusCode:{
        400: function(xhr){
            console.log(xhr)
            if($('#nombre').val() == ""){
                $("#nombre > input").addClass("is-invalid")
                $('#errorNombre').html('<small class="text-danger" >campo obligatorio <small>')
            }
            if($('#apellidoPaterno').val() == ""){
                $("#apellidoPaterno > input").addClass("is-invalid")
                $('#errorApellidoPaterno').html('<small class="text-danger" >campo obligatorio <small>')
            }
            if($('#apellidoMaterno').val() == ""){
                $("#apellidoMaterno > input").addClass("is-invalid")
                $('#errorApellidoMaterno').html('<small class="text-danger" >campo obligatorio <small>')
            }
            if($('#correoElectronico').val() == ""){
                $("#correoElectronico > input").addClass("is-invalid")
                $('#errorCorreoElectronico').html('<small class="text-danger" >campo obligatorio <small>')
            }
            if($('#pass').val() == ""){
                $("#pass > input").addClass("is-invalid")
                $('#errorPass').html('<small class="text-danger" >campo obligatorio <small>')
            }
            
        }
    
    }
    })
    .done(function(response){
        console.log(response)
        alert(response);
        $("#nombre > input").val("")
        $('#errorNombre').empty()
        $("#apellidoPaterno > input").val("")
        $('#errorApellidoPaterno').empty()
        $("#apellidoMaterno > input").val("")
        $('#errorApellidoMaterno').empty()
        $("#correoElectronico > input").val("")
        $('#errorCorreoElectronico').empty()
        $("#pass > input").val("")
        $('#errorPass').empty()

    })

    

})