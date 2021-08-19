<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\Student;

	$stu = new Student;


	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$single_student = $stu -> singleDataStudent($id);
	}

	
