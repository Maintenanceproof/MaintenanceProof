<?php
session_start();
include "../model/DBManager.class.php";


	#unset everything successful log out

    unset($_SESSION['user_name']);
	unset($_SESSION['user_id']);
	unset($_SESSION['user_password']);
	unset($_SESSION['user_type']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_status']);
	unset($_SESSION['property_edit']);
	unset($_SESSION['propertyId']);

	$_SESSION['valid'] = false;

	header( "location: log_in_EN.php" );
    	


?>