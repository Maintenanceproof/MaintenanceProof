<?php

	/**
	 * Class to Manage User
	 * @author JD <jd@maintenanceproof.com>
	 */

	class UserManager extends DBManager {

		public function addUser(User $user){
			$query       = $this->db->prepare( "INSERT INTO user (Name, Password, User_Type, Email, Verification_Code, Status) VALUES (:Name, :Password, :User_Type, :Email, :Verification_Code, :Status);" );
			return $query->execute( array(
				"Name" 					=> $user->getName(),
				"Password" 				=> $user->getPassword(),
				"User_Type" 			=> $user->getUser_Type(),							
				"Email" 				=> $user->getEmail(),
				"Verification_Code" 	=> $user->getVerification_Code(),
				"Status" 				=> $user->getStatus(),
			) );
		}

		public function editUser(User $user){
			$query       = $this->db->prepare( "UPDATE `user` SET `Password`= :Password, `Email`= :Email, `Name`= :Name WHERE `User_ID` = :User_ID;" );
			return $query->execute( array(			
				"Password" 			=> $user->getPassword(),
				"Email" 			=> $user->getEmail(),
				"Name" 				=> $user->getName(),
				"User_ID" 			=> $user->getUser_ID(),
			) );
		}

		public function editUserStatus(User $user){
			$query       = $this->db->prepare( "UPDATE `user` SET `Status`= :Status WHERE `Email` = :Email;" );
			return $query->execute( array(			
				"Status" 			=> $user->getStatus(),
				"Email" 			=> $user->getEmail(),
			) );
		}

		public function editUserType(User $user){
			$query       = $this->db->prepare( "UPDATE `user` SET `User_Type`= :User_Type WHERE `Email` = :Email;" );
			return $query->execute( array(			
				"User_Type" 		=> $user->getUser_Type(),
				"Email" 			=> $user->getEmail(),
			) );
		}

		public function editUserPassword(User $user){
			$query       = $this->db->prepare( "UPDATE `user` SET `Password`= :Password WHERE `Verification_Code` = :Verification_Code;" );
			return $query->execute( array(			
				"Password" 			=> $user->getUser_Type(),
				"Verification_Code" => $user->getVerification_Code(),
			) );
		}

		public function getUserId( $email ) {
			$query = $this->db->prepare( "SELECT `User_ID` FROM `user` WHERE `Email` = ? AND `Status` = 1");
			$query->execute( [ $email ] );
			$UserId = $query->fetch( PDO::FETCH_ASSOC );
			return new Userid($UserId);
		}


	}

?>