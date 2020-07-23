var errorUser = document.querySelector("#errorUser");
const errorPassword = document.querySelector("#errorPassword");
const user = document.querySelector("#usuario");
const password = document.querySelector("#password");
var login = document.querySelector("#ingresar")

user.focus()

login.addEventListener("click", function(){
    console.log("guenas papi");
    $.ajax({
        url: 'modelos/login.php',
        type: 'post',
        data: {user:user.value, pass: password.value}

    })
    .done(function(response){
        console.log(response)
        location.href = response
    })
    .fail(function(fail){
        console.log(fail)
    })


    if(user.value==""){
        user.classList.add('is-invalid')
        errorUser.innerHTML ='<small class="text-danger">Este campo no puede estar vacio imbecil</small>';
    }
    if(password.value==""){
        errorPassword.innerHTML = '<small class="text-danger">Este campo no puede estar vacio, imbecil</small>'
        password.classList.add('is-invalid')

    }
    if(user.value == "admin" && password.value == "1234"){
        location.href = "administrador/dashboard.php";
    }else if(user.value == "user" && password.value == "1234"){
        location.href = "user/dashboard.php";


    }else{
    // alert("usuario y contraseña incorrectas");

    }
});  