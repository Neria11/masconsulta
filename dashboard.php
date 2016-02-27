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

  <!--Contenedor de datos-->
  <div class="container with-float-panel">
    <div class="u-wrapper">
      <h2 class="title">Perfil de usuario</h2>
      
     <p class="paragraph">
       Actualiza tu perfil de usuario.
     </p>

     <form action="" class="form" enctype="multipart/form-data">
       <div class="form-group">
        <label for="" class="tag">Pseudónimo:</label>
        <input type="text" required="" class="control control-lg">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="text" required="" class="control control-lg">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="text" required="" class="control control-lg">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <select name="" id="" class="control control-lg" required="">
          <option value="">Option Number</option>
          <option value="">Option Number</option>
        </select>
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="text" required="" class="control control-sm">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="number" min="1" max="10" required="" class="control control-xs">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="text" required="" class="control control-md">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <textarea name="" id="" required="" rows="5" class="control control-lg"></textarea>
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="file" required="" class="control control-lg">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="text" required="" class="control control-sm">
      </div>
      <div class="form-group">
        <label for="" class="tag">Form Control md:</label>
        <input type="radio" id="radio01" name="radio" />
        <label for="radio01"><span></span>Radio Button 1</label>
        <input type="radio" id="radio02" name="radio" />
        <label for="radio02"><span></span>Radio Button 2</label>
        <input type="radio" id="radio03" name="radio" />
        <label for="radio03"><span></span>Radio Button 3</label>
      </div>
      <div class="form-group">
        <label for="" class="tag">Checkboxes:</label>
        <input type="checkbox" name="option1" value="Milk" id="check01"> 
        <label for="check01"><span></span>Check button</label>
        <input type="checkbox" name="option2" value="Butter" id="check02" checked="" > 
        <label for="check02"><span></span>Check button</label>
        <input type="checkbox" name="option3" value="Cheese" id="check03"> 
        <label for="check03"><span></span>Check button</label>
      </div>
      <div class="form-group">
        <input type="submit" class="mc-button mc-button-block mc-button-success" value="Guardar cambios">
        <input type="submit" class="mc-button mc-button-xs mc-button-info" value="Guardar cambios">
        <input type="submit" class="mc-button mc-button-sm mc-button-danger" value="Guardar cambios">
        <input type="submit" class="mc-button mc-button-md mc-button-warning" value="Guardar cambios">
        <input type="submit" class="mc-button mc-button-lg mc-button-success" value="Guardar cambios">
      </div>
    </form>

    <div class="responsive-table">
      <table class="table table-bordered">
        <tr class="info">
          <th>Tipo</th>
          <th>Costo</th>
          <th>Tipo</th>
          <th>Costo</th>
          <th>Tipo</th>
          <th>Costo</th>
        </tr>
        <tr>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
        </tr>
        <tr>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
        </tr>
        <tr>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
        </tr>
      </table>
    </div>

    <div class="responsive-table">
      <table class="table table-hover table-responsive">
        <tr class="success">
          <th>Tipo</th>
          <th>Costo</th>
          <th>Tipo</th>
          <th>Costo</th>
          <th>Tipo</th>
          <th>Costo</th>
        </tr>
        <tr>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
        </tr>
        <tr>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
        </tr>
        <tr>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
          <td class=""><span class="icon-target"></span> Mensual</td>
          <td><span class="icon-power"></span> $250.00 MXN</td>
        </tr>
      </table>
    </div>

    <span role-action="lauch-modal" data-target="uno" class="mc-button mc-button-xs mc-button-info"> Open modal</span>

    <!--Modal pop-up-->
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
<!--Modal pop-up-->

<!--Progress bar-->
<div class="progress-bar">
  <span class="progress-bar-percentage">40%</span>
  <span class="progress-bar-indicator" data-type="success" data-value="40"></span>
</div>
<div class="progress-bar">
  <span class="progress-bar-percentage">40%</span>
  <span class="progress-bar-indicator" data-type="success" data-value="90"></span>
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
});
</script>
</body>
</html>