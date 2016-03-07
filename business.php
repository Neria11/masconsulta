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
          <div class="responsive-table">
            <table class="table table-bordered center">
              <tr class="info">
                <th>#</th>
                <th>Negocio</th>
                <th>Logotipo</th>
                <th colspan="2">Acciones</th>
              </tr>
              <tr>
                <td>
                  <strong>1</strong>
                </td>
                <td>
                  <p class="uppercase">Masconsulta</p>
                </td>
                <td>
                  <figure class="responsive-image" style="width:100px;">
                    <img class="rounded" src="img/noavatar.png" alt="">
                  </figure>
                </td>
                <td>
                  <a class="mc-button mc-button-md mc-button-danger" href="#">Eliminar</a>
                </td>
                <td>
                  <a class="mc-button mc-button-md mc-button-success" href="#">Editar</a>
                </td>
              </tr>

              <tr>
                <td>
                  <strong>2</strong>
                </td>
                <td>
                  <p class="uppercase">Masconsulta</p>
                </td>
                <td>
                  <figure class="responsive-image" style="width:100px;">
                    <img class="rounded" src="img/noavatar.png" alt="">
                  </figure>
                </td>
                <td>
                  <a class="mc-button mc-button-md mc-button-danger" href="#">Eliminar</a>
                </td>
                <td>
                  <a class="mc-button mc-button-md mc-button-success" href="new-business.php">Editar</a>
                </td>
              </tr>
            </table>
          </div>
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