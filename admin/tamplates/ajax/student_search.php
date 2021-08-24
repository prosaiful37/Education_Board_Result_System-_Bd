<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\Student;


	$stu = new Student;

	$data = $stu -> studentSearch($_POST['stu_val']);

	

	echo "<ul>";

	foreach($data as $student) : 



?>

	<li id="student_select" student_id="<?php echo $student['id']; ?>" student_name="<?php echo $student['name']; ?>" student_roll="<?php echo $student['roll']; ?>" student_reg="<?php echo $student['reg']; ?>" student_pic="<?php echo $student['photo']; ?>"  style="list-style: none;">
	<img style="width: 60px;height: 60px;border-radius: 60%;" src="students/<?php echo $student['photo']; ?>" alt="">
	<span><?php echo $student['name']; ?></span><span> - Roll : <?php echo $student['roll']; ?></span><span>  Reg : <?php echo $student['reg']; ?></span>
	</li>
	<br>
	<br>
			


<?php endforeach; ?>
</ul>