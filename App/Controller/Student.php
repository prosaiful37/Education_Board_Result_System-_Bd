<?php 

	namespace Edu\Board\Controller;
	use Edu\Board\Support\Database; 
	use PDO;

	/**
	 * Student management
	 */
	class Student extends Database
	{
		/**
		 * create student
		 */
		public function createStudent($data)
		{
			$file_name = !empty($_FILES['photo']['name']) ? $this ->fileUpload($_FILES['photo'], '../../students/') : "";

			$this -> create('student', [
				'name'		=> $data['name'],
				'roll'		=> $data['roll'],
				'reg'		=> $data['reg'],
				'board'		=> $data['board'],
				'inst'		=> $data['inst'],
				'exam'		=> $data['exam'],
				'year'		=> $data['year'],
				'photo'		=> $file_name,
			]);
		}



	/**
	 * All student show 
	 */
	public function allStudents()
	{
		$data =  $this -> all('student');

		return $data -> fetchAll(PDO::FETCH_ASSOC);

	}


	/**
	 * single data show
	 */
	// public function singleDataStudent($id)
	// {
	// 	$data = $this -> find('student', $id);
	// 	return $data -> fetchAll(PDO::FETCH_ASSOC);

	// }


	  
	/**
	 * search student
	 */

	public function studentSearch($search)
	{
		$data = $this -> customQuery("SELECT * FROM student WHERE name LIKE '%$search%' || roll LIKE '%search%' || reg LIKE '%search%'");

		return $data -> fetchAll(PDO::FETCH_ASSOC);
	}










	}

 ?>

