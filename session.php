<?php
	// Manejo de Sesiones en PHP
	session_start();
	$_Session['nombre'] = 'Juan';
	$_Session['apellido'] = 'Perez';
	// Imprimir sesiones
	echo $_Session['nombre'] . '<br/>';
	echo $_Session['apellido'] . '<br/>';
	// Destruir una variable Session
	session_destroy();
?>
