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
				$("<p class=\"alert alert-danger\"> All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>")
			}

		});










	});
})(jQuery)