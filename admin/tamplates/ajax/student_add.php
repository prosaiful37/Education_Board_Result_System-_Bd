<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\Student;

	$stu = new Student;

	$stu -> createStudent($_POST);
