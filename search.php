<?php 

	require 'config.php';
	require 'vendor/autoload.php';

	use Edu\Board\Controller\Result;

	$res = new Result;


	/**
	 * search Result validate
	 */
	if (isset($_POST['result'])) {
		//get value
		$exam = $_POST['exam'];
		$board = $_POST['board'];
		$year = $_POST['year'];
		$roll = $_POST['roll'];
		$reg = $_POST['reg'];


		$result_data = $res -> serachResult($exam, $board, $year, $roll, $reg);

		
	}else{
		header('location:index.php');
	}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">


				<div class="student-info">
					<div class="student-photo">
						<img src="admin/students/<?php echo $result_data['photo']; ?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $result_data['name']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $result_data['roll']; ?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $result_data['reg']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $result_data['board']; ?></td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $result_data['inst']; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><span style="color:green;font-weight:bold;">Passed<span></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td><?php echo $result_data['bangla']; ?></td>
							<td>5</td>
							<td>4.8</td>
							<td rowspan="6">4.8</td>
						</tr>
						<tr>
							<td>English</td>
							<td><?php echo $result_data['english']; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Math</td>
							<td><?php echo $result_data['math']; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Social Science</td>
							<td><?php echo $result_data['social']; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Science</td>
							<td><?php echo $result_data['science']; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
						<tr>
							<td>Religion</td>
							<td><?php echo $result_data['religion']; ?></td>
							<td>5</td>
							<td>4.8</td>
						</tr>
					</table>
				</div>




		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-2019 Ministry of Education, All rights reserved.</p>
			</div>
			<div class="f-right">
				<span>Powered by</span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>

	

	
</body>
</html>