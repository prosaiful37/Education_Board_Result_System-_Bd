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
		 * File upload management 
		 */
		protected function fileUpload($file, $location = '', array $file_type = ['jpg','png','jpeg','gif'])
		{
			//file info
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];

			//get file extension 
			$file_array = explode('.', $file_name);
			$file_extension = strtolower(end($file_array));

			//Unique file_name
			$unique_file_name = md5(time(). rand()) .'.'.$file_extension;

			//fileUpload
			move_uploaded_file($file_tmp, $location . $unique_file_name);

			return $unique_file_name; 

		}





		/**
		 * Data create
		 */
		public function create($table, $data)
		{


			//Make 	SQL coloum form data
			$array_key = array_keys($data);
			$array_col = implode(',', $array_key);

			//Make SQL values form data
			$array_val = array_values($data);

			foreach ($array_val as $value) {

				$form_value[] = "'".$value."'";
			}

			$array_values = implode(',', $form_value);



			//Data sent to table
			$sql = "INSERT INTO $table($array_col) VALUES ($array_values)";
			$stmt = $this -> connection() -> prepare($sql);
			$stmt -> execute();

			if ($stmt) {
				return true;
			}else{
				return false;
			}

			

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
		public function delete($tbl, $id)
		{
			$sql = "DELETE FROM $tbl WHERE id='$id'";
			$stmt = $this -> connection() -> prepare($sql);
			$stmt -> execute();
			return true;


		}


		/**
		 * All data show
		 */
		public function all($tbl, $order = 'DESC')
		{
			$sql = "SELECT * FROM $tbl ORDER BY id $order";
			$stmt = $this -> connection() -> prepare($sql);
			$stmt -> execute();

			return $stmt;
		}

		

		/**
		 * sigle  data show
		 */

		// public function find($tbl, $id)
		// {
		// 	$sql = "SELECT * FROM student WHERE id='$id";
		// 	$stmt = $this -> connection() -> prepare($sql);
		// 	$stmt -> execute();

		// 	return $stmt;
			
		// }









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






