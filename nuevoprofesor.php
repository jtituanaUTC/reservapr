	<?php
	$contador=0; 
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	$peticion="SELECT * FROM profesor WHERE usuario='".$_POST['usuario']."'";
	$rs=mysqli_query($conexion,$peticion);

	while ($fila=mysqli_fetch_array($rs)) {
		$contador++;
		
	}
	if($contador==0){
	$peticion="INSERT INTO profesor VALUES(
			NULL,
			'".$_POST['nombre']."',
			'".$_POST['apellido']."',
			'".$_POST['cedula']."',
			'".$_POST['email']."',
			'".$_POST['usuario']."',
			'".$_POST['contrasena']."'
				)";
	$rs=mysqli_query($conexion,$peticion);
	
	mysqli_close($conexion);
echo '
	<script type="text/javascript">
	window.location="logprofesor.php?usuario='.$_POST['usuario'].'&contrasena='.$_POST['contrasena'].'"
	</script>';
}else{

echo '
	<script type="text/javascript">
	window.location="labs.php";
	</script>';


}
?>