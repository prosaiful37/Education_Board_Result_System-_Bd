<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\User;

	$user = new User;


	$data = $user -> allUser();

	$all_data = $data -> fetchAll();


	$i = 1;
	foreach( $all_data  as $val) :



 ?>
	 <tr>
	    <td><?php echo $i; $i++; ?></td>
	    <td><?php echo $val['name']; ?></td>
	    <td><?php echo $val['username']; ?></td>
	    <td><?php echo $val['email']; ?></td>
	    <td><?php echo $val['cell']; ?></td>
	    <td><?php echo $val['role']; ?></td>
	    <td><img style="width: 50px; height: 40px; " src="images/<?php echo $val['photo']; ?>" alt=""></td>
	    <td><?php echo $val['status']; ?></td>
	    <td>
	        <a class="btn btn-sm btn-info" href="#">View</a>
	        <a class="btn btn-sm btn-warning" href="#">Edit</a>
	        <a id="delete_user" user_id="<?php echo $val['id']; ?>" class="btn btn-sm btn-danger" href="#">Delete</a>

	    </td>
	</tr>

<?php endforeach; ?>