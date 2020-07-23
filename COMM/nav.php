<body>
  <nav class="navbar navbar-primary bg-info">
  <a class="navbar-brand" href="#">
    <img class="salir" src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy">
  </a>
  <a href="../modelos/cerrarSession.php" class="d-flex justify-content-end">
    <img class="salir" src="../assets/salir.png" alt="salir" width="50" height="35" data-toggle="tooltip" data-placement="left" title="Salir">
  </a>
</nav>

   <nav class="nav-vertical">
     <a href="../administrador/dashboard.php" class="nav-enlace" id="casa">Casa</a>
     <a href="../administrador/agregar_libro.php" class="nav-enlace" id="agregar">Agregar</a>
     <a href="" class="nav-enlace categorias" >estadisticas</a>

     <a href="" class="nav-enlace">Perfil</a>

   </nav>

   <script>
     var base_uri="http://localhost/biblioteca/";
/// Url actual

  let url = window.location.href;
    if(url == base_uri + "administrador/dashboard.php"){
      document.getElementById("casa").classList.add("active");
    }
    if(url == base_uri + "administrador/agregar_libro.php"){
      document.getElementById("agregar").classList.add("active");
    }
   </script>