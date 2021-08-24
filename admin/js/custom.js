(function($){
	$(document).ready(function(){
		
	

		//add new user modal
		$(document).on('click','#add_user_btn', function(){
			$('#add_user_modal').modal('show');

			return false;
		});

		//add new student modal
		$(document).on('click','#add_student_btn', function(){
			$('#add_student_modal').modal('show');

			return false;
		});


		



		//add new result modal
		$(document).on('click','#add_result_btn', function(){
			$('#add_result_modal').modal('show');

			return false;
		});


		


		//all data show user
		function allUser(){

			$.ajax({
				url : 'tamplates/ajax/user_all.php',
				success : function(data) {
				$('#all_users_tbody').html(data);

				}
			});
			

		}
		allUser();

		//add new user 
		$(document).on('submit','form#add_user_form', function(e){
			e.preventDefault();

			$.ajax({
				url : 'tamplates/ajax/user_add.php',
				method : "POST",
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data){
					
					$('form#add_user_form')[0].reset()

					$('#add_user_modal').modal('hide');
					$('.mess').html(data);
					allUser();

				},


			});
		});

		//Delete user
		$(document).on('click','a#delete_user',function(e){
			e.preventDefault();

			let del = confirm('Are you sure?');
			let id = $(this).attr('user_id');

			if (del == true) {

				$.ajax({
					url : "tamplates/ajax/user_delete.php",
					method : "POST",
					data : {id : id},
					success : function(data){
						$('.mess').html(data);
						allUser();
					}
				});



			}else {
				return false;
			}

		});


		//add new student
		$(document).on('submit','form#add_student_form', function(e){
			e.preventDefault();

			//get val
			let name = $('form#add_student_form input[name="name"]').val();
			let roll = $('form#add_student_form input[name="roll"]').val();
			let reg  = $('form#add_student_form input[name="reg"]').val();

			if (name == "" || roll == "" || reg == "") {
				$('.student-mess').html("<p class=\"alert alert-danger\"> All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>");
			}else{
				//student data create
				$.ajax({
					url : 'tamplates/ajax/student_add.php',
					method : "POST",
					data : new FormData(this),
					contentType : false,
					processData : false,
					success : function(data){
						$('form#add_student_form')[0].reset();
						$('#add_student_modal').modal('hide');
						$('.mess').html("<p class=\"alert alert-success\"> Student Added Succssful ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>");
						allStudent();
					}
				});
			}

		});

		//all student show
		function allStudent(){
			$.ajax({
				url : 'tamplates/ajax/student_all.php',
				success : function(data){
					$('table tbody#student_alls').html(data);
				}
			});
		}

		allStudent();



		//single studnet data show
		$(document).on('click','#single_student', function(){
			$('#view_single_student').modal('show');

			return false;
		});

		//single data show
		// $(document).on('click','a#single_student',function(e){
		// 	e.preventDefault();

		// 	let id = $(this).attr('user_id');

			

		// 		$.ajax({
		// 			url : "tamplates/ajax/single_student.php",
		// 			method : "GET",
		// 			data : {id : id},
		// 			success : function(data){
		// 				//$('.mess').html(data);
		// 									}
		// 		});

		// 		allStudent();


		// });

		//search student

		$(document).on('keyup','input#student_search', function(){
			let stu_val = $(this).val();

			$.ajax({
				url : "tamplates/ajax/student_search.php",
				method : "POST",
				data : { stu_val : stu_val  },
				success : function(data){
					$('.stu_res').html(data);
				}


			});
		});

		//id receive
		$('.student_res_data').hide();
		$(document).on('click','li#student_select', function(){
			

			//get studnet value
			let stu_id = $(this).attr('student_id');
			let stu_name = $(this).attr('student_name');
			let stu_roll = $(this).attr('student_roll');
			let stu_reg = $(this).attr('student_reg');
			let student_pic = $(this).attr('student_pic');


			//set values
			$('input#student_search').val(stu_id);
			$('.stu_res').hide();
			$('label#idStudnet').text('Student ID');
			$('input#student_search').attr('disabled', '');

			//single student data
			$('.student_res_data').show();
			$('.student_res_data img').attr('src', 'students/' + student_pic);
			$('.student_res_data h2').html(stu_name);
			$('.student_res_data h4').html('<strong> Roll : </strong>' + stu_roll + '<strong> Reg : </strong>' + stu_reg);




		});

		//add student result

		$(document).on('submit','form#add_student_result', function(e){
			e.preventDefault();

			$('input#student_search').removeAttr('disabled');

			$.ajax({
				url : 'tamplates/ajax/result_add.php',
				method : "POST",
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data){
					alert(data);

				}


			});

		});


	});
})(jQuery)