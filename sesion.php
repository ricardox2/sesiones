
<?php 
	session_start();
	//elimina la sesion sesion1
	//unset($_SESSION['sesion1']);

	//crear las sesiones
	if (!isset($_SESSION['sesion1'])) {
		$_SESSION['sesion1'] = 0;
		$_SESSION['usuario'] ="Juanito23";
	}else{
		$_SESSION['sesion1']++;
	}
 ?>

 <p>Usted establecio sesion: <?php echo $_SESSION['sesion1'] ?> veces</p>
 <p>El usuario que establecio sesion: <?php echo $_SESSION['usuario'] ?></p>

