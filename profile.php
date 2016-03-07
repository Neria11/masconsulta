              
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
  <script type="text/javascript" src="js/controllers/code.js"></script>

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
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <div class="container">
          <div class="u-wrapper">
            <h2 class="title">Foto de perfil</h2>
            <div class="responsive-image rounded" style="width:220px;height:220px;">
              <img src="img/noavatar.png" alt="avatar">
            </div>
            <div class="g-row">
              <span role-action="lauch-modal" data-target="uno" class="mc-button mc-button-sm mc-button-success"> Actualizar</span>
            </div>
            <!--Modal pop-up / ACTUALIZA FOTO DE PERFIL-->
            <div class="pop-up-fade" data-rol="modal-uno">
             <div class="pop-up pop-up-small">
              <span class="close-pop-up"> x </span>
              <div class="pop-up-header">
               <h2 class="modal-title">Selecciona una imagen</h2>
             </div>
             <div class="pop-up-body">
               <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                <figure class="responsive-image" id="image_preview"><img id="previewing" src="img/noavatar.png" /></figure>
                <div class="form-group">
                 <input type="file" name="file" id="avatar_usuario" required class="form-control">
               </div>
               <div class="form-group">
                 <input type="submit" class="mc-button mc-button-sm mc-button-info" id="actualiza_avatar" value="Actualizar">
               </div>
             </form>
           </div>
         </div>
       </div>
       <!--Modal pop-up / ACTUALIZA FOTO DE PERFIL-->
     </div>  
   </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
   <div class="container">
    <div class="u-wrapper">
      <h2 class="title">Contraseña: </h2>
      <form action="" class="form" enctype="multipart/form-data">
       <div class="form-group">
        <label for="" class="tag">Nueva contraseña:</label>
        <input type="password" required="" id="clave_uno" class="control control-lg" value="">
      </div>
      <div class="form-group">
        <label for="" class="tag">Repite nueva contraseña:</label>
        <input type="password" required="" id="clave_dos" class="control control-lg" value="">
        <div class="alert alert-warning" alert-type="warning" data-role="alert" style="display:none;"></div>
      </div>
      <div class="form-group">
        <span class="mc-button mc-button-sm mc-button-info" data-target="dos" role-action="lauch-modal" > Cambiar </span>
      </div>
    </form>
    <!--Modal pop-up / ACTUALIZA FOTO DE PERFIL-->
    <div class="pop-up-fade" id="" data-rol="modal-dos">
     <div class="pop-up pop-up-small">
      <span class="close-pop-up"> x </span>
      <div class="pop-up-header">
       <h2 class="modal-title">Cambio de contraseña</h2>
     </div>
     <div class="pop-up-body">
       <form action="" method="post">
         <div class="form-group">
          <label for="" class="tag">Confirma contraseña actual:</label>
          <input type="password" class="form-control control-block">
        </div> 
        <div class="form-group">
         <input type="submit" class="mc-button mc-button-sm mc-button-info" data-target="uno" value="Actualizar">
       </div>
     </form> 
   </div>
 </div>
</div>
<!--Modal pop-up / ACTUALIZA FOTO DE PERFIL-->
</div>  
</div>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
      <div class="container">
        <div class="u-wrapper">
          <h2 class="title">Datos de usuario <span class="badge blue">@sneria</span></h2>
          <form action="" class="form" id="formProfile" >
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
            <input type="number" required="" min="1" class="control control-sm">
          </div>
          <div class="form-group">
            <label for="" class="tag">Número Interior:</label>
            <input type="number" required="" min="1" class="control control-sm">
          </div>
          <div class="form-group">
            <label for="" class="tag">Sexo:</label>
            <select name="" id=""  class="control control-lg">
              <option value="">Selecciona un sexo</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
            </select>
          </div>
          <div class="form-group">
            <label for="" class="tag">País:</label>
            <select name="" id=""  class="control control-lg">
              <option value="">Selecciona una categoría</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label for="" class="tag">Estado:</label>
            <select name="" id=""  class="control control-lg">
              <option value="">Selecciona una categoría</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
            </select>
          </div>
          <div class="form-group">
            <label for="" class="tag">Municipio:</label>
            <select name="" id=""  class="control control-lg">
              <option value="">Selecciona una categoría</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
              <option value="">Albañil</option>
            </select>
          </div>
          <div class="form-group">
            <label for="" class="tag">Colonia:</label>
            <input type="tel" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Teléfono:</label>
            <input type="tel" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Correo electrónico:</label>
            <input type="tel" required="" disabled="" class="control control-md" value="n_eria_11@hotmail.com">
          </div>
          <div class="form-group">
            <label for="" class="tag">Fecha de nacimiento:</label>
            <input type="date" required="" class="control control-lg">
          </div>
          <div class="form-group">
            <label for="" class="tag">Eslogan:</label>
            <textarea name="" id="" class="control control-lg"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
          </div>
        </form>
      </div>  
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
    <div class="container">
      <div class="u-wrapper">
        <h2 class="title">Tips para el usuario</h2>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maxime, nulla explicabo optio quia! Cumque odit possimus obcaecati, eveniet fuga officiis asperiores veniam nobis, odio nostrum consequuntur at laborum quia!
        </p>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maxime, nulla explicabo optio quia! Cumque odit possimus obcaecati, eveniet fuga officiis asperiores veniam nobis, odio nostrum consequuntur at laborum quia!
        </p>
        <p class="paragraph">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maxime, nulla explicabo optio quia! Cumque odit possimus obcaecati, eveniet fuga officiis asperiores veniam nobis, odio nostrum consequuntur at laborum quia!
        </p>
      </div>
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