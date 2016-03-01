<?php 
session_start();
unset($_SESSION["cantidadcargadas"]); 
?>
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
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <link href="css/jquery-ui.css" type="text/css" rel="stylesheet"/> 

  <script type="text/javascript">
  $(function(){

    $("#buscador").focus();

    $("#buscador").autocomplete({
      source: "models/autocomplete.php",
      minLength: 1
    });


    /*Services in real time*/
    loadBusiness();
    loadPublications();
    loadCategories();
    $.ajaxSetup({"cache":false});
    setInterval("updateVisitCounter()", 500);
    setInterval("usersOnline()", 500);

    /*Sliders*/
    $("#bxslider-1").bxSlider({
      auto: true,
      autoControls: false,
      speed: 1000,
      pause: 10000,
      pager: false
    });

    $("#bxslider-3").bxSlider({
      auto: true,
      autoControls: false,
      speed: 1000,
      pause: 10000,
      pager: false
    });

    $("#bxslider-2").bxSlider({
      auto: true,
      autoControls: false,
      speed: 1000,
      pager: false
    });

    /*Pop-up imagenes*/
    $(".fancybox").fancybox();

    /*SCROLL INFINITO*/
    $("#resultPublications").scrollExtend({
      "target": "#itemsPublications",
      "url": "models/infinite-scroll-publications.php"
    });

  });
  </script>

</head>
<body>

 <!--Start Header Navigation -->
 <header class="header" data-rol="header">
  <figure class="header-logo">
    <a href="#" class="max-link"></a>
  </figure>
  <div class="toogle-menu">
    <span>+</span>
  </div>
  <nav class="navigation" id="menu">
    <ul>
      <li>
        <a href="registry.php"> <span></span> Registro</a>
      </li>
      <li>
        <a href="login.php">  <span></span> Login </a>
      </li>
    </ul>
  </nav>
</header>
<!--End Header Navigation -->

<!--BUSCADOR CODE-->
<div class="search-container" data-rol="search-container">
  <form action="">
    <div class="searcher">
      <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
         <input type="text" class="searcher-input" id="buscador" placeholder="Buscar...">
         <ul class="autocompletado" id="autocompletado">as</ul> 
       </div>
       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
         <button type="button" class="searcher-button" value="Consultar"> 
          <span class="icon-search">*</span> 
        </button>
      </div>
    </div>
  </div>
</form>
</div>
<!--BUSCADOR CODE-->

<!--ABRE ETIQUETA MAIN-->
<main>

  <!--Contenedor de datos-->
  <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="container" >
      <div class="u-wrapper">
        <h2 class="title">
          Categorías
          <span class="mc-button mc-button-square bold pull-right" id="randomCategories">R</span>
        </h2>
      </div>
      <ul class="categories" id="itemsCategories">
      </ul>
    </div>
  </div>


  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="container">
      <div class="u-wrapper no-background">
        <h2 class="title uppercase">
          Bienvenido
          <span class="badge badge-underline pull-right " id="usuarios-online"></span>
          <span class="badge light-gray pull-right" id="total-visitas"></span> 
        </h2> 

     <!-- <input type="submit" class="mc-button mc-button-sm mc-button-info pull-left uppercase bold" value="Registrate">
     <input type="submit" class="mc-button mc-button-sm mc-button-success pull-right uppercase bold" value="Comienza a buscar">-->
        <!--<div class="responsive-image">
          <img src="img/sas.png" alt="">
        </div>-->
        <!--CAROUSEL BXSLIDER-->
        <ul class="bxslider" id="bxslider-2">
          <li><img src="img/sas.png"></li>
          <li><img src="img/sas.png"></li>
          <li><img src="img/sas.png"></li>
          <li><img src="img/sas.png"></li>
          <li><img src="img/sas.png"></li>
        </ul>
        <!--CAROUSEL BXSLIDER-->
      </div>
    </div>
    <div class="container">
      <div class="u-wrapper no-background">
        <h2 class="title">
          Negocios recientes 
          <span class="mc-button mc-button-square pull-right" id="randomBusiness">R</span>
        </h2>
      </div>

      <!--NEGOCIOS EN PANTLLA PRINCIPAL-->
      <div class="row" id="listaNegocios">
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6">
          <div class="business">
            <a href="negocio.php" class="max-link"></a>
            <figure class="business-logo">
              <img src="img/logo-mobil.png" alt="Logo negocio">
            </figure>
            <div class="business-data">
              <h4 class="name">Grutas Tolantongo</h4>
              <span class="nick">@tolantongomx</span>
              <p class="category">Balneario</p>
            </div>
          </div>
        </div>
      </div>
      <!--NEGOCIOS EN PANTLLA PRINCIPAL-->
    </div> 
    <div class="container" >
      <div class="u-wrapper">
        <div id="resultPublications">
         <div class="row" id="itemsPublications">
         </div>
         <!-- <p class="mc-button mc-button-md mc-button-warning center" data-att="infinite_scroll"> Cargar más</p>-->
         <div class="scrollExtend-loading" id="gif-loading"></div>
       </div>
     </div>
   </div>   
 </div>

 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  <div class="accordion">
    <div class="accordion-header green">
      <p class="title uppercase"><span class="toggle-icon"><span class="icon-plus">+</span></span> Próximos Eventos </p>
    </div>
    <div class="accordion-content">
      <!--CAROUSEL BXSLIDER EVENTOS-->
      <ul class="bxslider" id="bxslider-1">
        <li>
         <div class="event">
          <a href="#" class="max-link"></a>
          <figure class="event-wallpaper">
            <img src="img/tol.jpg" alt="Imagen evento">
          </figure>
          <span href="" class="event-title">Presentación de candidates en Ixmiyork</span>
          <p class="event-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, enim nostrum ad tempore eius, quo odio velit cumque perspiciatis quisquam laboriosam eligendi consectetur? Inventore laborum alias omnis ut, atque neque.
          </p>
        </div>
      </li>
      <li>
        <div class="event">
          <a href="#" class="max-link"></a>
          <figure class="event-wallpaper">
            <img src="img/tol.jpg" alt="Imagen evento">
          </figure>
          <span href="" class="event-title">Presentación de candidates en Ixmiyork</span>
          <p class="event-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, enim nostrum ad tempore eius, quo odio velit cumque perspiciatis quisquam laboriosam eligendi consectetur? Inventore laborum alias omnis ut, atque neque.
          </p>
        </div>
      </li>
    </ul>
    <!--CAROUSEL BXSLIDER EVENTOS-->
  </div>
</div>

<div class="accordion">
  <div class="accordion-header red">
    <p class="title uppercase"><span class="toggle-icon"><span class="icon-plus">+</span></span> Promociones </p>
  </div>
  <div class="accordion-content">
    <!--CAROUSEL BXSLIDER EVENTOS-->
    <ul class="bxslider" id="bxslider-3">
      <li>
       <div class="event">
        <a href="#" class="max-link"></a>
        <figure class="event-wallpaper">
          <img src="img/tol.jpg" alt="Imagen evento">
        </figure>
        <span href="" class="event-title">Presentación de candidates en Ixmiyork</span>
        <p class="event-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, enim nostrum ad tempore eius, quo odio velit cumque perspiciatis quisquam laboriosam eligendi consectetur? Inventore laborum alias omnis ut, atque neque.
        </p>
      </div>
    </li>
    <li>
      <div class="event">
        <a href="#" class="max-link"></a>
        <figure class="event-wallpaper">
          <img src="img/tol.jpg" alt="Imagen evento">
        </figure>
        <span href="" class="event-title">Presentación de candidates en Ixmiyork</span>
        <p class="event-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, enim nostrum ad tempore eius, quo odio velit cumque perspiciatis quisquam laboriosam eligendi consectetur? Inventore laborum alias omnis ut, atque neque.
        </p>
      </div>
    </li>
  </ul>
  <!--CAROUSEL BXSLIDER EVENTOS-->
</div>
</div>
</div>
</div>

</main>
<!--CIERRA ETIQUETA MAIN-->

<!--Pié de página-->
<footer data-rol="footer">
  <p class="paragraph">Lorem ipsum dolor sit amet, m est, repudiandae ut doloribus odit?</p>
</footer>
<!--Pié de página-->
</body>
</html>