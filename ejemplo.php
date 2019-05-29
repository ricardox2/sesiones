<?php
session_start(); 
if (isset($_POST['btnEnviar'])) {
	$_SESSION[$_POST['txtArt']] = $_POST['txtPre'];
}
if(isset($_POST['btnLimpiar'])){
	session_unset();
	session_destroy();
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h4>Ejemplo de sesion</h4>
	<form action="ejemplo.php" method="post" accept-charset="utf-8">
		<label>Articulo</label>
		<input type="text" name="txtArt" value=""><br>
		<label>Precio</label>
		<input type="text" name="txtPre" value="">
		<br>
		<button type="submit" name="btnEnviar">Enviar</button>
		<button type="submit" name="btnLimpiar">Limpiar</button>

	</form>
	<?php 
	if (count($_SESSION)>0) {?>
		<table>
			<tr>
				<th>Articulo</th>
				<th>Precio</th>
			</tr>			
            <?php  foreach ($_SESSION as $clave => $valor) {?>
            <tr>
				<td><?php echo $clave; ?></td>
				<td><?php echo $valor; ?></td>
			</tr>
            <?php } ?>
			
		</table>
		<?php
	}
	 ?>
</body>
</html>