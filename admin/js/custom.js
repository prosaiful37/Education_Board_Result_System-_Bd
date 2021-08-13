(function($){
	$(document).ready(function(){
		
		//dashmenu active 
		// $(document).on('click', 'ul#dashmenu li', function (){
		// 	$('ul#dashmenu li').removeClass('active');
		// 	$(this).addClass('active');
		// });


		//add new user modal
		$(document).on('click','#add_user_btn', function(){
			$('#add_user_modal').modal('show');

			return false;
		});










	});
})(jQuery)