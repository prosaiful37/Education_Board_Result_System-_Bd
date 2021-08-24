<?php 

	namespace Edu\Board\Controller;
	use Edu\Board\Support\Database; 
	// use PDO;

	/**
	 * Student management
	 */
	class Result extends Database
	{
		public function addResult($data)
		{
			$this -> create('results', [
				'student_id'	=> $data['student_id'],
				'bangla'		=> $data['bangla'],
				'english'		=> $data['english'],
				'math'			=> $data['math'],
				'social'		=> $data['social_science'],
				'science'		=> $data['science'],
				'religion'		=> $data['religion'],

			]);
		}

	}

 ?>

