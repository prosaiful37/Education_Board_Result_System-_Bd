<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\Result;


	$res = new Result;


	$res -> addResult($_POST);

