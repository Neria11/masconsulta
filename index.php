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
  <script type="text/javascript" src="js/react.js"></script>
  <script type="text/javascript" src="js/scroll.js"></script>
  <script type="text/javascript" src="js/bxslider.js"></script>
  <script type="text/javascript" src="js/fancybox.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  

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
    <a href="index.php" class="max-link"></a>
    <img src="img/logo-desktop.jpg" alt="">
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


<!--ABRE ETIQUETA MAIN-->
<main>

  <!--Contenedor de datos-->
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="container" id="welcome-section">
        <div class="u-wrapper">
          <h2 class="title uppercase">
            BIENVENIDO
            <span class="badge badge-underline pull-right " id="usuarios-online"></span>
            <span class="badge light-gray pull-right" id="total-visitas"></span> 
          </h2> 
          <!--CAROUSEL BXSLIDER-->
        <!--<ul class="bxslider" id="bxslider-2">
          <li><img src="img/tol.jpg"></li>
          <li><img src="img/tol.jpg"></li>
          <li><img src="img/tol.jpg"></li>
          <li><img src="img/tol.jpg"></li>
          <li><img src="img/tol.jpg"></li>
        </ul>-->
        <!--CAROUSEL BXSLIDER-->
        <!--BUSCADOR CODE-->
        <form action="" method="POST" name="frm_buscador" id="frm_buscador">
          <div class="searcher">
            <div class="row">
              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
               <input type="text" class="searcher-input" name="buscador" id="buscador" placeholder="Buscar...">
             </div>
             <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
               <button type="button" class="searcher-button" value="Consultar" id="start-search"> 
                <span class="icon-search">Buscar</span> 
              </button>
            </div>
          </div>
        </div>
      </form>
      <!--BUSCADOR CODE-->
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  <div class="container" >
    <div class="u-wrapper">
      <h2 class="title">
        Negocios 
        <span class="category badge green cursor" id="randomBusiness">Aleatorios</span>
      </h2>
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
  </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
  <div class="container" >
    <div class="u-wrapper no-background">
      <h2 class="title">
        Nueva publicación
      </h2> 
      <!--NUEVA PUBLICACION VIDEO FOTO O TEXTO-->
      <!--SECTION TABS-->
      <div class="tabs">
        <input type="radio" name="tabs" id="tab1" checked >
        <label for="tab1" class="tab">
          <i class="fa fa-html5"></i><span>VIDEO</span>
        </label>
        <input type="radio" name="tabs" id="tab2">
        <label for="tab2" class="tab">
          <i class="fa fa-css3"></i><span>IMAGEN</span>
        </label>
        <input type="radio" name="tabs" id="tab3">
        <label for="tab3" class="tab">
          <i class="fa fa-code"></i><span>TEXTO</span>
        </label>


        <div id="tab-content1" class="tab-content">
          <form action="models/post-publication.php" class="form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" required="" id="" class="control control-block" value="" placeholder="Título de la publicación">
            </div>
            <div class="form-group">
              <input type="text" required="" id="" class="control control-block" value="" placeholder="Link del video. Ej: https://www.youtube.com/watch?v=-24yPFATrtU">
            </div>
            <div class="form-group">
              <textarea name="" class="control control-block" id="" required="" placeholder="Descripción"></textarea>
            </div>
              <!--<div class="video">
                <iframe allowfullscreen src="https://www.youtube.com/embed/P29oO3piQjc"></iframe>
              </div>-->
              <div class="form-group">
                <input type="submit" class="mc-button mc-button-sm mc-button-info pull-right" value="Publicar">
              </div>
            </form>
          </div>


          <div id="tab-content2" class="tab-content">
           <form action="" class="form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" required="" id="" class="control control-block" value="" placeholder="Título de la publicación">
            </div>
            <div class="form-group">
              <input type="file" required="" id="" class="control control-block" value="" placeholder="Selecciones una imagen">
            </div>
            <div class="form-group">
              <textarea name="" class="control control-block" id="" required=""  placeholder="Descripción"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="mc-button mc-button-sm mc-button-info pull-right" value="Publicar">
            </div>
          </form>
        </div>


        <div id="tab-content3" class="tab-content">
          <form action="" class="form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" required="" id="" class="control control-block" value="" placeholder="Título de la publicación">
            </div>
            <div class="form-group">
              <textarea name="" class="control control-block" id="" required=""  placeholder="Descripción"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="mc-button mc-button-sm mc-button-info pull-right" value="Publicar">
            </div>
          </form>
        </div> 
      </div>
      <!--SECTION TABS-->


      <!--NUEVA PUBLICACION VIDEO FOTO O TEXTO-->
    </div>
  </div>
  <div id="resultPublications">
   <div class="row" id="itemsPublications">
   </div>
   <!-- <p class="mc-button mc-button-md mc-button-warning center" data-att="infinite_scroll"> Cargar más</p>-->
   <div class="scrollExtend-loading" id="gif-loading"></div>
 </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  <div class="container">
    <div class="u-wrapper">
     <h2 class="title">
      Categorías
      <span class="category badge green cursor" id="randomCategories">Aleatorio</span>
    </h2>
    <ul class="categories" id="itemsCategories">
    </ul>
  </div>
</div>

<!--ACORDIONES-->
<div class="accordion">
  <div class="accordion-header red">
    <p class="title uppercase"><span class="toggle-icon"><span class="icon-plus">+</span></span> Promociones </p>
  </div>
  <div class="accordion-content">
    <ul class="bxslider" id="bxslider-3">
      <li>
       <div class="event">
        <a href="#" class="max-link"></a>
        <figure class="event-wallpaper">
          <img src="http://placehold.it/480x230" alt="Imagen evento">
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
          <img src="http://placehold.it/480x230" alt="Imagen evento">
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
<!--ACORDIONES-->


</div>
</div>

</main>
<!--CIERRA ETIQUETA MAIN-->

<!--REDES SOCIALES-->
<div class="social" id="social_area">
  <ul class="networks">
    <li class="net">
      <a href=""><span class="icon-*">F</span></a>
    </li>
    <li class="net">
      <a href=""><span class="icon-*">G</span></a>
    </li>
    <li class="net">
      <a href=""><span class="icon-*">T</span></a>
    </li>
    <li class="net">
      <a href=""><span class="icon-*">Y</span></a>
    </li>
  </ul>
</div>
<!--REDES SOCIALES-->

<!--Ir arriba-->
<div class="go-up" id="go-up">
  <span class="icon-*">^</span>
</div>
<!--Ir arriba-->

<!--Pié de página-->
<footer data-rol="footer">
  <p class="paragraph">Lorem ipsum dolor sit amet, m est, repudiandae ut doloribus odit?</p>
</footer>
<!--Pié de página-->
</body>
</html>