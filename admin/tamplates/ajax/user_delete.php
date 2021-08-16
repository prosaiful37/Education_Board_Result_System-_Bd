<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\User;

	$user = new User;




	$id = $_POST['id'];

	$data = $user -> userDelete($id);

	if ($data) {
		echo "<p class=\"alert alert-success\"> User Data Delete Successfully <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
	}
	













