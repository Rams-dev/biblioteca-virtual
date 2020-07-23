
<body>
  <nav class="navbar navbar-primary bg-info">
  <a class="navbar-brand" href="#">
    <img src="../assets/menu.png" id="menuIco"#alt="" width="50" heigh="50">
  </a>
  <a href="../modelos/cerrarSession.php" class="d-flex justify-content-end">
    <img src="../assets/salir.png" id="salir" alt="salir" width="50" height="35">
  </a>
</nav>

   <nav class="nav-vertical">
     <a href="dashboard.php" class="nav-enlace" id="casa">Casa</a>
     <a href="favoritos.php" class="nav-enlace" id="favoritos">Favoritos</a>
     <a href="" class="nav-enlace categorias" >Categorias</a>
  
     <!-- <li><a href="" class="nav-enlace ">categoria1</a></li> -->
 
     <a href="" class="nav-enlace">Perfil</a>

   </nav>

   <script>
     var base_uri="http://localhost/biblioteca/";
/// Url actual

  let url = window.location.href;
    if(url == base_uri + "user/dashboard.php"){
      document.getElementById("casa").classList.add("active");
    }
    if(url == base_uri + "user/favoritos.php"){
      document.getElementById("favoritos").classList.add("active");
    }


    $(document).ready(function(){
      $('#menuIco').click(function(){
        // alert('que')
      $('.nav-vertical').slideToggle();
    });
    });
    
   </script>