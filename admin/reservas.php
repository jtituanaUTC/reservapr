<?php      include "cabecera.inc"?>



<table border="1">
<th>LABORATORIO</th>
<th>CARRERA</th>
<th>DESCRIPCION</th>
<th>ESTADO</th>
<th>ACCION</th>
<?php
echo "<br>";
echo "<br>";
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	
	$peticion="SELECT idlaboratorio,numero,descripcion, estado ,nombre_carrera from laboratorio,carrera where carrera_idcarrera=idcarrera";
	$rs=mysqli_query($conexion,$peticion);
	
	while ($fila=mysqli_fetch_array($rs)) {
		$estado=$fila['estado'];
		if($estado==1){
			$diestado="reservado";	
		}else{
			$diestado="disponible";

		}

		echo '<tr';
		if($estado==1){	echo ' style="background:rgb(255,200,200);"';}else{ echo ' style="background:rgb(200,255,200);"';}
		echo '><td><center>'.$fila['numero'].'</center></td><td>'.$fila['nombre_carrera'].'</td><td>'.$fila['descripcion'].'</td><td>'.$diestado.'</td><td><a href="recibir.php?id='.$fila['idlaboratorio'].'"><button>Recibir Laboratorio</button></a></td></tr>';
	}
	mysqli_close($conexion);
?>


</table>
<?php   include "piedepagina.inc"?>