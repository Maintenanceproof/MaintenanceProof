<?php 
	session_start();
	spl_autoload_register( function ( $class_name ) {
		include "../model/".$class_name . '.class.php';
	} );
 ?>