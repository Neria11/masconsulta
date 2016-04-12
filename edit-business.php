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
		<span class="icon-home"></span> <a href="index.php">Inicio</a> / Editar negocio
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
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Datos del negocio local</h2>
							<form action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="" class="tag">Pseudónimo:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Nombre del negocio:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Categoria:</label>
									<select name="" id=""  class="control control-block">
										<option value="">Selecciona una categoría</option>
										<option value="">Albañil</option>
										<option value="">Albañil</option>
										<option value="">Albañil</option>
										<option value="">Albañil</option>
										<option value="">Albañil</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="tag">Descripción:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="tag">Eslógan:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="tag">Servicios:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="tag">Correo electrónico:</label>
									<input type="email" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Teléfono:</label>
									<input type="tel" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Fecha en que inició el negocio:</label>
									<input type="date" required="" class="control control-block">
								</div>
								<div class="form-group">
									<input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
								</div>
							</form>
						</div>  
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Logotipo</h2>
							<div class="responsive-image" style="width:220px;">
								<img src="img/nologo.png" alt="avatar">
								<span role-action="lauch-modal" data-target="uno" class="mc-button mc-button-sm mc-button-success"> Actualizar</span>
							</div>
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
						</div>  
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Dirección</h2>
							<form action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="" class="tag">Calle:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Número exterior:</label>
									<input type="number" required="" min="1" class="control control-md">
								</div>
								<div class="form-group">
									<label for="" class="tag">Número interior:</label>
									<input type="number" required="" min="1" class="control control-md">
								</div>
								<div class="form-group">
									<label for="" class="tag">Colonia:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">País:</label>
									<select name="" id=""  class="control control-block">
										<option value="">Selecciona un país</option>
										<option value="">México</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="tag">Estado:</label>
									<select name="" id=""  class="control control-block">
										<option value="">Selecciona un estado</option>
										<option value="">Hidalgo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="tag">Municipio:</label>
									<select name="" id=""  class="control control-block">
										<option value="">Selecciona un estado</option>
										<option value="">Hidalgo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="tag">Código postal:</label>
									<input type="tel" required="" class="control control-block">
								</div>
								<div class="form-group">
									<input type="submit" class="mc-button mc-button-md mc-button-info" value="Guardar cambios">
								</div>
							</form>
						</div>  
					</div>
				</div>
			</div>

		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Filosofía organizacional</h2>
							<form action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="" class="tag">Misión:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="tag">Visión:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="tag">Valores:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
								</div>
							</form>
						</div>  
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Horarios</h2>
							<form action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="" class="tag">Lunes:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<label for="" class="tag">Martes:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<label for="" class="tag">Miércoles:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<label for="" class="tag">Jueves:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<label for="" class="tag">Viernes:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<label for="" class="tag">Sábado:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<label for="" class="tag">Domingo:</label>
									<input type="time" required="" class="control control-md control-inline">
									<input type="time" required="" class="control control-md control-inline">
								</div>
								<div class="form-group">
									<input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
								</div>
							</form>
						</div>  
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Redes sociales</h2>
							<form action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="" class="tag">Facebook:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Twitter:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Google Plus:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Youtube:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Instagram:</label>
									<input type="tel" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Pinterest:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<label for="" class="tag">Linked In:</label>
									<input type="text" required="" class="control control-block">
								</div>
								<div class="form-group">
									<input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
								</div>
							</form>
						</div>  
					</div>
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Mapa</h2>
							<!--MAPA-->
							<div class="map-container">
								<div id="map"></div>
							</div>
							<!--MAPA-->
						</div>  
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="container">
						<div class="u-wrapper">
							<h2 class="title">Datos adicionales</h2>
							<form action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label for="" class="tag">Ragno de precios:</label>
									<select name="" id=""  class="control control-block">
										<option value="">Selecciona un rango de precios</option>
										<option value="">$</option>
										<option value="">$$</option>
										<option value="">$$$</option>
										<option value="">$$$$$</option>
									</select>
								</div>
								<div class="form-group">
									<label for="" class="tag">Paquete contratado:</label>
									<input type="text" required="" disabled="" class="control control-block" value="Prueba 30 Días">
									<a href="#" class="mc-button mc-button-block mc-button-success">Actualizar paquete</a>
								</div>
								<div class="form-group">
									<label for="" class="tag">Descripción adicional del negocio:</label>
									<textarea name="" id="" class="control control-block"></textarea>
								</div>

								<div class="form-group">
									<input type="submit" class="mc-button mc-button-sm mc-button-info" value="Guardar cambios">
								</div>
							</form>
						</div>  
					</div>


				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		</div>
	</div>
	<!---PERFIL DE USAURIO-->




	<!--===========================================================-->
	<!--Importando scripts-->
	<!--===========================================================-->
	<script type="text/javascript" src="js/jQuery-min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/maps.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5TBI-mv40ZDcDwBjoZjjjKNMx7XJz8EM&signed_in=true&callback=initMap"
	async defer></script>
	<script type="text/javascript" src="js/fancybox.js"></script>
	<script type="text/javascript">
	$( document ).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
</body>
</html>