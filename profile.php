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
      <a href="#" class="max-link"></a>
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
    <span class="icon-home"></span> <a href="index.php">Inicio</a> / Perfil de usuario
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

    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="container">
        <div class="u-wrapper">
          <h2 class="title">Datos de usuario <span class="badge green">@sneria</span></h2>
          <form action="" class="form" enctype="multipart/form-data">
           <div class="form-group">
            <label for="" class="tag">Username:</label>
            <input type="text" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Nombre:</label>
            <input type="text" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Apellido Paterno:</label>
            <input type="text" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Apellido Materno:</label>
            <input type="text" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Calle:</label>
            <input type="text" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Número Exterior:</label>
            <input type="number" required="" min="1" class="control control-xs">
          </div>
          <div class="form-group">
            <label for="" class="tag">Número Interior:</label>
            <input type="number" required="" min="1" class="control control-xs">
          </div>
          <div class="form-group">
            <input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
          </div>
        </form>
      </div>  
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="container">
      <div class="u-wrapper">
        <h2 class="title">Foto de perfil</h2>
        <div class="responsive-image">
          <img src="img/noavatar.png" alt="avatar">
          <span role-action="lauch-modal" data-target="uno" class="mc-button mc-button-sm mc-button-success"> Actualizar</span>
        </div>
        <!--Modal pop-up / ACTUALIZA FOTO DE PERFIL-->
        <div class="pop-up-fade" id="" data-rol="modal-uno">
         <div class="pop-up">
          <span class="close-pop-up"> x </span>
          <div class="pop-up-header">
           <h2 class="modal-title">Título aquí</h2>
         </div>
         <div class="pop-up-body"> 
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, obcaecati quaerat perspiciatis, sed ipsam magni vel quasi aliquam nisi quod minima dolorem, assumenda explicabo odit numquam vitae quibusdam fugiat laboriosam.
          </p>
        </div>
      </div>
    </div>
    <!--Modal pop-up / ACTUALIZA FOTO DE PERFIL-->
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