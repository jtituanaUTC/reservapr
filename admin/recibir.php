<?php
$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");	
	$_fecha=Date("U");

   	$peticion2="UPDATE laboratorio set estado='0' where idlaboratorio=".$_GET['id']."";
	$rs2=mysqli_query($conexion,$peticion2);
		
	
	mysqli_close($conexion);
?>

<script type="text/javascript">
	
	window.location="../admin/reservas.php";
</script>
