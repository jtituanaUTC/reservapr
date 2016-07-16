

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


<center><h2>SISTEMA DE RESERVA DE LABORATORIOS</h2/></center>
<?php
	

session_start();
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	$peticion="SELECT  idprofesor,nombre_prof, apellido_prof FROM profesor where idprofesor=".$_SESSION['usuario']." ";
	$rs=mysqli_query($conexion,$peticion);
	
	while ($fila=mysqli_fetch_array($rs)) {
		$_SESSION['profid']=$fila['idprofesor'];
		echo "<label>BIENVENIDO</label>";
		echo "<p>".$fila['nombre_prof']." ".$fila['apellido_prof']."</p>";
		
		
		
	}
	
	echo "<form method='POST'>
			<input type='submit' name='CerrarSesion' value='Cerrar Sesion'>
			<form>";

	
?>
<?php
//Al usar el boton se cierra la sesion
 if (isset($_POST['CerrarSesion'])) 
{
session_destroy();

    //Y redirecciona
    header("Location: index.php"); 
}
?>
<?php

$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	ECHO "<center><h3>SELECCIONA LA CARRERA</h3></center>";	

echo "<form action='labs.php' method='POST'>";

echo "<center><select name='carrera' onchange='capturar(this.value)'></center>";
   	$peticion2="SELECT * FROM carrera ";
	$rs2=mysqli_query($conexion,$peticion2);	
	while ($fila2=mysqli_fetch_array($rs2)) {
		
	echo "<option  value='".$fila2["idcarrera"]."'>".$fila2["nombre_carrera"]."</option>"; 

		
	}
echo "</select>";
echo "<input  type='submit' value='CONTINUAR'  name='en'>";


echo "</form>";

	
	
	
	mysqli_close($conexion);
?>	

<?php
	$idlab=0;
	$num=0;
	if(isset($_POST['en'])){
	$_SESSION['idcar']=$_POST['carrera'];

	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");

	$peticion="select idlaboratorio,numero, nombre_carrera,descripcion, estado from carrera, laboratorio  where   carrera_idcarrera=idcarrera and idcarrera=".$_SESSION['idcar']."";
	$rs=mysqli_query($conexion,$peticion);
	echo "<center><div>";
	echo "<h3>LISTA DE LABORATORIOS</h3>";
	
	echo "<table width='200' border='1'>";
	
	echo "<th>NUMERO</th><th>CARRERA</th><th>DESCRIPCION</th></th><th>FECHA</th></th><th>HORA</th></th><th>ESTADO</th><th>ACCION</th>";
	
	while ($fila=mysqli_fetch_array($rs)) {
		echo "<tr>";
		echo "<td>".$fila['numero']."</td>";
		echo "<td>".$fila['nombre_carrera']."</td>";
		echo "<td>".$fila['descripcion']."</td>";
		echo "<form action='reservar.php' method='GET' name='res' >";
		echo "<td><input type=\"date\" name=\"fecha\"></td>";
		echo "<td><input type=\"time\" name=\"hora\"></td>";
		if($fila['estado']==0){
			echo "<td  bgcolor='#00ff00' >disponible</td>";
			$num=0;
			
		}else{
			echo "<td  bgcolor='#FF0000' >reservado</td>";
			$num=1;
		}
		$idlab=$fila['idlaboratorio'];
		echo "<td><input type='submit' value='Reservar'><input type='hidden' name='estado' size='1' value='$num'><input type='hidden' name='idlab' size='1' value='$idlab'></td>";
		echo "</form>";
		
		
		echo "</tr>";
		
	}
	
	echo "</table>";
	
	
	
	
	echo "</div></center>";
	mysqli_close($conexion);
	}
?>

</body>
<center><footer>
	 		 <h6>(c) Sistemas Distribuidos UTC-2016</h6>
</footer></center>





</html>