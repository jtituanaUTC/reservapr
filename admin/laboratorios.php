
<?php      include "cabecera.inc"?>




<table border="1">
<th>NUMERO</th>
<th>DESCRIPCION</th>
<th>ESTADO</th>
<th>CARRERA</th>
<th>ACCION</th>

<?php
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	
	$peticion="SELECT * from laboratorio, carrera where idcarrera=carrera_idcarrera  order by numero";
	$rs=mysqli_query($conexion,$peticion);
	
	while ($fila=mysqli_fetch_array($rs)) {
		
		echo '<tr><td>'.$fila['numero'].'</td><td>'.$fila['descripcion'].'</td><td>'.$fila['estado'].'</td><td>'.$fila['nombre_carrera'].'</td></td><td><a href="eliminarlab.php?id='.$fila['idlaboratorio'].'"><button>Eliminar</button></a></td></tr>';
	}
	mysqli_close($conexion);
?>

<tr>
	<form action="nuevolaboratorio.php" method="POST">
		
		<td><input  type="text" name="numero" /></td>
		<td><input  type="text" name="descripcion" /></td>
		<td><input  type="text" name="estado" value="0" /></td>
		<td>
			<select name="carrera">
			<?php
					$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
					mysqli_set_charset($conexion,"utf8");
					
					$peticion="SELECT * from carrera ";
					$rs=mysqli_query($conexion,$peticion);
					
					while ($fila=mysqli_fetch_array($rs)) {
						echo '<option value="'.$fila['idcarrera'].'">'.$fila['nombre_carrera'].'</option>';
						
					}
					mysqli_close($conexion);
				
				?>
			</select>
		</td>
		
		<td><input type="submit" value="Nuevo"></td>
		
	</form>

</tr>
</table>
<?php   include "piedepagina.inc"?>