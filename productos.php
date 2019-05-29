<?php 
//Inicio la sesion
session_start();
if(isset($_POST['btnAgregar'])){
	$_SESSION[strtolower($_POST['txtProducto'])] = $_POST['txtPrecio'];
}

if (isset($_POST['btnLimpiar'])) {
	session_unset();
	session_destroy();
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Productos</title>
	<!--El meta viewport es necesario para el correcto funcionamiento de Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Añadiendo Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="col-md-4">
			<form action="productos.php" method="post" accept-charset="utf-8">
				<h4>registro de Productos</h4>
				<div class="form-group">
					<label class="control-label">Producto</label>
					<input type="text" name="txtProducto" value="" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Precio</label>
					<input type="text" name="txtPrecio" value="" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" name="btnAgregar" class="btn btn-primary">Agregar</button>
					<button type="submit" name="btnLimpiar" class="btn btn-danger">Limpiar</button>
				</div>		
			</form>

			<?php if(count($_SESSION) > 0) {?>
			<table class="table table-striped">
				<tr>
					<th>Producto</th>
					<th>Precio</th>
				</tr>
				<?php foreach ($_SESSION as $nombre => $valor) { ?>
				<tr>			
					<td><?php echo $nombre; ?></td>
					<td><?php echo $valor; ?></td>
				</tr>
				<?php } ?>
			</table>
			<?php } ?>

		</div>		
	</div>
			
			

	<!-- Añadiendo Bootstrap .JS -->
	<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>











