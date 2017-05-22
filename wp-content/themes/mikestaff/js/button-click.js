jQuery(document).ready(function($) {
	$('#check-availability-button').click(function(){
		var post_id = $(this).attr('data-id');
		console.log(post_id);


		$.ajax({
			type: 'POST',
			url: buttonclickajax.ajaxurl,
			data: {
				action: 'update_button_clicks',
				post_id : post_id
			},
			success: function( data ) {
				console.log( data );
			}

		});
	})
});