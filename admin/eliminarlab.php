<?php
	$conexion=mysqli_connect("sql7.freemysqlhosting.net","sql7127884","vzyPqIBtKD","sql7127884");
	mysqli_set_charset($conexion,"utf8");
	
	$peticion="DELETE FROM laboratorio where idlaboratorio='".$_GET['id']."' ";
	$rs=mysqli_query($conexion,$peticion);

	mysqli_close($conexion);
?>
<script type="text/javascript">
	
	window.location="laboratorios.php";
</script>