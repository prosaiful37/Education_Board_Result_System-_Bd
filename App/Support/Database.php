<?php 

	require_once "../../config.php"
	namespace Edu\Board\Support;
	use PDO
	
	
	/**
	 * Database Management
	 */
	abstract class Database
	{
		/**
		 * server information
		 */
		private $host = HOST;
		private $user = USER;
		private $pass = PASS;
		private $db = DB;
		private $connection;

		/**
		 * Database connection
		 */
		protected function connection()
		{
			$connection new PDO("mysql:host=". $this -> host .";db_name=" . $this -> db, $this -> user,  $this -> pass);
		}





	}






	






















 ?>