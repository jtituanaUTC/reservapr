<!DOCTYPE html>
<html>
<head>
<title>SIS-LAB</title>
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
<center><IMG SRC="img/utc.png" WIDTH=178 HEIGHT=180 BORDER=2 VSPACE=3 HSPACE=3 ALT=""></center>
<center><h2>SISTEMA DE RESERVA DE LABORATORIOS</h2/></center>
</form>

<center><div>
	¿Ya eres usuario?</br>
<form action="logprofesor.php" method="POST">
<input  type="text" name="usuario" placeholder="Nombre de usuario">
<input  type="text" name="contrasena" placeholder="Contraseña">
<input  type="submit" value="Ingresar">
<br>
¿Eres nuevo Usuario?
<br/>
<form action="nuevoprofesor.php" method="POST">
<input type="text" name="usuario"  placeholder="Ingrese un usuario"><br>
<input type="text" name="contrasena" placeholder="Ingrese un Password"><br>
<input type="text" name="nombre" placeholder="Ingrese su nombre"><br>
<input type="text" name="apellido" placeholder="Ingrese su apellido"> <br>
<input type="text" name="cedula" placeholder="Ingrese su cedula"><br>
<input type="text" name="email" placeholder="Ingrese su email"><br>
<input type="submit" value="Registrar">
</form>
</div> </center>
</body>
<center><footer>
	 		 <h6>(c) Sistemas Distribuidos UTC-2016</h6>
</footer></center>





</html>