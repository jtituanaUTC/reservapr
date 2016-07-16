<?php      include "cabecera.inc"?>


<?php

$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	ECHO "<center><h5>SELECCIONE EL LABORARTORIO</h5></center>";	

echo "<form action='estadisticas.php' method='POST'>";

echo "<center><select name='lab' onchange='capturar(this.value)'></center>";
   	$peticion2="SELECT * FROM laboratorio ";
	$rs2=mysqli_query($conexion,$peticion2);	
	while ($fila2=mysqli_fetch_array($rs2)) {
		
	echo "<option  value='".$fila2["idlaboratorio"]."'>".$fila2["numero"]."</option>"; 

		
	}
echo "</select>";
echo "<input  type='submit' value='GENERAR ESTADISTICAS'  name='en'>";


echo "</form>";

	
	
	
	mysqli_close($conexion);
?>
<?php
	$num=0;
	if(isset($_POST['en'])){

	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");

	$peticion="select numero,fecha_reserva,hora_inicio,nombre_prof, apellido_prof from laboratorio, profesor,reservacion where idlaboratorio=laboratorio_idlaboratorio and profesor_idprofesor=idprofesor and idlaboratorio=".$_REQUEST['lab']."";
	$rs=mysqli_query($conexion,$peticion);
	echo "<center><div>";
	echo "<h5>LISTA DE USUARIOS DEL LABORATORIO</h5>";
	
	echo "<table width='200' border='1'>";
		
	echo "<th>LABORATORIO</th><th>FECHA</th><th>HORA</th></th><th>NOMBRE PROFESOR</th></th><th>APELLIDO PROFESOR</th></th>";
	
	while ($fila=mysqli_fetch_array($rs)) {
		echo "<tr>";
		echo "<td>".$fila['numero']."</td>";
		echo "<td>".$fila['fecha_reserva']."</td>";
		echo "<td>".$fila['hora_inicio']."</td>";
		echo "<td>".$fila['nombre_prof']."</td>";
		echo "<td>".$fila['apellido_prof']."</td>";
		
		}
		
		
		
		echo "</tr>";
		
	
	
	echo "</table>";
	echo "<br>";
		echo "DOCENTE QUE MAS A REALIZADO RESERVAS:";
		echo "<table border='1'>";
		$peticion="select  nombre_prof,apellido_prof ,count(profesor_idprofesor) as num from reservacion, profesor where  profesor_idprofesor=idprofesor and  laboratorio_idlaboratorio=".$_REQUEST['lab']."  group by(profesor_idprofesor) order by count(profesor_idprofesor) desc";
		$rs=mysqli_query($conexion,$peticion);
	
	while ($fila=mysqli_fetch_array($rs)) {
		
		echo "<tr><td>".$fila['nombre_prof']."</td><td>".$fila['apellido_prof']."</td><td>".$fila['num']."</td></tr>";
		}
	echo "</table>";
	echo "</div></center>";
	mysqli_close($conexion);
	}
?>
<?php   include "piedepagina.inc"?>