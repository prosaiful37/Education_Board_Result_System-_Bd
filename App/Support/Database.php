<?php  
	
	namespace Edu\Board\Support;
	
	use PDO;

	/**
	 * Database  Managements
	 */
	abstract class Database
	{
		
		/**
		 * Server Information 
		 */
		private $host = HOST;
		private $user = USER;
		private $pass = PASS;
		private $db =  DB ;
		private $connection;

		/**
		 * Database connection 		 
		 */
		private function connection()
		{			

			return $this -> connection = new PDO("mysql:host=". $this -> host .";dbname=". $this -> db , $this -> user , $this -> pass);
				
		}


		/**
		 * Data create
		 */
		public function create()
		{
			
		}




		/**
		 * find data by id
		 */
		public function find($id)
		{
			
		}


		/**
		 * delete data by id
		 */
		public function delete($id)
		{
			
		}


		/**
		 * All data show
		 */
		public function all($tbl)
		{
			
		}









		/**
		 * Data Check method
		 */
		public function dataCheck($tbl, array $data, $condation = 'AND')
		{

			foreach($data as $key => $val){
				$query_string = $key . "= '$val' $condation ";

			}

			$query_array = explode(' ',  $query_string);
			array_pop($query_array);
			array_pop($query_array);

			$final_qeury_string = implode(' ', $query_array);


			$stmt = $this -> connection() -> prepare("SELECT * FROM $tbl WHERE $final_qeury_string");
			$stmt -> execute();

			$num =  $stmt -> rowCount();

			return[
				'num'	=> $num,
				'data'	=> $stmt,
			];
		}


		//user password update
		public function update($tbl, $id, $data)
		{
			$query_string = '';
			foreach( $data as $key => $val){
				$query_string .= "$key = '$val' , ";
			}

			$query_array = explode(' ',  $query_string);
			array_pop($query_array);
			array_pop($query_array);

			$final_qeury_string = implode(' ', $query_array);
			$stmt = $this -> connection() -> prepare("UPDATE $tbl SET $final_qeury_string WHERE id='$id'");
			$stmt -> execute();
		}



			


	}






