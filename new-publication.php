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

  <!--Importando scripts-->
  <script type="text/javascript" src="js/jQuery-min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/react.js"></script>

</head>
<body>


  <!--Start Header Navigation -->
  <header class="header" data-rol="header">
    <div class="toggle-float-panel pull-left" id="toggle-float-panel" >
      <span>+</span>
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
          <a href="dashboard.php" id="selected"> <span></span> Dashboard </a>
        </li>
      </ul>
    </nav>
  </header>
  <!--End Header Navigation -->


  <!--Sub-Header-->
  <div class="router">
    <span class="icon-home"></span> <a href="index.php">Inicio</a> / Nueva publicación
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

  <!--NUEVA PUBLICACION VIDEO FOTO O TEXTO-->
  <div class="container with-float-panel">
    <div class="u-wrapper">
      <h2 class="title">Nueva publicación: </h2>
      <form action="" class="form" enctype="multipart/form-data">
       <div class="form-group">
        <label for="" class="tag">Título de la publicación:</label>
        <input type="text" required="" id="clave_uno" class="control control-block" value="">
      </div>
      <div class="form-group">
        <label for="" class="tag">id_negocio:</label>
        <input type="number" required="" id="clave_uno" class="control control-block" value="">
      </div>
      <div class="form-group">
        <label for="" class="tag">id_usuario:</label>
        <input type="number" required="" id="clave_uno" class="control control-block" value="">
      </div>
      <div class="form-group">
        <label for="" class="tag">id_sucursal:</label>
        <input type="number" required="" id="clave_uno" class="control control-block" value="">
      </div>
      <!--SECTION TABS-->
      <div class="tabs">
        <!-- Radio button and lable for #tab-content1 -->
        <input type="radio" name="tabs" id="tab1" checked >
        <label for="tab1" class="tab">
          <i class="fa fa-html5"></i><span>VIDEO</span>
        </label>
        <!-- Radio button and lable for #tab-content2 -->
        <input type="radio" name="tabs" id="tab2">
        <label for="tab2" class="tab">
          <i class="fa fa-css3"></i><span>IMAGEN</span>
        </label>
        <!-- Radio button and lable for #tab-content3 -->
        <input type="radio" name="tabs" id="tab3">
        <label for="tab3" class="tab">
          <i class="fa fa-code"></i><span>TEXTO</span>
        </label>
        <div id="tab-content1" class="tab-content">
         <div class="form-group">
          <label for="" class="tag">Link del video:</label>
          <input type="text" required="" id="clave_uno" class="control control-block" value="">
        </div>
        <div class="video">
          <iframe allowfullscreen src="https://www.youtube.com/embed/-24yPFATrtU"></iframe>
        </div>
      </div> <!-- #tab-content1 -->
      <div id="tab-content2" class="tab-content">
        <div class="form-group">
          <label for="" class="tag">Seleccione una imagen:</label>
          <input type="file" required="" id="clave_uno" class="control control-block" value="">
        </div>
      </div> <!-- #tab-content2 -->
      <div id="tab-content3" class="tab-content">
        <div class="form-group">
          <label for="" class="tag">Redacte su párrafo:</label>
          <textarea name="" class="control control-block" id="" required="" ></textarea>
        </div>
      </div> <!-- #tab-content3 -->
    </div>
    <!--SECTION TABS-->

    <div class="form-group">
      <span class="mc-button mc-button-sm mc-button-info" data-target="dos" role-action="lauch-modal" > Publicar </span>
    </div>
  </form>
</div>  
</div>
<!--NUEVA PUBLICACION VIDEO FOTO O TEXTO-->






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