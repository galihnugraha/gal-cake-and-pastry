$(document).ready(function() {

	$('#addCart').modal('show')
	$('#deleteItem').modal('show')
	$('#checkoutModal').modal('show')
	
	$("#baguette-plus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/baguette?act=plus&var=' + $('#baguette-number').html(), function(data) {

			$('#baguette-ajax').html(data)
		})
	})

	$("#baguette-minus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/baguette?act=minus&var=' + $('#baguette-number').html(), function(data) {

			$('#baguette-ajax').html(data)
		})
	})
	$("#brioche-plus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/brioche?act=plus&var=' + $('#brioche-number').html(), function(data) {

			$('#brioche-ajax').html(data)
		})
	})

	$("#brioche-minus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/brioche?act=minus&var=' + $('#brioche-number').html(), function(data) {

			$('#brioche-ajax').html(data)
		})
	})
	$("#corn-rye-plus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/corn-rye?act=plus&var=' + $('#corn-rye-number').html(), function(data) {

			$('#corn-rye-ajax').html(data)
		})
	})

	$("#corn-rye-minus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/corn-rye?act=minus&var=' + $('#corn-rye-number').html(), function(data) {

			$('#corn-rye-ajax').html(data)
		})
	})
	$("#crumpet-plus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/crumpet?act=plus&var=' + $('#crumpet-number').html(), function(data) {

			$('#crumpet-ajax').html(data)
		})
	})

	$("#crumpet-minus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/crumpet?act=minus&var=' + $('#crumpet-number').html(), function(data) {

			$('#crumpet-ajax').html(data)
		})
	})
	$("#muffin-plus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/muffin?act=plus&var=' + $('#muffin-number').html(), function(data) {

			$('#muffin-ajax').html(data)
		})
	})

	$("#muffin-minus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/muffin?act=minus&var=' + $('#muffin-number').html(), function(data) {

			$('#muffin-ajax').html(data)
		})
	})
	$("#croisant-plus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/croisant?act=plus&var=' + $('#croisant-number').html(), function(data) {

			$('#croisant-ajax').html(data)
		})
	})

	$("#croisant-minus").click(function() {
		
		// ajax menggunakan $.get()
		$.get('ajax/croisant?act=minus&var=' + $('#croisant-number').html(), function(data) {

			$('#croisant-ajax').html(data)
		})
	})		
})