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
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script src="js/bxslider.js"></script>
  <script type="text/javascript" src="js/fancybox.js"></script>

  <script type="text/javascript">
  var loading = false;
  $(window).scroll(function(){
    if((($(window).scrollTop()+$(window).height())+250)>=$(document).height()){
      if(loading == false){
        loading = true;
        $('#loadingbar').css("display","block");
        $.get("models/infinite-scroll-publications.php?start="+$('#loaded_max').val(), function(loaded){
          $('body').append(loaded);
          $('#loaded_max').val(parseInt($('#loaded_max').val())+5);
          $('#loadingbar').css("display","none");
          loading = false;
        });
      }
    }
  });
 
  $(document).ready(function() {
    $('#loaded_max').val(5);
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
    <div class="container" >
      <div class="u-wrapper">
        <div id="resultPublications">
         <div class="row" id="itemsPublications">
         </div>
         <!-- <p class="mc-button mc-button-md mc-button-warning center" data-att="infinite_scroll"> Cargar más</p>-->
         <!--<div class="scrollExtend-loading" id="gif-loading"></div>-->
         <div class="scrollExtend-loading" id="loadingbar"></div>
       </div>
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