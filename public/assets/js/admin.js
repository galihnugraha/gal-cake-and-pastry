$(document).ready(function() {
	
	// event ketika keyword ditulis
	$("#keyword").keyup(function() {

		// munculkan icon loading
		$('#loader').show()
		
		// ajax menggunakan $.get()
		$.get('../assets/ajax/messages-tabs.php?keyword=' + $('#keyword').val(), function(data) {

			$('#message-tabs').html(data)
			$('#loader').hide()
		
		})
	})	
})