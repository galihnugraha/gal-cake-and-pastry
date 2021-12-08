$(document).ready(function() {

    $('#exampleModal').modal('show')
    $('#modalLogin').modal('show')
      
    $('#eye-login').click(function() {
    let type = $('#password-login').attr('type')

    if (type === "password") {
        $(this).removeClass('fa-eye')
        $(this).addClass('fa-eye-slash')

        $('#password-login').attr('type', 'text')
    }
    else {
        $(this).removeClass('fa-eye-slash')
        $(this).addClass('fa-eye')

        $('#password-login').attr('type', 'password')
    }		
})
	
})