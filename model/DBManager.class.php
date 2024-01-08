<?php

	/**
	 * Class DBManager
	 * Handles the conenction between our application and the database USERS
	 * @author JD <jayd199787@gmail.com>
	 * @date  June 28 2021
	 */
class DBManager {
 
		const HOST   = "localhost";
		const USER   = "root";
		const PASS   = "guitare83";
		const DBNAME = "maintenanceproof_database";

		// const HOST = "localhost";
		// const USER = "h5250794";
		// const PASS = "jayd9409406996";
		// const DBNAME = "h5250794_herzing";

		protected $db = null;

		public function __construct() {
			//try to connect to the database using the provided credentials
			//if the connection works, it will keep the persistence, else it will throw an error
			try {
				$this->db = new PDO( "mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USER, self::PASS );

				//show mysql errors
				$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$this->db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

				//show character encoding
				$this->db->exec( "set names utf8" );
			} catch ( Exception $e ) {
				die( "Database Connection Error: " . $e->getMessage() );
			}
		}
	}