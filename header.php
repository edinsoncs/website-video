<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Buscador de videos virales en internet, la forma mas entretenida llego mivideo.com made by viaintimedia" />
	<meta name="keywords" content="videos virales en internet, masvideos, el mundo del video viral, videos virales vine, videos para entrenerme, videos de youtube" />
	<title>MiVideo.Com</title>
	<base href="http://viainti.com/video/">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/prefixfree.min.js"></script>
	<script src="js/video.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-544f11f2586f41c5" async="async"></script>
</head>

<body>
	<div class="cerrar" onclick="borrar()"></div>
		<div class="compartir">
			<button class="Facebook">Compartir en Facebook</button>
			<button class="Twitter">Compartir en Twitter</button>
			<button class="Google">Compartir en Google+</button>
		</div>
	
	<header id="cabezeraPrincipal">
		<h2 class="logoTitle blanco margenAmbos"><a class="itemLink"href="index.php">MiVideo</a></h2>
		<form action="buscar.php" method="GET" class="enlinea">
			<input type="text" name="buscarVideo" class="buscadorTitle margenAmbos" value="<? echo $_POST['buscarVideo']; ?>" placeholder="Realiza cualquier busqueda de video: Virales, Humor, Musica" >
			<input type="submit" class="submit" value="Buscar">
		</form>	
		<button id="compart" class="compartirTitle margenAmbos">COMPARTIR</button>
		
	</header>

	<section id="contenidoPrincipal">
		<nav class="menuIzquierda">
			<ul class="contenedorPrimario">
				<li  class="el-icon-fire"><a href="#">Home</a></li>
				<li class="el-icon-music"><a href="buscar.php?buscarVideo=billboard">Music</a></li>
				<li class="el-icon-group-alt"><a href="buscar.php?buscarVideo=virales">Comedy</a></li>
				<li class="el-icon-reddit"><a href="buscar.php?buscarVideo=juegagerman">Games</a></li>
				<li class="el-icon-record"><a href="buscar.php?buscarVideo=smoshtv">Enternainment</a></li>
				<li class="el-icon-play"><a href="buscar.php?buscarVideo=blender">Animation</a></li>
				<li class="el-icon-globe-alt"><a href="buscar.php?buscarVideo=espn">Sports</a></li>
			</ul>
		</nav>