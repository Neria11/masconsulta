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
    <span class="icon-home"></span> <a href="index.php">Inicio</a> / Mis negocios
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
        <a href="">Mi cuenta</a>
      </li>
      <li>
        <a href="">Mis negocios</a>
      </li>
      <li>
        <a href="">Cerrar sesión</a>
      </li>
    </ul>
  </div>
  <!--Panel derecho flotante-->

  <!---PERFIL DE USAURIO-->
  <div class="row with-float-panel">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="container">
        <div class="u-wrapper">
          <h2 class="title">Mis negocios registrados</h2>
          
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <a class="mc-button mc-button-block mc-button-info" href="new-business.php">Nuevo negocio</a>
            </div>
          </div>
          
          <!--NEGOCIOS REGISTRADOS-->
          <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="business-registered">
                <figure class="business-registered-image">
                  <img src="img/cabania.jpg" alt="Portada" class="background">
                  <img src="img/tsss.jpg" alt="" class="logo">
                </figure>
                <hgroup class="business-registered-heading">
                  <h1 class="name">Masconsulta</h1>
                </hgroup>
                <p class="business-registered-actions">
                  <a class="mc-button mc-button-md mc-button-success" href="edit-business.php">Editar</a>
                  <a class="mc-button mc-button-md mc-button-danger" href="#">Eliminar</a>
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="business-registered">
                <figure class="business-registered-image">
                  <img src="img/cabania.jpg" alt="Portada" class="background">
                  <img src="img/tsss.jpg" alt="" class="logo">
                </figure>
                <hgroup class="business-registered-heading">
                  <h1 class="name">Masconsulta</h1>
                </hgroup>
                <p class="business-registered-actions">
                  <a class="mc-button mc-button-md mc-button-success" href="edit-business.php">Editar</a>
                  <a class="mc-button mc-button-md mc-button-danger" href="#">Eliminar</a>
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="business-registered">
                <figure class="business-registered-image">
                  <img src="img/cabania.jpg" alt="Portada" class="background">
                  <img src="img/tsss.jpg" alt="" class="logo">
                </figure>
                <hgroup class="business-registered-heading">
                  <h1 class="name">Masconsulta</h1>
                </hgroup>
                <p class="business-registered-actions">
                  <a class="mc-button mc-button-md mc-button-success" href="edit-business.php">Editar</a>
                  <a class="mc-button mc-button-md mc-button-danger" href="#">Eliminar</a>
                </p>
              </div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <div class="business-registered">
                <figure class="business-registered-image">
                  <img src="img/cabania.jpg" alt="Portada" class="background">
                  <img src="img/tsss.jpg" alt="" class="logo">
                </figure>
                <hgroup class="business-registered-heading">
                  <h1 class="name">Masconsulta</h1>
                </hgroup>
                <p class="business-registered-actions">
                  <a class="mc-button mc-button-md mc-button-success" href="edit-business.php">Editar</a>
                  <a class="mc-button mc-button-md mc-button-danger" href="#">Eliminar</a>
                </p>
              </div>
            </div>

          </div>
          <!--NEGOCIOS REGISTRADOS-->

        </div>  
      </div>
    </div>

  </div>
  <!---PERFIL DE USAURIO-->





  <!--===========================================================-->
  <!--Importando scripts-->
  <!--===========================================================-->
  <script type="text/javascript" src="js/jQuery-min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/fancybox.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
    $(".fancybox").fancybox();
  });
  </script>
</body>
</html>