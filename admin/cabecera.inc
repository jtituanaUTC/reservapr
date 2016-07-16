<?php
session_start();
if (!isset($_SESSION['contador'])) {
	$_SESSION['contador']=0;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>PANEL DE CONTROL</title>
	<meta  http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
<!-- Versión compilada y comprimida del CSS de Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
 
<!-- Tema opcional -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
 
<!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<style type="text/css">
 body {
    color: purple;
    background-color: 	#B0C4DE }
	
	table, th, td {
	border: 1px solid black;}
	
	th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

	 <center><div id="contenedor">
	 	<header>
	 		<a href="index.php"><h1>PANEL DE CONTROL</h1></a>
	 		<h2>Reserva de laboratorios</h2>




						||<a href='reservas.php' class="botonmenu">Gestionar Reservas</a>||
						
						<a href='laboratorios.php'class="botonmenu">Gesionar Laboratorios</a>||
						
						<a href='estadisticas.php' class="botonmenu">Obtener Estadísticas</a>||

						<a href="../index.php"><button>index</button></a>
	 	</header>
	 	<section>
	 	