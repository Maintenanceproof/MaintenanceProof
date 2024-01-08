<?php


include "../view/head.inc.php";
include "dbConnection.php";
include "../model/Floor.class.php";
include "../model/FloorManager.class.php";

$floorMgr = new FloorManager();



	$ID = "";
	$Property_ID = $_POST['propertyName'];
	$block_id = 0;
	$Floor = $_POST['floor_number'];
	$status = 1;

	$floor = new Floor($ID, $Property_ID, $block_id, $Floor, $status);   
            #calling Floor class

    $floorMgr->addFloor( $floor );



    header( "location: ../view/floor.php" );




?>