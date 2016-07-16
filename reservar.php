<?php
	session_start();
	$cont=0;
	
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	if($_REQUEST['estado']==0){
	$peticion="INSERT INTO reservacion VALUES(
			NULL,
			'".$_REQUEST['fecha']."',
			'".$_REQUEST['hora']."',
			' ',
			'".$_SESSION['profid']."',
			'".$_REQUEST['idlab']."'
				)";
	$rs=mysqli_query($conexion,$peticion);
	
	$peticion2="UPDATE laboratorio SET estado='1'  WHERE idlaboratorio=".$_REQUEST['idlab']."";
		$rs2=mysqli_query($conexion,$peticion2);
	
	mysqli_close($conexion);
	
	
	echo "</br>Laboratorio reservado correctamente ";
	echo '
			<meta http-equiv="refresh" content="2; url=labs.php">

		';
	

	}else{
		
		echo "El laboratorio No esta disponible por el momento";
		


echo '
			<meta http-equiv="refresh" content="2; url=labs.php">

		';


	}
?>