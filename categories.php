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
  <script type="text/javascript" src="js/scroll.js"></script>
  <script src="js/bxslider.js"></script>
  <script type="text/javascript" src="js/fancybox.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
    $("#bxslider-1").bxSlider({
      auto: true,
      autoControls: false,
      speed: 1000,
      pager: false
    });

    $(".fancybox").fancybox();


    $.ajaxSetup({"cache":false});
    setInterval("updateVisitCounter()", 500);
    setInterval("usersOnline()", 500);

    $("#infinite_scroll").scrollExtend({
      "target": "#lista_noticias",
      "url": "scroll.php"
    });
  });
  </script>
</head>
<body>


 <!--Start Header Navigation -->
 <header class="header" data-rol="header">
   <!--<div class="toggle-float-panel pull-left" id="toggle-float-panel" >
    <span>*</span>
  </div>-->
  <figure class="header-logo">
    <a href="#" class="max-link"></a>
  </figure>
  <div class="toogle-menu">
    <span>+</span>
  </div>
  <nav class="navigation" id="menu">
    <ul>
      <li>
        <a href="index.php" id="selected">  <span></span> Inicio </a>
      </li>
      <li>
        <a href="registry.php"> <span></span> Registro</a>
      </li>
      <li>
        <a href="login.php">  <span></span> Login </a>
      </li>
      <li>
        <a href="dashboard.php">  <span></span> Dashboard </a>
      </li>
    </ul>
  </nav>
</header>
<!--End Header Navigation -->



<!--Contenedor de datos-->
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
    <div class="container" >
      <div class="u-wrapper">
        <h2 class="title">
          Categorías
          <span class="mc-button mc-button-square mc-button-success pull-right" id="randomCategories">R</span>
        </h2>
        <ul class="categories">
          <li>
            <a href="#" title="Médicos"> <span class="icon-*">*</span> Médicos</a>
          </li>
          <li>
           <a href="#" title="Gimnasio"><span class="icon-*">*</span> Gimnasio</a>
         </li>
         <li>
           <a href="#" title="Zapaterías"><span class="icon-*">*</span> Zapaterías</a>
         </li>
       </ul>
     </div>
   </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
  <div class="container">
    <div class="u-wrapper no-background">
      <h2 class="title">
        Negocios por categoría 
        <span class="mc-button mc-button-square mc-button-success pull-right" id="randomBusiness">R</span>
      </h2>
    </div>

    <!--NEGOCIOS EN PANTLLA PRINCIPAL-->
    <div class="row" id="filterCategories">
     

    </div>
    <!--NEGOCIOS EN PANTLLA PRINCIPAL-->

  </div>


</div>

</div>

<!--Pié de página-->
<footer data-rol="footer">
  <p class="paragraph">Lorem ipsum dolor sit amet, m est, repudiandae ut doloribus odit?</p>
</footer>
<!--Pié de página-->

</body>
</html>