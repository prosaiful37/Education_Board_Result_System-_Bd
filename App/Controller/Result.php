<?php 

	namespace Edu\Board\Controller;
	use Edu\Board\Support\Database; 
	use PDO;

	/**
	 * Student management
	 */
	class Result extends Database
	{
		/**
		 * add result
		 */
		public function  addResult($data)
		{
			$this -> create('results', [
				'student_id'	=> $data['student_id'],
				'bangla'		=> $data['bangla'],
				'english'		=> $data['english'],
				'math'			=> $data['math'],
				'social'		=> $data['social'],
				'science'		=> $data['science'],
				'religion'		=> $data['religion'],
			]);
		}


		/**
		 * search Result 
		 */
		public function  serachResult($exam, $board, $year, $roll, $reg)
		{
			$data = $this -> customQuery("SELECT * FROM student INNER JOIN results ON student.id=results.student_id WHERE student.exam='$exam' AND student.roll='$roll' AND student.reg='$reg' AND student.board='$board' AND student.year='$year' ");

			return $data -> fetch(PDO::FETCH_ASSOC);
		}

 
	}

 ?>

