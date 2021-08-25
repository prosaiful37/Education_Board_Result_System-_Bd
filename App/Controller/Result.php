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


		/**
		 * calculate GPA
		 */
		public function findGradeGpa($marks)
		{

			if ($marks >= 0 && $marks <= 32 ) {
				$grade = 'F';
				$gpa = 0;
			}elseif ($marks >= 33 && $marks<=39 ) {
				$grade = 'D';
				$gpa = 1;
			}elseif ($marks >= 40 && $marks<=49 ) {
				$grade = 'C';
				$gpa = 2;
			}elseif ($marks >= 50 && $marks<=59 ) {
				$grade = 'B';
				$gpa = 3;
			}elseif ($marks >= 60 && $marks<=69  ) {
				$grade = 'A-';
				$gpa = 3.5;
			}elseif ($marks >= 70 && $marks<=79  ) {
				$grade = 'A';
				$gpa = 4;
			}elseif ($marks >= 80 && $marks<=100   ) {
				$grade = 'A+';
				$gpa = 5;
			}

			return [
				'grade'	=> $grade,
				'gpa'	=> $gpa,

			];
		}


 
	}

 ?>

