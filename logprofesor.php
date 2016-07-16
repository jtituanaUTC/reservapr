<?php
session_start();
if (!isset($_SESSION['contador'])) {
	$_SESSION['contador']=0;
}

?>

<?php
	$contador=0;
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	$peticion="SELECT * FROM profesor WHERE usuario='".$_REQUEST['usuario']."' and contrasena='".$_REQUEST['contrasena']."'";
	$rs=mysqli_query($conexion,$peticion);

	while ($fila=mysqli_fetch_array($rs)) {
		$contador++;
		$_SESSION['usuario']=$fila['idprofesor'];
	}
	
	if ($contador>0) {

		

	echo "</br>Usuario Correcto ";
		echo "Diriguiendo  a la pagina principal";
		echo '
			<meta http-equiv="refresh" content="2; url=labs.php">

		';
		
	
	}
	else
	{

		echo "El usuario no esxiste";
		echo "Debe registrase como usuario ";
		echo '
			<meta http-equiv="refresh" content="3; url=index.php">

		';
	}
	mysqli_close($conexion);

	
		
?>
