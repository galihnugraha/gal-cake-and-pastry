$(document).ready(function() {

	$("#password-register").keyup(function() {
		let password = $("#password-register").val().length

		if (password == 0) {
			$(".validate").css("color", "red")
			$('.validate').html('<i>Password cannot be blank </i>')
			
			$('#register').attr('disabled','')
		} 
		else if (password < 6 || password > 12) {
			$(".validate").css("color", "red")
			$('.validate').html('<i>Password must be 6-12 chars</i>')
			
			$('#register').attr('disabled','')
		} 
		else {
			$(".validate").css("color", "green")
			$('.validate').html('<i>Password has met the requirements</i>')
			
			if ($('#agree').is(':checked')) {
				$('#register').removeAttr('disabled','')
			}
			else {
				$('#register').attr('disabled','')
			}

		}
	})

	$('.agree').click(function(){
		let password = $("#password-register").val().length

	    if($('#agree').is(':checked')) {
	        
	        if (password >= 6 && password <= 12) {
				$('#register').removeAttr('disabled','')
			}
			else {
				$('#register').attr('disabled','')
			} 
	    }
	    else {
	    	$('#register').attr('disabled','')
	    }
	})
	
	$('#eye-register').click(function() {
		let type = $('#password-register').attr('type')

		if (type === "password") {
			$(this).removeClass('fa-eye')
			$(this).addClass('fa-eye-slash')

			$('#password-register').attr('type', 'text')
		}
		else {
			$(this).removeClass('fa-eye-slash')
			$(this).addClass('fa-eye')

			$('#password-register').attr('type', 'password')
		}		
	})
	
})