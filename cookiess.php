<?php 
	$valor="Computacion e informatica";
	setcookie("nombre",$valor, time()+60*60);
	setcookie("cookieiegb", $valor, time()+3600,"/cook","example.com");


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<p>Ejemplo de cookies</p>
 
 </body>
 </html>