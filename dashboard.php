<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>masconsulta | Directorio web</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

  <!--Importando hojas de estilo en cascada-->
  <link rel="stylesheet" href="css/estilo.css">


</head>
<body>

  <!--Start Header Navigation -->
  <header class="header" data-rol="header">
    <div class="toggle-float-panel pull-left" id="toggle-float-panel" >
      <span>*</span>
    </div>
    <figure class="header-logo">
      <a href="index.php" class="max-link"></a>
      <img src="img/logo-desktop.jpg" alt="">
    </figure>

    <div class="toogle-menu">
      <span>*</span>
    </div>
    <nav class="navigation" id="menu">
      <ul>
        <li>
          <a href="index.php">  <span></span> Inicio </a>
        </li>
        <li>
          <a href="registry.php"> <span></span> Registro</a>
        </li>
        <li>
          <a href="login.php">  <span></span> Login </a>
        </li>
        <li>
          <a href="dashboard.php" id="selected">  <span></span> Dashboard </a>
        </li>
      </ul>
    </nav>
  </header>
  <!--End Header Navigation -->


  <!--Sub-Header-->
  <div class="router">
    <span class="icon-home"></span> <a href="index.php">Inicio</a> / Libros en línea
  </div>
  <!--Sub-Header-->


  <!--Panel derecho flotante-->

  <div class="float-panel" id="float-panel">
    <ul class="float-panel-menu">
      <li>
        <a href="">Inicio</a>
      </li>
      <li>
        <a href="profile.php">Mi perfil</a>
      </li>
      <li>
        <a href="business.php">Mis negocios</a>
      </li>
      <li>
        <a href="">Cerrar sesión</a>
      </li>
    </ul>
  </div>
  <!--Panel derecho flotante-->

  <!--Contenedor de datos-->
  <div class="container with-float-panel">
    <div class="u-wrapper">
      <h2 class="title">Perfil de usuario</h2>
      
      <p class="paragraph">
       Actualiza tu perfil de usuario.
     </p>

  





<!--Progress bar-->
<div class="progress-bar">
  <span class="progress-bar-percentage">40%</span>
  <span class="progress-bar-indicator" data-type="success" data-role="progress-indicator" data-value="40"></span>
</div>
<div class="progress-bar">
  <span class="progress-bar-percentage">40%</span>
  <span class="progress-bar-indicator" data-type="success" data-role="progress-indicator" data-value="90"></span>
</div>
<!--Progress bar-->


</div>
</div>
<!--Contenedor de datos-->

<!--===========================================================-->
<!--Importando scripts-->
<!--===========================================================-->
<script type="text/javascript" src="js/jQuery-min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
  $(".fancybox").fancybox();

  alert("Hola valor:   span[data-role='progress-indicator']");
});
</script>
</body>
</html>