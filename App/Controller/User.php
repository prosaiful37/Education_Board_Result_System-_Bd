<?php 

	namespace Edu\Board\Controller;
	use Edu\Board\Support\Database; 
	/**
	 * user management
	 */
	class User extends Database
	{



		/**
		 * User add
		 */
		public function createUser($data)
		{
			$data = $this -> create('users', [
				'name'	=> $data['name'],
				'username' => $data['uname'],
				'pass'	=> password_hash('login', PASSWORD_DEFAULT),
				'email'	=> $data['email'],
				'cell'	=> $data['cell'],
				'role'	=> $data['role'],



			]);

			if ($data) {
				return "<p class=\"alert alert-success\"> User Added Successfully <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}


			
		}

		/**
		 * all user data show
		 */

		public function allUser()
		{
			$data = $this -> all('users');
			return $data;

		}

		/**
		 * user data delete
		 */
		public function userDelete($id)
		{
			$data = $this -> delete('users', $id);

			if ($data) {
				return true;
			}
		}









		/**
		 * 
		 */
		public function passwordChange($user_id, $new_pass)
		{
			$this -> update('users', $user_id,[
				'pass' => password_hash($new_pass, PASSWORD_DEFAULT),


			]);

			return "<p class=\"alert alert-success\"> Password Update Successfully <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}





	}



















 ?>