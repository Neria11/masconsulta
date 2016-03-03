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
</head>
<body>


	<!--Start Header Navigation -->
	<header class="header">
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
					<a href="login.php" id="selected">  <span></span> Login </a>
				</li>
				<li>
					<a href="dashboard.php">  <span></span> Dashboard </a>
				</li>
			</ul>
		</nav>
	</header>
	<!--End Header Navigation -->

	<!--LOGIN CONTENT-->
	<div class="login">
		<div class="login-header">
			<h1 class="lgn-title">Iniciar sesión</h1>
		</div>
		<form action="models/security/session.php" method="POST" class="form">
			<div class="login-body">
				<div class="form-group">
					<label for="username" class="tag">Usuario:</label>
					<input type="text" name="username" id="username" required="" class="control control-block" required="">
				</div>
				<div class="form-group">
					<label for="password" class="tag">Contraseña:</label>
					<input type="password" name="password" id="password" required="" class="control control-block" required="">
				</div>
			</div>
			<div class="login-footer">
				<a href="registry.php" class="mc-button mc-button-sm mc-button-link pull-left">Registrarme</a>
				<input type="submit" class="mc-button mc-button-sm mc-button-success pull-right" value="Iniciar sesión">
			</div>
		</form>
	</div>
	<!--LOGIN CONTENT-->


</body>
</html>