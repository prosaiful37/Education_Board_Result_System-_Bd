<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\User;

	$user = new User;


	$data = $user -> createUser($_POST);
	echo $data;







 ?>