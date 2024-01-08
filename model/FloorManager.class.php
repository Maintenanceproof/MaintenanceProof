<?php

	/**
	 * Class to Manage User
	 * @author JD <jd@maintenanceproof.com>
	 */

	class FloorManager extends DBManager {

		public function addFloor(Floor $floor){
			$query       = $this->db->prepare( "INSERT INTO add_floor (Property_ID, block_id, Floor, status) VALUES (:Property_ID, :block_id, :Floor, :status);" );
			return $query->execute( array(
				"Property_ID" 			=> $floor->getProperty_ID(),
				"block_id" 				=> $floor->getblock_id(),							
				"Floor" 				=> $floor->getFloor(),
				"status" 				=> $floor->getstatus(),
			) );
		}

		public function editFloor(Floor $floor){
			$query       = $this->db->prepare( "UPDATE `add_floor` SET `Property_ID`= :Property_ID, `block_id`= :block_id, `Floor`= :Floor, `status`= :status WHERE `ID` = :ID;" );
			return $query->execute( array(			
				"Property_ID" 			=> $floor->getProperty_ID(),
				"block_id" 				=> $floor->getblock_id(),							
				"Floor" 				=> $floor->getFloor(),
				"status" 				=> $floor->getstatus(),
				"ID" 					=> $floor->getID(),
			) );
		}

		public function deleteFloor($ID) {
        	$query = $this->db->prepare("DELETE FROM `add_floor` WHERE `ID` = :ID;");
        	return $query->execute(['ID' => $ID]);
    	}


	}

?>