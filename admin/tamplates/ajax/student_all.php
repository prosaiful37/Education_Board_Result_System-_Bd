<?php 

	require '../../../config.php';
	require '../../../vendor/autoload.php';

	use Edu\Board\Controller\Student;

	$stu = new Student;

	$data = $stu -> allStudents();

	$i = 1;
	foreach($data as $st) :





?>

	<tr>
        <td><?php echo $i; $i++; ?></td>
        <td><?php echo $st['name']; ?></td>
        <td><?php echo $st['roll']; ?></td>
        <td><?php echo $st['reg']; ?></td>
        <td><?php echo $st['board']; ?></td>
        <td><?php echo $st['inst']; ?></td>
        <td><?php echo $st['exam']; ?></td>
        <td><?php echo $st['year']; ?></td>
        <td><img style="width: 50px; height: 40px; " src="students/<?php echo $st['photo']; ?>" alt=""></td>
        <td><?php echo $st['status']; ?></td>
        <td>
            <a id="single_student" class="btn btn-sm btn-info" single="<?php echo $st['id']; ?>" href="#">View</a>
            <a class="btn btn-sm btn-warning" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" href="#">Delete</a>

        </td>
    </tr>

 <?php endforeach; ?>